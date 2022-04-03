<?php declare(strict_types = 1);

// phpcs:disable SlevomatCodingStandard.Variables.DisallowSuperGlobalVariable

use Dogma\Debug\Dumper;
use Dogma\Debug\FileStreamWrapper;
use Dogma\Io\Io;
use Tracy\Debugger;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/nette/tester/src/bootstrap.php';

if (file_exists(dirname(__DIR__, 3) . '/dogma-debug/src/debug-client.php')) {
    require_once dirname(__DIR__, 3) . '/dogma-debug/src/debug-client.php';

    Dumper::trimPathPrefixBefore('dogma');
    Dumper::$traceDetails = true;
    Dumper::$traceSkip[] = [Io::class, null];
    FileStreamWrapper::enable();
    FileStreamWrapper::$log &= ~FileStreamWrapper::STAT;
    FileStreamWrapper::$log &= ~FileStreamWrapper::DIRS;
    FileStreamWrapper::$logIncludes = false;
}

if (!empty($_SERVER['argv'])) {
    // may be running from command line, but under 'cgi-fcgi' SAPI
    header('Content-Type: text/plain');
} elseif (PHP_SAPI !== 'cli') {
    // running from browser
    header('Content-Type: text/html');
    Debugger::enable(Debugger::DEVELOPMENT, dirname(__DIR__, 2) . '/log/');
    Debugger::$strictMode = true;
}
