<?php declare(strict_types = 1);

use Dogma\Debug\Dumper;
use Dogma\Dom\Document;
use Dogma\Dom\QueryEngine;
use Dogma\Io\Io;
use Dogma\Io\Stream\HttpContext;
use Dogma\Re;
use Dogma\Str;
use Dogma\StrictBehaviorMixin;

require_once dirname(__DIR__) . '/vendor/autoload.php';

Dumper::$doNotTraverse[] = QueryEngine::class;

define('LIMIT', false);

class Scraper
{
    use StrictBehaviorMixin;

    private const USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36';
    private const BASE_URL = 'https://www.php.net/manual/en/';

    private const PROBABLY_NOT_METHOD_SLUGS = [
        'about.callbacks',
        'callbacks',
        'connections',
        'constants',
        'constructing.signal.events',
        'creating',
        'drivers',
        'error-handling',
        'example.admin',
        'examples',
        'examples-1',
        'examples-arithmetic',
        'examples-basic',
        'examples-complete',
        'examples-overview',
        'examples.arrays',
        'examples.basic',
        'expiration',
        'extending',
        'fileformat',
        'fileformat.signature',
        'flags',
        'formats',
        'global.constants',
        'lobs',
        'periodic-modes',
        'persistence',
        'prepared-statements',
        'requirements',
        'resources',
        'sessions',
        'setup',
        'transactions',
        'using',
        'watcher-callbacks',
        'watchers',
    ];

    private $constants = [];

    public function run(): void
    {
        $indexes = [
            'funcref.php' => 'book.',
            'refs.database.abstract.php' => 'ref.',
            'refs.database.vendors.php' => 'ref.',
            'pdo.drivers.php' => 'ref.',
        ];

        foreach ($indexes as $index => $prefix) {
            rl("index: $index");
            $html = Io::read(self::BASE_URL . $index, 0, null, $this->createContext());
            foreach (Re::matchAll($html, "~href=\"([A-Za-z0-9_.-]+\\.php)\"~")[1] as $link) {
                if (Str::startsWith($link, $prefix)) {
                    //////
                    if (LIMIT && $link !== 'book.array.php') {
                        continue;
                    }
                    $this->scrapeExtension($link);
                }
                if (Str::startsWith($link, 'class.')) {
                    //////
                    if (LIMIT && $link !== 'class.sqlite3.php') {
                        continue;
                    }
                    $this->scrapeClass($link);
                }
            }
        }

        rd($this->constants);
    }

    private function scrapeExtension(string $extension): void
    {
        $name = Str::between($extension, 'book.', '.php') ?? Str::between($extension, 'ref.', '.php');
        rl("- extension: $name");

        $html = Io::read(self::BASE_URL . $extension, 0, null, $this->createContext());
        $matches = Re::matchAll($html, "~href=\"((?:function|class)\\.[A-Za-z0-9_.-]+\\.php)\"~");
        if ($matches === []) {
            return;
        }
        foreach ($matches[1] as $link) {
            //////
            if (LIMIT && $link !== 'function.array-unique.php') {
                continue;
            }

            if (Str::startsWith($link, 'function.')) {
                $this->scrapeFunction($link);
            } elseif (Str::startsWith($link, 'class.')) {
                $this->scrapeClass($link);
            }
        }
    }

    private function scrapeClass(string $link): void
    {
        $html = Io::read(self::BASE_URL . $link, 0, null, $this->createContext());
        $class = Re::submatch($html, '~<strong class="classname">([A-Za-z0-9_\\\\]+)</strong>~');
        if ($class === null) {
            rl("Error: class name not matched in $link");
        }
        $slug = Str::between($link, 'class.', '.php');

        rl("- - class: $class");

        $matches = Re::matchAll($html, "~href=\"($slug\\.[A-Za-z0-9_.-]+\\.php)\"~");
        if ($matches === []) {
            return;
        }
        $matches = array_unique($matches[1]);
        foreach ($matches as $flink) {
            //////
            if (LIMIT && $flink !== 'sqlite3.construct.php') {
                continue;
            }

            $this->scrapeFunction($flink);
        }
    }

    private function scrapeFunction(string $link): void
    {
        $html = Io::read(self::BASE_URL . $link, 0, null, $this->createContext());
        $class = null;
        $function = Re::submatch($html, "~<h1 class=\"refname\">([A-Za-z0-9_:\\\\]+)</h1>~");
        if ($function === null) {
            $slug = Str::between($link, '.', '.php');
            if (!in_array($slug, self::PROBABLY_NOT_METHOD_SLUGS, true)) {
                rl("ERROR: function name not matched on $link");
            }
            return;
        }
        if (Str::contains($function, '::')) {
            [$class, $function] = explode('::', $function);
        }

        rl("- - - function: $function");

        $dom = new Document($html);
        foreach ($dom->find('dt[code[.parameter]]') as $node) {
            $parameter = $node->findOne('code')->textContent;
            $content = $dom->saveHTML($node->findOne('following-sibling::dd')->getElement());

            $matches = Re::matchAll($content, '~<strong><code>([A-Z_][A-Z0-9_]*)</code></strong>~');
            if ($matches !== []) {
                foreach ($matches[1] as $constant) {
                    $this->constants[$class][$function][$parameter][$constant] = false;
                }
            }

            $matches = Re::matchAll($content, '~<code class="literal">([A-Z][A-Z0-9_]*)</code>~');
            if ($matches !== []) {
                foreach ($matches[1] as $constant) {
                    $this->constants[$class][$function][$parameter][$constant] = false;
                }
            }
        }
    }

    private function createContext(): HttpContext
    {
        $context = StreamContext::createHttp();
        $context->setUserAgent(self::USER_AGENT);

        return $context;
    }

}

$s = new Scraper();
$s->run();
