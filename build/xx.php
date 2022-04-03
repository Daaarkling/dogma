<?php declare(strict_types=1);
<?php declare(strict_types=1);

$constants = [
    "" => [
        apcu_add => [
            ttl => ["0"], // 1 item (1 B)
        ], // 1 item
        apcu_entry => [
            ttl => ["0"], // 1 item (1 B)
        ], // 1 item
        apcu_store => [
            ttl => ["0"], // 1 item (1 B)
        ], // 1 item
        debug_backtrace => [
            limit => ["0"], // 1 item (1 B)
        ], // 1 item
        debug_print_backtrace => [
            limit => ["0"], // 1 item (1 B)
        ], // 1 item
        error_log => [
            extra_headers => ["1"], // 1 item (1 B)
        ], // 1 item
        trigger_error => [
            error_level => ["E_USER_NOTICE"], // 1 item (13 B)
        ], // 1 item
        ob_start => [
            chunk_size => ["0"], // 1 item (1 B)
            flags => [
                "PHP_OUTPUT_HANDLER_CLEANABLE", // 28 B
                "PHP_OUTPUT_HANDLER_FLUSHABLE", // 28 B
                "PHP_OUTPUT_HANDLER_REMOVABLE", // 28 B
                "PHP_OUTPUT_HANDLER_STDFLAGS", // 27 B
                "PHP_OUTPUT_HANDLER_CLEANABLE", // 28 B
                "PHP_OUTPUT_HANDLER_FLUSHABLE", // 28 B
                "PHP_OUTPUT_HANDLER_REMOVABLE", // 28 B
            ], // 7 items
        ], // 2 items
        assert_options => [
            value => ["ASSERT_CALLBACK"], // 1 item (15 B)
        ], // 1 item
        dl => [
            extension_filename => ["ZEND_MODULE_API_NO", "20010901"], // 2 items (18 B, 8 B)
        ], // 1 item
        extension_loaded => [
            extension => ["CGI", "CLI"], // 2 items (3 B, 3 B)
        ], // 1 item
        getrusage => [
            mode => ["RUSAGE_CHILDREN"], // 1 item (15 B)
        ], // 1 item
        phpcredits => [
            flags => [
                "CREDITS_DOCS", // 12 B
                "CREDITS_GENERAL", // 15 B
                "CREDITS_GROUP", // 13 B
                "CREDITS_MODULES", // 15 B
                "CREDITS_FULLPAGE", // 16 B
            ], // 5 items
        ], // 1 item
        runkit7_method_add => [
            flags => [
                "RUNKIT7_ACC_PUBLIC", // 18 B
                "RUNKIT7_ACC_PROTECTED", // 21 B
                "RUNKIT7_ACC_PRIVATE", // 19 B
                "RUNKIT7_ACC_STATIC", // 18 B
            ], // 4 items
        ], // 1 item
        runkit7_method_redefine => [
            flags => [
                "RUNKIT7_ACC_PUBLIC", // 18 B
                "RUNKIT7_ACC_PROTECTED", // 21 B
                "RUNKIT7_ACC_PRIVATE", // 19 B
                "RUNKIT7_ACC_STATIC", // 18 B
            ], // 4 items
        ], // 1 item
        wincache_ucache_add => [
            ttl => ["0"], // 1 item (1 B)
        ], // 1 item
        wincache_ucache_set => [
            ttl => ["0"], // 1 item (1 B)
        ], // 1 item
        xhprof_enable => [
            flags => ["XHPROF_FLAGS_MEMORY"], // 1 item (19 B)
        ], // 1 item
        openal_buffer_data => [
            format => [
                "AL_FORMAT_MONO8", // 15 B
                "AL_FORMAT_MONO16", // 16 B
                "AL_FORMAT_STEREO8", // 17 B
                "AL_FORMAT_STEREO16", // 18 B
            ], // 4 items
        ], // 1 item
        openal_buffer_get => [
            property => ["AL_FREQUENCY", "AL_BITS", "AL_CHANNELS", "AL_SIZE"], // 4 items (12 B, 7 B, 11 B, 7 B)
        ], // 1 item
        openal_listener_get => [
            property => ["AL_GAIN", "AL_POSITION", "AL_VELOCITY", "AL_ORIENTATION"], // 4 items (7 B, 11 B, 11 B, 14 B)
        ], // 1 item
        openal_listener_set => [
            property => ["AL_GAIN", "AL_POSITION", "AL_VELOCITY", "AL_ORIENTATION"], // 4 items (7 B, 11 B, 11 B, 14 B)
        ], // 1 item
        openal_source_get => [
            property => [
                "AL_SOURCE_RELATIVE", // 18 B
                "AL_SOURCE_STATE", // 15 B
                "AL_PITCH", // 8 B
                "AL_GAIN", // 7 B
                "AL_MIN_GAIN", // 11 B
                "AL_MAX_GAIN", // 11 B
                "AL_MAX_DISTANCE", // 15 B
                "AL_ROLLOFF_FACTOR", // 17 B
                "AL_CONE_OUTER_GAIN", // 18 B
                "AL_CONE_INNER_ANGLE", // 19 B
                "AL_CONE_OUTER_ANGLE", // 19 B
                "AL_REFERENCE_DISTANCE", // 21 B
                "AL_POSITION", // 11 B
                "AL_VELOCITY", // 11 B
                "AL_DIRECTION", // 12 B
            ], // 15 items
        ], // 1 item
        openal_source_set => [
            property => [
                "AL_BUFFER", // 9 B
                "AL_LOOPING", // 10 B
                "AL_SOURCE_RELATIVE", // 18 B
                "AL_SOURCE_STATE", // 15 B
                "AL_PITCH", // 8 B
                "AL_GAIN", // 7 B
                "AL_MIN_GAIN", // 11 B
                "AL_MAX_GAIN", // 11 B
                "AL_MAX_DISTANCE", // 15 B
                "AL_ROLLOFF_FACTOR", // 17 B
                "AL_CONE_OUTER_GAIN", // 18 B
                "AL_CONE_INNER_ANGLE", // 19 B
                "AL_CONE_OUTER_ANGLE", // 19 B
                "AL_REFERENCE_DISTANCE", // 21 B
                "AL_POSITION", // 11 B
                "AL_VELOCITY", // 11 B
                "AL_DIRECTION", // 12 B
            ], // 17 items
        ], // 1 item
        openal_stream => [
            format => [
                "AL_FORMAT_MONO8", // 15 B
                "AL_FORMAT_MONO16", // 16 B
                "AL_FORMAT_STEREO8", // 17 B
                "AL_FORMAT_STEREO16", // 18 B
            ], // 4 items
        ], // 1 item
        radius_create_request => [
            type => ["RADIUS_ACCESS_REQUEST", "RADIUS_ACCOUNTING_REQUEST"], // 2 items (21 B, 25 B)
        ], // 1 item
        radius_put_addr => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_attr => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_int => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_string => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_vendor_addr => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_vendor_attr => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_vendor_int => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        radius_put_vendor_string => [
            options => ["RADIUS_OPTION_TAGGED", "RADIUS_OPTION_SALT"], // 2 items (20 B, 18 B)
            tag => ["RADIUS_OPTION_TAGGED"], // 1 item (20 B)
        ], // 2 items
        deflate_add => [
            flush_mode => [
                "ZLIB_BLOCK", // 10 B
                "ZLIB_NO_FLUSH", // 13 B
                "ZLIB_PARTIAL_FLUSH", // 18 B
                "ZLIB_SYNC_FLUSH", // 15 B
                "ZLIB_FULL_FLUSH", // 15 B
                "ZLIB_FINISH", // 11 B
                "ZLIB_NO_FLUSH", // 13 B
                "ZLIB_FINISH", // 11 B
            ], // 8 items
        ], // 1 item
        deflate_init => [
            options => [
                "ZLIB_ENCODING_RAW", // 17 B
                "ZLIB_ENCODING_GZIP", // 18 B
                "ZLIB_FILTERED", // 13 B
                "ZLIB_HUFFMAN_ONLY", // 17 B
                "ZLIB_RLE", // 8 B
                "ZLIB_FIXED", // 10 B
                "ZLIB_DEFAULT_STRATEGY", // 21 B
                "8", // 1 B
                "15", // 2 B
                "15", // 2 B
                "8", // 1 B
                "9", // 1 B
                "8", // 1 B
            ], // 13 items
        ], // 1 item
        gzencode => [
            encoding => ["FORCE_GZIP", "FORCE_DEFLATE", "FORCE_DEFLATE"], // 3 items (10 B, 13 B, 13 B)
        ], // 1 item
        gzfile => [
            use_include_path => ["1"], // 1 item (1 B)
        ], // 1 item
        gzopen => [
            use_include_path => ["1"], // 1 item (1 B)
        ], // 1 item
        gzseek => [
            whence => ["SEEK_SET", "SEEK_CUR", "SEEK_SET"], // 3 items (8 B, 8 B, 8 B)
        ], // 1 item
        inflate_add => [
            flush_mode => [
                "ZLIB_BLOCK", // 10 B
                "ZLIB_NO_FLUSH", // 13 B
                "ZLIB_PARTIAL_FLUSH", // 18 B
                "ZLIB_SYNC_FLUSH", // 15 B
                "ZLIB_FULL_FLUSH", // 15 B
                "ZLIB_FINISH", // 11 B
                "ZLIB_NO_FLUSH", // 13 B
                "ZLIB_FINISH", // 11 B
            ], // 8 items
        ], // 1 item
        inflate_init => [
            options => [
                "ZLIB_FILTERED", // 13 B
                "ZLIB_HUFFMAN_ONLY", // 17 B
                "ZLIB_RLE", // 8 B
                "ZLIB_FIXED", // 10 B
                "ZLIB_DEFAULT_STRATEGY", // 21 B
            ], // 5 items
        ], // 1 item
        readgzfile => [
            use_include_path => ["1"], // 1 item (1 B)
        ], // 1 item
        zlib_encode => [
            encoding => ["ZLIB_ENCODING_RAW", "ZLIB_ENCODING_DEFLATE", "ZLIB_ENCODING_GZIP"], // 3 items (17 B, 21 B, 18 B)
        ], // 1 item
        random_int => [
            min => ["PHP_INT_MIN", "PHP_INT_MIN"], // 2 items (11 B, 11 B)
            max => ["PHP_INT_MAX", "PHP_INT_MAX"], // 2 items (11 B, 11 B)
        ], // 2 items
        hash_hkdf => [
            length => ["0"], // 1 item (1 B)
        ], // 1 item
        hash_init => [
            flags => ["HASH_HMAC"], // 1 item (9 B, callable)
            key => ["HASH_HMAC"], // 1 item (9 B, callable)
        ], // 2 items
        hash_pbkdf2 => [
            length => ["0"], // 1 item (1 B)
        ], // 1 item
        mcrypt_create_iv => [
            source => [
                "MCRYPT_RAND", // 11 B
                "MCRYPT_DEV_RANDOM", // 17 B
                "MCRYPT_DEV_URANDOM", // 18 B
                "MCRYPT_RAND", // 11 B
                "MCRYPT_DEV_RANDOM", // 17 B
                "MCRYPT_DEV_RANDOM", // 17 B
            ], // 6 items
        ], // 1 item
        openssl_cms_decrypt => [
            encoding => ["OPENSSL_CMS_SMIME", "OPENSLL_CMS_DER", "OPENSSL_CMS_PEM"], // 3 items (17 B, 15 B, 15 B)
        ], // 1 item
        openssl_cms_encrypt => [
            encoding => ["OPENSSL_CMS_SMIME", "OPENSLL_CMS_DER", "OPENSSL_CMS_PEM"], // 3 items (17 B, 15 B, 15 B)
        ], // 1 item
        openssl_cms_sign => [
            encoding => ["OPENSSL_CMS_SMIME", "OPENSLL_CMS_DER", "OPENSSL_CMS_PEM"], // 3 items (17 B, 15 B, 15 B)
        ], // 1 item
        openssl_cms_verify => [
            encoding => ["OPENSSL_CMS_SMIME", "OPENSLL_CMS_DER", "OPENSSL_CMS_PEM"], // 3 items (17 B, 15 B, 15 B)
        ], // 1 item
        openssl_csr_new => [
            options => [
                "OPENSSL_KEYTYPE_DSA", // 19 B
                "OPENSSL_KEYTYPE_DH", // 18 B
                "OPENSSL_KEYTYPE_RSA", // 19 B
                "OPENSSL_KEYTYPE_EC", // 18 B
                "OPENSSL_KEYTYPE_RSA", // 19 B
            ], // 5 items
        ], // 1 item
        openssl_decrypt => [
            options => ["OPENSSL_RAW_DATA", "OPENSSL_ZERO_PADDING"], // 2 items (16 B, 20 B)
        ], // 1 item
        openssl_encrypt => [
            passphrase => ["NUL"], // 1 item (3 B)
            options => ["OPENSSL_RAW_DATA", "OPENSSL_ZERO_PADDING"], // 2 items (16 B, 20 B)
        ], // 2 items
        openssl_private_decrypt => [
            padding => [
                "OPENSSL_PKCS1_PADDING", // 21 B
                "OPENSSL_SSLV23_PADDING", // 22 B
                "OPENSSL_PKCS1_OAEP_PADDING", // 26 B
                "OPENSSL_NO_PADDING", // 18 B
            ], // 4 items
        ], // 1 item
        openssl_private_encrypt => [
            padding => ["OPENSSL_PKCS1_PADDING", "OPENSSL_NO_PADDING"], // 2 items (21 B, 18 B)
        ], // 1 item
        openssl_public_decrypt => [
            padding => ["OPENSSL_PKCS1_PADDING", "OPENSSL_NO_PADDING"], // 2 items (21 B, 18 B)
        ], // 1 item
        openssl_public_encrypt => [
            padding => [
                "OPENSSL_PKCS1_PADDING", // 21 B
                "OPENSSL_SSLV23_PADDING", // 22 B
                "OPENSSL_PKCS1_OAEP_PADDING", // 26 B
                "OPENSSL_NO_PADDING", // 18 B
            ], // 4 items
        ], // 1 item
        password_hash => [
            password => ["PASSWORD_BCRYPT"], // 1 item (15 B)
        ], // 1 item
        sodium_base642bin => [
            id => [
                "SODIUM_BASE64_VARIANT_ORIGINAL", // 30 B
                "SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING", // 41 B
                "SODIUM_BASE64_VARIANT_URLSAFE", // 29 B
                "SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING", // 40 B
            ], // 4 items
        ], // 1 item
        sodium_bin2base64 => [
            id => [
                "SODIUM_BASE64_VARIANT_ORIGINAL", // 30 B
                "SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING", // 41 B
                "SODIUM_BASE64_VARIANT_URLSAFE", // 29 B
                "SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING", // 40 B
            ], // 4 items
        ], // 1 item
        sodium_crypto_pwhash_scryptsalsa208sha256 => [
            salt => ["SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES"], // 1 item (51 B)
            opslimit => [
                "SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE", // 62 B
                "SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE", // 60 B
            ], // 2 items
            memlimit => [
                "SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE", // 62 B
                "SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE", // 60 B
            ], // 2 items
        ], // 3 items
        sodium_crypto_pwhash_str => [
            opslimit => [
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE", // 41 B
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE", // 38 B
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE", // 39 B
            ], // 3 items
            memlimit => [
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE", // 41 B
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE", // 38 B
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE", // 39 B
            ], // 3 items
        ], // 2 items
        sodium_crypto_pwhash => [
            salt => ["SODIUM_CRYPTO_PWHASH_SALTBYTES"], // 1 item (30 B)
            opslimit => [
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE", // 41 B
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE", // 38 B
                "SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE", // 39 B
            ], // 3 items
            memlimit => [
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE", // 41 B
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE", // 38 B
                "SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE", // 39 B
            ], // 3 items
            algo => ["SODIUM_CRYPTO_PWHASH_ALG_DEFAULT", "SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13"], // 2 items (32 B, 35 B)
        ], // 4 items
        sodium_crypto_secretstream_xchacha20poly1305_push => [
            tag => [
                "SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE", // 56 B
                "SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL", // 54 B
                "SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH", // 53 B
                "SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY", // 54 B
            ], // 4 items
        ], // 1 item
        cal_to_jd => [
            calendar => ["CAL_GREGORIAN", "CAL_JULIAN", "CAL_JEWISH", "CAL_FRENCH"], // 4 items (13 B, 10 B, 10 B, 10 B)
        ], // 1 item
        easter_date => [
            mode => ["CAL_EASTER_ALWAYS_JULIAN"], // 1 item (24 B)
        ], // 1 item
        easter_days => [
            mode => ["CAL_EASTER_ROMAN"], // 1 item (16 B)
        ], // 1 item
        gregoriantojd => [
            year => ["0"], // 1 item (1 B)
        ], // 1 item
        jdtojewish => [
            flags => [
                "CAL_JEWISH_ADD_ALAFIM_GERESH", // 28 B
                "CAL_JEWISH_ADD_ALAFIM", // 21 B
                "CAL_JEWISH_ADD_GERESHAYIM", // 25 B
            ], // 3 items
        ], // 1 item
        jdtounix => [
            julian_day => ["2440588", "106751993607888", "2440588", "2465443"], // 4 items (7 B, 15 B, 7 B, 7 B)
        ], // 1 item
        jewishtojd => [
            month => [
                "1", // 1 B
                "13", // 2 B
                "1", // 1 B
                "13", // 2 B
                "6", // 1 B
                "7", // 1 B
            ], // 6 items
            day => ["1", "30"], // 2 items (1 B, 2 B)
        ], // 2 items
        date_default_timezone_set => [
            timezoneId => ["UTC"], // 1 item (3 B)
        ], // 1 item
        date_sunrise => [
            utcOffset => ["SUNFUNCS_RET_TIMESTAMP"], // 1 item (22 B)
        ], // 1 item
        date_sunset => [
            utcOffset => ["SUNFUNCS_RET_TIMESTAMP"], // 1 item (22 B)
        ], // 1 item
        idate => [
            format => [
                "B", // 1 B
                "H", // 1 B
                "I", // 1 B
                "1", // 1 B
                "0", // 1 B
                "L", // 1 B
                "1", // 1 B
                "0", // 1 B
                "U", // 1 B
                "0", // 1 B
                "W", // 1 B
                "Y", // 1 B
                "Z", // 1 B
            ], // 13 items
        ], // 1 item
        strftime => [
            format => [
                "01", // 2 B
                "31", // 2 B
                "31", // 2 B
                "001", // 3 B
                "366", // 3 B
                "1", // 1 B
                "7", // 1 B
                "0", // 1 B
                "6", // 1 B
                "13", // 2 B
                "01", // 2 B
                "53", // 2 B
                "46", // 2 B
                "01", // 2 B
                "12", // 2 B
                "19", // 2 B
                "09", // 2 B
                "2008", // 4 B
                "09", // 2 B
                "79", // 2 B
                "2038", // 4 B
                "00", // 2 B
                "23", // 2 B
                "23", // 2 B
                "01", // 2 B
                "12", // 2 B
                "12", // 2 B
                "00", // 2 B
                "59", // 2 B
                "AM", // 2 B
                "PM", // 2 B
                "00", // 2 B
                "59", // 2 B
                "EST", // 3 B
                "305815200", // 9 B
            ], // 35 items
        ], // 1 item
        dio_fcntl => [
            cmd => [
                "F_SETLK", // 7 B
                "F_SETLKW", // 8 B
                "F_SETLK", // 7 B
                "F_GETLK", // 7 B
                "F_UNLCK", // 7 B
                "F_DUPFD", // 7 B
                "F_SETFL", // 7 B
                "O_APPEND", // 8 B
                "O_NONBLOCK", // 10 B
                "O_ASYNC", // 7 B
                "O_ASYNC", // 7 B
            ], // 11 items
            args => [
                "F_SETLK", // 7 B
                "F_SETLLW", // 8 B
                "SEEK_SET", // 8 B
                "SEEK_END", // 8 B
                "SEEK_CUR", // 8 B
                "F_RDLCK", // 7 B
                "F_WRLCK", // 7 B
                "F_UNLCK", // 7 B
            ], // 8 items
        ], // 2 items
        dio_open => [
            flags => [
                "O_RDONLY", // 8 B
                "O_WRONLY", // 8 B
                "O_RDWR", // 6 B
                "O_RDONLY", // 8 B
                "O_WRONLY", // 8 B
                "O_RDWR", // 6 B
                "O_CREAT", // 7 B
                "O_EXCL", // 6 B
                "O_CREAT", // 7 B
                "O_EXCL", // 6 B
                "O_TRUNC", // 7 B
                "O_APPEND", // 8 B
                "O_NONBLOCK", // 10 B
                "O_NOCTTY", // 8 B
            ], // 14 items
            mode => ["O_CREAT", "O_CREAT"], // 2 items (7 B, 7 B)
        ], // 2 items
        dio_seek => [
            whence => ["SEEK_SET", "SEEK_CUR", "SEEK_END"], // 3 items (8 B, 8 B, 8 B)
        ], // 1 item
        scandir => [
            sorting_order => [
                "SCANDIR_SORT_DESCENDING", // 23 B
                "SCANDIR_SORT_NONE", // 17 B
                "SCANDIR_SORT_DESCENDING", // 23 B
                "SCANDIR_SORT_NONE", // 17 B
            ], // 4 items
        ], // 1 item
        finfo_open => [
            magic_database => ["MAGIC"], // 1 item (5 B)
        ], // 1 item
        file_get_contents => [
            use_include_path => ["FILE_USE_INCLUDE_PATH", "FILE_USE_INCLUDE_PATH"], // 2 items (21 B, 21 B)
        ], // 1 item
        file_put_contents => [
            flags => ["FILE_USE_INCLUDE_PATH", "FILE_APPEND", "LOCK_EX"], // 3 items (21 B, 11 B, 7 B)
        ], // 1 item
        file => [
            flags => [
                "FILE_USE_INCLUDE_PATH", // 21 B
                "FILE_IGNORE_NEW_LINES", // 21 B
                "FILE_SKIP_EMPTY_LINES", // 21 B
            ], // 3 items
        ], // 1 item
        flock => [
            operation => ["LOCK_SH", "LOCK_EX", "LOCK_UN", "LOCK_NB"], // 4 items (7 B, 7 B, 7 B, 7 B)
        ], // 1 item
        fnmatch => [
            flags => ["FNM_NOESCAPE", "FNM_PATHNAME", "FNM_PERIOD", "FNM_CASEFOLD"], // 4 items (12 B, 12 B, 10 B, 12 B)
        ], // 1 item
        fopen => [
            mode => ["E_WARNING"], // 1 item (9 B)
        ], // 1 item
        fscanf => [
            format => [
                "PHP_INT_MAX", // 11 B
                "0", // 1 B
                "E", // 1 B
                "F", // 1 B
                "G", // 1 B
                "H", // 1 B
                "E", // 1 B
                "F", // 1 B
                "G", // 1 B
                "E", // 1 B
                "F", // 1 B
                "H", // 1 B
                "E", // 1 B
                "F", // 1 B
                "X", // 1 B
                "X", // 1 B
                "E", // 1 B
                "F", // 1 B
                "G", // 1 B
                "H", // 1 B
            ], // 20 items
        ], // 1 item
        fseek => [
            offset => ["SEEK_END"], // 1 item (8 B)
            whence => ["SEEK_SET", "SEEK_CUR", "SEEK_END"], // 3 items (8 B, 8 B, 8 B)
        ], // 2 items
        glob => [
            pattern => ["GLOB_NOESCAPE"], // 1 item (13 B)
            flags => [
                "GLOB_MARK", // 9 B
                "GLOB_NOSORT", // 11 B
                "GLOB_NOCHECK", // 12 B
                "GLOB_NOESCAPE", // 13 B
                "GLOB_BRACE", // 10 B
                "GLOB_ONLYDIR", // 12 B
                "GLOB_ERR", // 8 B
                "GLOB_BRACE", // 10 B
            ], // 8 items
        ], // 2 items
        parse_ini_file => [
            scanner_mode => [
                "INI_SCANNER_NORMAL", // 18 B
                "INI_SCANNER_RAW", // 15 B
                "INI_SCANNER_RAW", // 15 B
                "INI_SCANNER_TYPED", // 17 B
            ], // 4 items
        ], // 1 item
        parse_ini_string => [
            scanner_mode => [
                "INI_SCANNER_NORMAL", // 18 B
                "INI_SCANNER_RAW", // 15 B
                "INI_SCANNER_RAW", // 15 B
                "INI_SCANNER_TYPED", // 17 B
            ], // 4 items
        ], // 1 item
        pathinfo => [
            flags => [
                "PATHINFO_DIRNAME", // 16 B
                "PATHINFO_BASENAME", // 17 B
                "PATHINFO_EXTENSION", // 18 B
                "PATHINFO_FILENAME", // 17 B
            ], // 4 items
        ], // 1 item
        rename => [
            newname => ["E_WARNING"], // 1 item (9 B)
        ], // 1 item
        xattr_get => [
            flags => ["XATTR_DONTFOLLOW", "XATTR_ROOT"], // 2 items (16 B, 10 B)
        ], // 1 item
        xattr_list => [
            flags => ["XATTR_DONTFOLLOW", "XATTR_ROOT"], // 2 items (16 B, 10 B)
        ], // 1 item
        xattr_remove => [
            flags => ["XATTR_DONTFOLLOW", "XATTR_ROOT"], // 2 items (16 B, 10 B)
        ], // 1 item
        xattr_set => [
            flags => [
                "XATTR_CREATE", // 12 B
                "XATTR_REPLACE", // 13 B
                "XATTR_DONTFOLLOW", // 16 B
                "XATTR_ROOT", // 10 B
            ], // 4 items
        ], // 1 item
        xattr_supported => [
            flags => ["XATTR_DONTFOLLOW", "XATTR_DONTFOLLOW"], // 2 items (16 B, 16 B)
        ], // 1 item
        xdiff_file_patch => [
            flags => ["XDIFF_PATCH_NORMAL", "XDIFF_PATCH_REVERSE", "XDIFF_PATCH_IGNORESPACE"], // 3 items (18 B, 19 B, 23 B)
        ], // 1 item
        xdiff_string_patch => [
            flags => ["XDIFF_PATCH_NORMAL", "XDIFF_PATCH_REVERSE", "XDIFF_PATCH_IGNORESPACE"], // 3 items (18 B, 19 B, 23 B)
        ], // 1 item
        enchant_broker_get_dict_path => [
            type => ["ENCHANT_MYSPELL", "ENCHANT_ISPELL"], // 2 items (15 B, 14 B)
        ], // 1 item
        enchant_broker_set_dict_path => [
            type => ["ENCHANT_MYSPELL", "ENCHANT_ISPELL"], // 2 items (15 B, 14 B)
        ], // 1 item
        iconv_mime_decode_headers => [
            mode => ["MIME", "MIME"], // 2 items (4 B, 4 B)
        ], // 1 item
        iconv_mime_decode => [
            mode => ["MIME", "MIME"], // 2 items (4 B, 4 B)
        ], // 1 item
        iconv_mime_encode => [
            options => ["MIME", "CR", "LF"], // 3 items (4 B, 2 B, 2 B)
        ], // 1 item
        iconv => [
            to_encoding => ["E_NOTICE", "ICONV_IMPL"], // 2 items (8 B, 10 B)
        ], // 1 item
        idn_to_ascii => [
            variant => ["INTL_IDNA_VARIANT_2003", "INTL_IDNA_VARIANT_UTS46"], // 2 items (22 B, 23 B)
            idna_info => ["INTL_IDNA_VARIANT_UTS46"], // 1 item (23 B)
        ], // 2 items
        idn_to_utf8 => [
            variant => ["INTL_IDNA_VARIANT_2003", "INTL_IDNA_VARIANT_UTS46"], // 2 items (22 B, 23 B)
            idna_info => ["INTL_IDNA_VARIANT_UTS46"], // 1 item (23 B)
        ], // 2 items
        mb_chr => [
            codepoint => ["128024"], // 1 item (6 B)
        ], // 1 item
        mb_convert_case => [
            mode => [
                "MB_CASE_UPPER", // 13 B
                "MB_CASE_LOWER", // 13 B
                "MB_CASE_TITLE", // 13 B
                "MB_CASE_FOLD", // 12 B
                "MB_CASE_UPPER_SIMPLE", // 20 B
                "MB_CASE_LOWER_SIMPLE", // 20 B
                "MB_CASE_TITLE_SIMPLE", // 20 B
                "MB_CASE_FOLD_SIMPLE", // 19 B
            ], // 8 items
        ], // 1 item
        mb_convert_kana => [
            mode => [
                "R", // 1 B
                "N", // 1 B
                "A", // 1 B
                "S", // 1 B
                "K", // 1 B
                "H", // 1 B
                "C", // 1 B
                "V", // 1 B
            ], // 8 items
        ], // 1 item
        mb_detect_order => [
            encoding => ["ASCII", "SJIS", "JIS", "UCS2", "UCS4"], // 5 items (5 B, 4 B, 3 B, 4 B, 4 B)
        ], // 1 item
        mb_strcut => [
            start => ["0", "2"], // 2 items (1 B, 1 B)
            length => ["NULL"], // 1 item (4 B)
        ], // 2 items
        mb_substr => [
            start => ["0", "2", "0", "2"], // 4 items (1 B, 1 B, 1 B, 1 B)
            length => ["NULL", "NULL"], // 2 items (4 B, 4 B)
        ], // 2 items
        pspell_config_mode => [
            mode => ["PSPELL_FAST", "PSPELL_NORMAL", "PSPELL_BAD_SPELLERS"], // 3 items (11 B, 13 B, 19 B)
        ], // 1 item
        pspell_new_personal => [
            mode => [
                "PSPELL_FAST", // 11 B
                "PSPELL_NORMAL", // 13 B
                "PSPELL_BAD_SPELLERS", // 19 B
                "PSPELL_RUN_TOGETHER", // 19 B
                "PSPELL_FAST", // 11 B
                "PSPELL_NORMAL", // 13 B
                "PSPELL_BAD_SPELLERS", // 19 B
            ], // 7 items
        ], // 1 item
        pspell_new => [
            mode => [
                "PSPELL_FAST", // 11 B
                "PSPELL_NORMAL", // 13 B
                "PSPELL_BAD_SPELLERS", // 19 B
                "PSPELL_RUN_TOGETHER", // 19 B
                "PSPELL_FAST", // 11 B
                "PSPELL_NORMAL", // 13 B
                "PSPELL_BAD_SPELLERS", // 19 B
            ], // 7 items
        ], // 1 item
        exif_read_data => [
            required_sections => ["IFD0", "EXIF", "IFD", "IFD0"], // 4 items (4 B, 4 B, 3 B, 4 B)
            as_arrays => ["COMPUTED", "THUMBNAIL", "COMMENT"], // 3 items (8 B, 9 B, 7 B)
        ], // 2 items
        image_type_to_extension => [
            image_type => ["IMAGETYPE_XXX"], // 1 item (13 B)
        ], // 1 item
        image_type_to_mime_type => [
            image_type => ["IMAGETYPE_XXX"], // 1 item (13 B)
        ], // 1 item
        imageaffinematrixconcat => [
            matrix1 => ["0", "5"], // 2 items (1 B, 1 B)
            matrix2 => ["0", "5"], // 2 items (1 B, 1 B)
        ], // 2 items
        imageaffinematrixget => [
            options => [
                "IMG_AFFINE_TRANSLATE", // 20 B
                "IMG_AFFINE_SCALE", // 16 B
                "IMG_AFFINE_ROTATE", // 17 B
                "IMG_AFFINE_SHEAR_HORIZONTAL", // 27 B
                "IMG_AFFINE_SHEAR_VERTICAL", // 25 B
            ], // 5 items
        ], // 1 item
        imagecolorallocatealpha => [
            alpha => ["0", "127", "0", "127"], // 4 items (1 B, 3 B, 1 B, 3 B)
        ], // 1 item
        imagecolorclosestalpha => [
            alpha => ["0", "127", "0", "127"], // 4 items (1 B, 3 B, 1 B, 3 B)
        ], // 1 item
        imagecolorexactalpha => [
            alpha => ["0", "127", "0", "127"], // 4 items (1 B, 3 B, 1 B, 3 B)
        ], // 1 item
        imagecolorresolvealpha => [
            alpha => ["0", "127", "0", "127"], // 4 items (1 B, 3 B, 1 B, 3 B)
        ], // 1 item
        imagecropauto => [
            mode => [
                "IMG_CROP_DEFAULT", // 16 B
                "IMG_CROP_TRANSPARENT", // 20 B
                "IMG_CROP_SIDES", // 14 B
                "IMG_CROP_TRANSPARENT", // 20 B
                "IMG_CROP_BLACK", // 14 B
                "IMG_CROP_WHITE", // 14 B
                "IMG_CROP_SIDES", // 14 B
                "IMG_CROP_THRESHOLD", // 18 B
            ], // 8 items
            threshold => ["IMG_CROP_THRESHOLD"], // 1 item (18 B)
            color => ["IMG_CROP_THRESHOLD"], // 1 item (18 B)
        ], // 3 items
        imagefilledarc => [
            style => [
                "IMG_ARC_PIE", // 11 B
                "IMG_ARC_CHORD", // 13 B
                "IMG_ARC_NOFILL", // 14 B
                "IMG_ARC_EDGED", // 13 B
                "IMG_ARC_PIE", // 11 B
                "IMG_ARC_CHORD", // 13 B
                "IMG_ARC_CHORD", // 13 B
                "IMG_ARC_PIE", // 11 B
                "IMG_ARC_NOFILL", // 14 B
                "IMG_ARC_EDGED", // 13 B
                "IMG_ARC_NOFILL", // 14 B
            ], // 11 items
        ], // 1 item
        imagefilter => [
            filter => [
                "IMG_FILTER_NEGATE", // 17 B
                "IMG_FILTER_GRAYSCALE", // 20 B
                "IMG_FILTER_BRIGHTNESS", // 21 B
                "IMG_FILTER_CONTRAST", // 19 B
                "IMG_FILTER_COLORIZE", // 19 B
                "IMG_FILTER_GRAYSCALE", // 20 B
                "IMG_FILTER_EDGEDETECT", // 21 B
                "IMG_FILTER_EMBOSS", // 17 B
                "IMG_FILTER_GAUSSIAN_BLUR", // 24 B
                "IMG_FILTER_SELECTIVE_BLUR", // 25 B
                "IMG_FILTER_MEAN_REMOVAL", // 23 B
                "IMG_FILTER_SMOOTH", // 17 B
                "IMG_FILTER_PIXELATE", // 19 B
                "IMG_FILTER_SCATTER", // 18 B
            ], // 14 items
            args => [
                "IMG_FILTER_BRIGHTNESS", // 21 B
                "IMG_FILTER_CONTRAST", // 19 B
                "IMG_FILTER_COLORIZE", // 19 B
                "IMG_FILTER_SMOOTH", // 17 B
                "IMG_FILTER_PIXELATE", // 19 B
                "IMG_FILTER_SCATTER", // 18 B
            ], // 6 items
            arg2 => ["IMG_FILTER_COLORIZE", "IMG_FILTER_PIXELATE", "IMG_FILTER_SCATTER"], // 3 items (19 B, 19 B, 18 B)
            arg3 => ["IMG_FILTER_COLORIZE", "IMG_FILTER_SCATTER"], // 2 items (19 B, 18 B)
            arg4 => ["IMG_FILTER_COLORIZE"], // 1 item (19 B)
        ], // 5 items
        imageflip => [
            mode => ["IMG_FLIP_HORIZONTAL", "IMG_FLIP_VERTICAL", "IMG_FLIP_BOTH"], // 3 items (19 B, 17 B, 13 B)
        ], // 1 item
        imagegd2 => [
            mode => ["IMG_GD2_RAW", "IMG_GD2_COMPRESSED", "IMG_GD2_RAW"], // 3 items (11 B, 18 B, 11 B)
        ], // 1 item
        imagelayereffect => [
            effect => [
                "IMG_EFFECT_REPLACE", // 18 B
                "IMG_EFFECT_ALPHABLEND", // 21 B
                "IMG_EFFECT_NORMAL", // 17 B
                "IMG_EFFECT_ALPHABLEND", // 21 B
                "IMG_EFFECT_OVERLAY", // 18 B
                "IMG_EFFECT_MULTIPLY", // 19 B
            ], // 6 items
        ], // 1 item
        imagepng => [
            filters => ["PNG_NO_FILTER", "PNG_ALL_FILTERS", "PNG_FILTER_XXX"], // 3 items (13 B, 15 B, 14 B)
        ], // 1 item
        imagescale => [
            mode => [
                "IMG_NEAREST_NEIGHBOUR", // 21 B
                "IMG_BILINEAR_FIXED", // 18 B
                "IMG_BICUBIC", // 11 B
                "IMG_BICUBIC_FIXED", // 17 B
                "IMG_WEIGHTED4", // 13 B
            ], // 5 items
        ], // 1 item
        imagesetinterpolation => [
            method => [
                "IMG_BELL", // 8 B
                "IMG_BESSEL", // 10 B
                "IMG_BICUBIC", // 11 B
                "IMG_BICUBIC_FIXED", // 17 B
                "IMG_BILINEAR_FIXED", // 18 B
                "IMG_BLACKMAN", // 12 B
                "IMG_BOX", // 7 B
                "IMG_BSPLINE", // 11 B
                "IMG_CATMULLROM", // 14 B
                "IMG_GAUSSIAN", // 12 B
                "IMG_GENERALIZED_CUBIC", // 21 B
                "IMG_HERMITE", // 11 B
                "IMG_HAMMING", // 11 B
                "IMG_HANNING", // 11 B
                "IMG_MITCHELL", // 12 B
                "IMG_POWER", // 9 B
                "IMG_QUADRATIC", // 13 B
                "IMG_SINC", // 8 B
                "IMG_NEAREST_NEIGHBOUR", // 21 B
                "IMG_WEIGHTED4", // 13 B
                "IMG_TRIANGLE", // 12 B
            ], // 21 items
        ], // 1 item
        imagesetstyle => [
            style => ["IMG_COLOR_TRANSPARENT"], // 1 item (21 B)
        ], // 1 item
        imap_body => [
            flags => ["FT_UID", "FT_PEEK", "FT_INTERNAL"], // 3 items (6 B, 7 B, 11 B)
        ], // 1 item
        imap_clearflag_full => [
            options => ["ST_UID"], // 1 item (6 B)
        ], // 1 item
        imap_close => [
            flags => ["CL_EXPUNGE"], // 1 item (10 B)
        ], // 1 item
        imap_delete => [
            flags => ["FT_UID", "UID"], // 2 items (6 B, 3 B)
        ], // 1 item
        imap_fetch_overview => [
            flags => ["FT_UID"], // 1 item (6 B)
        ], // 1 item
        imap_fetchbody => [
            flags => ["FT_UID", "FT_PEEK", "FT_INTERNAL"], // 3 items (6 B, 7 B, 11 B)
        ], // 1 item
        imap_fetchheader => [
            flags => ["FT_UID", "FT_INTERNAL", "FT_PREFETCHTEXT"], // 3 items (6 B, 11 B, 15 B)
        ], // 1 item
        imap_fetchmime => [
            flags => ["FT_UID", "FT_PEEK", "FT_INTERNAL"], // 3 items (6 B, 7 B, 11 B)
        ], // 1 item
        imap_fetchstructure => [
            flags => ["FT_UID", "UID"], // 2 items (6 B, 3 B)
        ], // 1 item
        imap_gc => [
            flags => ["IMAP_GC_ELT", "IMAP_GC_ENV", "IMAP_GC_TEXTS"], // 3 items (11 B, 11 B, 13 B)
        ], // 1 item
        imap_getmailboxes => [
            pattern => ["UW_IMAPD"], // 1 item (8 B)
        ], // 1 item
        imap_getsubscribed => [
            pattern => ["UW_IMAPD"], // 1 item (8 B)
        ], // 1 item
        imap_list => [
            pattern => ["UW_IMAPD"], // 1 item (8 B)
        ], // 1 item
        imap_listscan => [
            pattern => ["UW_IMAPD"], // 1 item (8 B)
        ], // 1 item
        imap_lsub => [
            pattern => ["UW_IMAPD"], // 1 item (8 B)
        ], // 1 item
        imap_mail_compose => [
            bodies => [
                "TYPEMULTIPART", // 13 B
                "TYPETEXT", // 8 B
                "TYPEMULTIPART", // 13 B
                "TYPEMESSAGE", // 11 B
                "TYPEAPPLICATION", // 15 B
                "TYPEAUDIO", // 9 B
                "TYPEIMAGE", // 9 B
                "TYPEMODEL", // 9 B
                "TYPEOTHER", // 9 B
                "ENC7BIT", // 7 B
                "ENC8BIT", // 7 B
                "ENCBINARY", // 9 B
                "ENCBASE64", // 9 B
                "ENCQUOTEDPRINTABLE", // 18 B
                "ENCOTHER", // 8 B
                "TYPEIMAGE", // 9 B
            ], // 16 items
        ], // 1 item
        imap_mail_copy => [
            flags => ["CP_UID", "CP_MOVE"], // 2 items (6 B, 7 B)
        ], // 1 item
        imap_mail_move => [
            flags => ["CP_UID"], // 1 item (6 B)
        ], // 1 item
        imap_open => [
            mailbox => ["INBOX"], // 1 item (5 B)
            flags => [
                "OP_READONLY", // 11 B
                "OP_ANONYMOUS", // 12 B
                "OP_HALFOPEN", // 11 B
                "CL_EXPUNGE", // 10 B
                "OP_DEBUG", // 8 B
                "OP_SHORTCACHE", // 13 B
                "OP_SILENT", // 9 B
                "OP_PROTOTYPE", // 12 B
                "OP_SECURE", // 9 B
            ], // 9 items
            options => ["DISABLE_AUTHENTICATOR"], // 1 item (21 B)
        ], // 3 items
        imap_reopen => [
            flags => [
                "OP_READONLY", // 11 B
                "OP_ANONYMOUS", // 12 B
                "OP_HALFOPEN", // 11 B
                "OP_EXPUNGE", // 10 B
                "CL_EXPUNGE", // 10 B
            ], // 5 items
        ], // 1 item
        imap_savebody => [
            flags => ["FT_UID", "FT_PEEK", "FT_INTERNAL"], // 3 items (6 B, 7 B, 11 B)
        ], // 1 item
        imap_search => [
            flags => ["SE_UID"], // 1 item (6 B)
        ], // 1 item
        imap_setflag_full => [
            options => ["ST_UID"], // 1 item (6 B)
        ], // 1 item
        imap_sort => [
            criteria => [
                "SORTDATE", // 8 B
                "SORTARRIVAL", // 11 B
                "SORTFROM", // 8 B
                "SORTSUBJECT", // 11 B
                "SORTTO", // 6 B
                "SORTCC", // 6 B
                "SORTSIZE", // 8 B
            ], // 7 items
            flags => ["SE_UID", "SE_NOPREFETCH"], // 2 items (6 B, 13 B)
        ], // 2 items
        imap_status => [
            flags => [
                "SA_MESSAGES", // 11 B
                "SA_RECENT", // 9 B
                "SA_UNSEEN", // 9 B
                "SA_UIDNEXT", // 10 B
                "SA_UIDVALIDITY", // 14 B
                "SA_ALL", // 6 B
            ], // 6 items
        ], // 1 item
        imap_timeout => [
            timeout_type => [
                "IMAP_OPENTIMEOUT", // 16 B
                "IMAP_READTIMEOUT", // 16 B
                "IMAP_WRITETIMEOUT", // 17 B
                "IMAP_CLOSETIMEOUT", // 17 B
            ], // 4 items
        ], // 1 item
        mailparse_msg_extract_part_file => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_extract_part => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_extract_whole_part_file => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_free => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_get_part_data => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_get_part => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_get_structure => [
            mimemail => ["MIME"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_parse_file => [
            filename => ["CRLF"], // 1 item (4 B)
        ], // 1 item
        mailparse_msg_parse => [
            mimemail => ["MIME"], // 1 item (4 B)
            data => ["CRLF"], // 1 item (4 B)
        ], // 2 items
        bcadd => [
       |
scale => ["0"], // 1 item (1 B)
       ], // 1 item
       bcdiv => [
       |
scale => ["0"], // 1 item (1 B)
       ], // 1 item
       bcmul => [
       |
scale => ["0"], // 1 item (1 B)
       ], // 1 item
       bcpow => [
    exponent => ["2147483647"], // 1 item (10 B)
       |
scale => ["0"], // 1 item (1 B)
       ], // 2 items
       bcpowmod => [
       |
scale => ["0"], // 1 item (1 B)
       ], // 1 item
       bcsqrt => [
       |
scale => ["0"], // 1 item (1 B)
       ], // 1 item
       bcsub => [
       |
scale => ["0", "0"], // 2 items (1 B, 1 B)
       ], // 1 item
       gmp_div_q => [
    rounding_mode => ["GMP_ROUND_ZERO", "GMP_ROUND_PLUSINF", "GMP_ROUND_MINUSINF"], // 3 items (14 B, 17 B, 18 B)
], // 1 item
       gmp_export => [
    flags => ["GMP_MSW_FIRST", "GMP_NATIVE_ENDIAN"], // 2 items (13 B, 17 B)
], // 1 item
       gmp_import => [
    flags => ["GMP_MSW_FIRST", "GMP_NATIVE_ENDIAN"], // 2 items (13 B, 17 B)
], // 1 item
       gmp_init => [
    base => ["0X", "0B", "0"], // 3 items (2 B, 2 B, 1 B)
], // 1 item
       mt_srand => [
    mode => ["MT_RAND_MT19937", "MT_RAND_PHP"], // 2 items (15 B, 11 B)
], // 1 item
       round => [
    mode => [
        "PHP_ROUND_HALF_UP", // 17 B
        "PHP_ROUND_HALF_DOWN", // 19 B
        "PHP_ROUND_HALF_EVEN", // 19 B
        "PHP_ROUND_HALF_ODD", // 18 B
    ], // 4 items
], // 1 item
       fdf_set_encoding => [
    encoding => ["UHC", "GBK"], // 2 items (3 B, 3 B)
], // 1 item
       gnupg_seterrormode => [
    errormode => [
        "GNUPG_ERROR_WARNING", // 19 B
        "GNUPG_ERROR_EXCEPTION", // 21 B
        "GNUPG_ERROR_SILENT", // 18 B
        "GNUPG_ERROR_SILENT", // 18 B
    ], // 4 items
], // 1 item
       gnupg_setsignmode => [
    sigmode => [
        "GNUPG_SIG_MODE_NORMAL", // 21 B
        "GNUPG_SIG_MODE_DETACH", // 21 B
        "GNUPG_SIG_MODE_CLEAR", // 20 B
        "GNUPG_SIG_MODE_CLEAR", // 20 B
    ], // 4 items
], // 1 item
       ps_setlinecap => [
    type => ["PS_LINECAP_BUTT", "PS_LINECAP_ROUND", "PS_LINECAP_SQUARED"], // 3 items (15 B, 16 B, 18 B)
], // 1 item
       ps_setlinejoin => [
    type => ["PS_LINEJOIN_MITER", "PS_LINEJOIN_ROUND", "PS_LINEJOIN_BEVEL"], // 3 items (17 B, 17 B, 17 B)
], // 1 item
       eio_busy => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_cancel => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_chmod => [
    mode => ["0644"], // 1 item (4 B)
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 2 items
       eio_chown => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_close => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_custom => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_dup2 => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fallocate => [
    mode => ["EIO_FALLOC_FL_KEEP_SIZE", "FALLOC_FL_KEEP_SIZE"], // 2 items (23 B, 19 B)
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 2 items
       eio_fchmod => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fchown => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fdatasync => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fstat => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fstatvfs => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_fsync => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_ftruncate => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_futime => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_link => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_lstat => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_mkdir => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_mknod => [
    mode => [
        "EIO_S_IFREG", // 11 B
        "EIO_S_IFCHR", // 11 B
        "EIO_S_IFBLK", // 11 B
        "EIO_S_IFIFO", // 11 B
        "EIO_S_IFSOCK", // 12 B
    ], // 5 items
    dev => ["EIO_S_IFCHR", "EIO_S_IFBLK"], // 2 items (11 B, 11 B)
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 3 items
       eio_nop => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_open => [
    flags => ["EIO_O_RDWR"], // 1 item (10 B)
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 2 items
       eio_read => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_readahead => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_readdir => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_readlink => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_rename => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_rmdir => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_seek => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_sendfile => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_stat => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_statvfs => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_symlink => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_sync_file_range => [
    flags => [
        "EIO_SYNC_FILE_RANGE_WAIT_BEFORE", // 31 B
        "EIO_SYNC_FILE_RANGE_WRITE", // 25 B
        "EIO_SYNC_FILE_RANGE_WAIT_AFTER", // 30 B
    ], // 3 items
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 2 items
       eio_syncfs => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_truncate => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_unlink => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_utime => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 4 items
], // 1 item
       eio_write => [
    pri => [
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_DEFAULT", // 15 B
        "EIO_PRI_MIN", // 11 B
        "EIO_PRI_MAX", // 11 B
        "EIO_PRI_DEFAULT", // 15 B
    ], // 8 items
], // 1 item
       expect_expectl => [
    cases => ["EXP_GLOB", "EXP_EXACT", "EXP_REGEXP", "EXP_GLOB"], // 4 items (8 B, 9 B, 10 B, 8 B)
], // 1 item
       pcntl_getpriority => [
    mode => ["PRIO_PGRP", "PRIO_USER", "PRIO_PROCESS"], // 3 items (9 B, 9 B, 12 B)
], // 1 item
       pcntl_setpriority => [
    priority => ["20", "0"], // 2 items (2 B, 1 B)
    mode => ["PRIO_PGRP", "PRIO_USER", "PRIO_PROCESS"], // 3 items (9 B, 9 B, 12 B)
], // 2 items
       pcntl_signal => [
    handler => ["SIG_IGN", "SIG_DFL"], // 2 items (7 B, 7 B)
], // 1 item
       pcntl_sigprocmask => [
    mode => ["SIG_BLOCK", "SIG_UNBLOCK", "SIG_SETMASK"], // 3 items (9 B, 11 B, 11 B)
], // 1 item
       pcntl_sigwaitinfo => [
    info => [
        "SIGCHLD", // 7 B
        "SIGILL", // 6 B
        "SIGFPE", // 6 B
        "SIGSEGV", // 7 B
        "SIGBUS", // 6 B
        "SIGPOLL", // 7 B
    ], // 6 items
], // 1 item
       pcntl_wait => [
    flags => ["OR", "WNOHANG", "WUNTRACED"], // 3 items (2 B, 7 B, 9 B)
], // 1 item
       pcntl_waitpid => [
    process_id => ["0"], // 1 item (1 B)
    flags => ["OR", "WNOHANG", "WUNTRACED"], // 3 items (2 B, 7 B, 9 B)
], // 2 items
       posix_access => [
    flags => [
        "POSIX_F_OK", // 10 B
        "POSIX_R_OK", // 10 B
        "POSIX_W_OK", // 10 B
        "POSIX_X_OK", // 10 B
        "POSIX_R_OK", // 10 B
        "POSIX_W_OK", // 10 B
        "POSIX_X_OK", // 10 B
        "POSIX_F_OK", // 10 B
    ], // 8 items
], // 1 item
       posix_mkfifo => [
    filename => ["FIFO"], // 1 item (4 B)
    permissions => ["FIFO"], // 1 item (4 B)
], // 2 items
       posix_mknod => [
    flags => [
        "POSIX_S_IFREG", // 13 B
        "POSIX_S_IFCHR", // 13 B
        "POSIX_S_IFBLK", // 13 B
        "POSIX_S_IFIFO", // 13 B
        "POSIX_S_IFSOCK", // 14 B
    ], // 5 items
    major => ["S_IFCHR", "S_IFBLK"], // 2 items (7 B, 7 B)
], // 2 items
       posix_setrlimit => [
    soft_limit => ["POSIX_RLIMIT_INFINITY"], // 1 item (21 B)
    hard_limit => ["POSIX_RLIMIT_INFINITY"], // 1 item (21 B)
], // 2 items
       proc_open => [
    descriptorspec => ["STDIN"], // 1 item (5 B)
    other_options => ["CTRL"], // 1 item (4 B)
], // 2 items
       proc_terminate => [
    signal => ["SIGTERM"], // 1 item (7 B)
], // 1 item
       msg_receive => [
    desired_message_type => ["MSG_IPC_NOWAIT"], // 1 item (14 B)
    flags => ["MSG_IPC_NOWAIT", "MSG_ENOMSG", "MSG_EXCEPT", "MSG_NOERROR"], // 4 items (14 B, 10 B, 10 B, 11 B)
], // 2 items
       msg_send => [
    blocking => ["MSG_EAGAIN"], // 1 item (10 B)
], // 1 item
       shmop_open => [
    permissions => ["0644"], // 1 item (4 B)
], // 1 item
       shmop_read => [
    size => ["0"], // 1 item (1 B)
], // 1 item
       json_decode => [
    associative => ["JSON_OBJECT_AS_ARRAY"], // 1 item (20 B)
    flags => [
        "JSON_BIGINT_AS_STRING", // 21 B
        "JSON_INVALID_UTF8_IGNORE", // 24 B
        "JSON_INVALID_UTF8_SUBSTITUTE", // 28 B
        "JSON_OBJECT_AS_ARRAY", // 20 B
        "JSON_THROW_ON_ERROR", // 19 B
    ], // 5 items
], // 2 items
       json_encode => [
    flags => [
        "JSON_FORCE_OBJECT", // 17 B
        "JSON_HEX_QUOT", // 13 B
        "JSON_HEX_TAG", // 12 B
        "JSON_HEX_AMP", // 12 B
        "JSON_HEX_APOS", // 13 B
        "JSON_INVALID_UTF8_IGNORE", // 24 B
        "JSON_INVALID_UTF8_SUBSTITUTE", // 28 B
        "JSON_NUMERIC_CHECK", // 18 B
        "JSON_PARTIAL_OUTPUT_ON_ERROR", // 28 B
        "JSON_PRESERVE_ZERO_FRACTION", // 27 B
        "JSON_PRETTY_PRINT", // 17 B
        "JSON_UNESCAPED_LINE_TERMINATORS", // 31 B
        "JSON_UNESCAPED_SLASHES", // 22 B
        "JSON_UNESCAPED_UNICODE", // 22 B
        "JSON_THROW_ON_ERROR", // 19 B
    ], // 15 items
], // 1 item
       define => [
    case_insensitive => ["CONSTANT"], // 1 item (8 B, callable)
], // 1 item
       sapi_windows_generate_ctrl_event => [
    event => ["PHP_WINDOWS_EVENT_CTRL_C", "PHP_WINDOWS_EVENT_CTRL_BREAK", "CTRL"], // 3 items (24 B, 28 B, 4 B)
    pid => ["0"], // 1 item (1 B)
], // 2 items
       sapi_windows_set_ctrl_handler => [
           callable => ["PHP_WINDOWS_EVENT_CTRL_C", "PHP_WINDOWS_EVENT_CTRL_BREAK", "CTRL"], // 3 items (24 B, 28 B, 4 B)
           event => ["PHP_WINDOWS_EVENT_CTRL_C", "PHP_WINDOWS_EVENT_CTRL_BREAK", "CTRL"], // 3 items (24 B, 28 B, 4 B)
       ], // 2 items
       usleep => [
    microseconds => ["1000000"], // 1 item (7 B)
], // 1 item
       stream_filter_append => [
    read_write => ["STREAM_FILTER_READ", "STREAM_FILTER_WRITE", "STREAM_FILTER_ALL"], // 3 items (18 B, 19 B, 17 B)
], // 1 item
       stream_filter_prepend => [
    read_write => ["STREAM_FILTER_READ", "STREAM_FILTER_WRITE", "STREAM_FILTER_ALL"], // 3 items (18 B, 19 B, 17 B)
], // 1 item
       stream_get_line => [
    length => ["0", "8192"], // 2 items (1 B, 4 B)
], // 1 item
       stream_select => [
    tv_sec => ["0", "0", "0", "200000"], // 4 items (1 B, 1 B, 1 B, 6 B)
], // 1 item
       stream_socket_client => [
    flags => [
        "STREAM_CLIENT_CONNECT", // 21 B
        "STREAM_CLIENT_ASYNC_CONNECT", // 27 B
        "STREAM_CLIENT_PERSISTENT", // 24 B
    ], // 3 items
], // 1 item
       stream_socket_enable_crypto => [
    crypto_type => [
        "STREAM_CRYPTO_METHOD_ANY_CLIENT", // 31 B
        "STREAM_CRYPTO_METHOD_TLS_CLIENT", // 31 B
        "STREAM_CRYPTO_METHOD_ANY_SERVER", // 31 B
        "STREAM_CRYPTO_METHOD_TLS_SERVER", // 31 B
    ], // 4 items
], // 1 item
       stream_socket_pair => [
    domain => ["STREAM_PF_INET", "STREAM_PF_INET6", "STREAM_PF_UNIX"], // 3 items (14 B, 15 B, 14 B)
    type => [
        "STREAM_SOCK_DGRAM", // 17 B
        "STREAM_SOCK_RAW", // 15 B
        "STREAM_SOCK_RDM", // 15 B
        "STREAM_SOCK_SEQPACKET", // 21 B
        "STREAM_SOCK_STREAM", // 18 B
    ], // 5 items
    protocol => [
        "STREAM_IPPROTO_ICMP", // 19 B
        "STREAM_IPPROTO_IP", // 17 B
        "STREAM_IPPROTO_RAW", // 18 B
        "STREAM_IPPROTO_TCP", // 18 B
        "STREAM_IPPROTO_UDP", // 18 B
    ], // 5 items
], // 3 items
       stream_socket_recvfrom => [
    flags => ["STREAM_OOB", "STREAM_PEEK"], // 2 items (10 B, 11 B)
], // 1 item
       stream_socket_sendto => [
    flags => ["STREAM_OOB"], // 1 item (10 B)
], // 1 item
       stream_socket_server => [
    local_socket => ["AF_INET"], // 1 item (7 B)
    errno => ["0"], // 1 item (1 B)
    flags => ["STREAM_SERVER_BIND"], // 1 item (18 B)
], // 3 items
       stream_socket_shutdown => [
    mode => ["STREAM_SHUT_RD", "STREAM_SHUT_WR", "STREAM_SHUT_RDWR"], // 3 items (14 B, 14 B, 16 B)
], // 1 item
       stream_wrapper_register => [
    flags => ["STREAM_IS_URL"], // 1 item (13 B)
], // 1 item
       swoole_error_log => [
    level => [
        "SWOOLE_LOG_DEBUG", // 16 B
        "SWOOLE_LOG_TRACE", // 16 B
        "SWOOLE_LOG_INFO", // 15 B
        "SWOOLE_LOG_NOTICE", // 17 B
        "SWOOLE_LOG_WARNING", // 18 B
        "SWOOLE_LOG_ERROR", // 16 B
        "SWOOLE_LOG_NONE", // 15 B
    ], // 7 items
], // 1 item
       token_get_all => [
    flags => ["TOKEN_PARSE"], // 1 item (11 B)
], // 1 item
       http_build_query => [
    encoding_type => ["PHP_QUERY_RFC1738", "PHP_QUERY_RFC1738", "PHP_QUERY_RFC3986"], // 3 items (17 B, 17 B, 17 B)
], // 1 item
       parse_url => [
    url => ["_"], // 1 item (1 B, callable)
    component => [
        "PHP_URL_SCHEME", // 14 B
        "PHP_URL_HOST", // 12 B
        "PHP_URL_PORT", // 12 B
        "PHP_URL_USER", // 12 B
        "PHP_URL_PASS", // 12 B
        "PHP_URL_PATH", // 12 B
        "PHP_URL_QUERY", // 13 B
        "PHP_URL_FRAGMENT", // 16 B
        "PHP_URL_PORT", // 12 B
    ], // 9 items
], // 2 items
       yaml_emit_file => [
    encoding => [
        "YAML_ANY_ENCODING", // 17 B
        "YAML_UTF8_ENCODING", // 18 B
        "YAML_UTF16LE_ENCODING", // 21 B
        "YAML_UTF16BE_ENCODING", // 21 B
    ], // 4 items
    linebreak => [
        "YAML_ANY_BREAK", // 14 B
        "YAML_CR_BREAK", // 13 B
        "YAML_LN_BREAK", // 13 B
        "YAML_CRLN_BREAK", // 15 B
    ], // 4 items
], // 2 items
       yaml_emit => [
    encoding => [
        "YAML_ANY_ENCODING", // 17 B
        "YAML_UTF8_ENCODING", // 18 B
        "YAML_UTF16LE_ENCODING", // 21 B
        "YAML_UTF16BE_ENCODING", // 21 B
    ], // 4 items
    linebreak => [
        "YAML_ANY_BREAK", // 14 B
        "YAML_CR_BREAK", // 13 B
        "YAML_LN_BREAK", // 13 B
        "YAML_CRLN_BREAK", // 15 B
    ], // 4 items
], // 2 items
       yaml_parse_file => [
    pos => ["0"], // 1 item (1 B)
], // 1 item
       yaml_parse_url => [
    pos => ["0"], // 1 item (1 B)
], // 1 item
       yaml_parse => [
    pos => ["0", "0"], // 2 items (1 B, 1 B)
], // 1 item
       curl_getinfo => [
    option => [
        "CURLINFO_EFFECTIVE_URL", // 22 B
        "CURLINFO_HTTP_CODE", // 18 B
        "CURLINFO_RESPONSE_CODE", // 22 B
        "CURLINFO_FILETIME", // 17 B
        "CURLOPT_FILETIME", // 16 B
        "CURLINFO_TOTAL_TIME", // 19 B
        "CURLINFO_NAMELOOKUP_TIME", // 24 B
        "CURLINFO_CONNECT_TIME", // 21 B
        "CURLINFO_PRETRANSFER_TIME", // 25 B
        "CURLINFO_STARTTRANSFER_TIME", // 27 B
        "CURLINFO_REDIRECT_COUNT", // 23 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLINFO_REDIRECT_TIME", // 22 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLINFO_REDIRECT_URL", // 21 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLINFO_EFFECTIVE_URL", // 22 B
        "CURLINFO_PRIMARY_IP", // 19 B
        "CURLINFO_PRIMARY_PORT", // 21 B
        "CURLINFO_LOCAL_IP", // 17 B
        "CURLINFO_LOCAL_PORT", // 19 B
        "CURLINFO_SIZE_UPLOAD", // 20 B
        "CURLINFO_SIZE_DOWNLOAD", // 22 B
        "CURLINFO_SPEED_DOWNLOAD", // 23 B
        "CURLINFO_SPEED_UPLOAD", // 21 B
        "CURLINFO_HEADER_SIZE", // 20 B
        "CURLINFO_HEADER_OUT", // 19 B
        "CURLINFO_HEADER_OUT", // 19 B
        "CURLINFO_REQUEST_SIZE", // 21 B
        "CURLINFO_SSL_VERIFYRESULT", // 25 B
        "CURLOPT_SSL_VERIFYPEER", // 22 B
        "CURLINFO_CONTENT_LENGTH_DOWNLOAD", // 32 B
        "CURLINFO_CONTENT_LENGTH_UPLOAD", // 30 B
        "CURLINFO_CONTENT_TYPE", // 21 B
        "CURLINFO_PRIVATE", // 16 B
        "CURLOPT_PRIVATE", // 15 B
        "CURLINFO_RESPONSE_CODE", // 22 B
        "CURLINFO_HTTP_CONNECTCODE", // 25 B
        "CURLINFO_HTTPAUTH_AVAIL", // 23 B
        "CURLINFO_PROXYAUTH_AVAIL", // 24 B
        "CURLINFO_OS_ERRNO", // 17 B
        "CURLINFO_NUM_CONNECTS", // 21 B
        "CURLINFO_SSL_ENGINES", // 20 B
        "CURLINFO_COOKIELIST", // 19 B
        "CURLINFO_FTP_ENTRY_PATH", // 23 B
        "CURLINFO_APPCONNECT_TIME", // 24 B
        "CURLINFO_CERTINFO", // 17 B
        "CURLINFO_CONDITION_UNMET", // 24 B
        "CURLINFO_RTSP_CLIENT_CSEQ", // 25 B
        "CURLINFO_RTSP_CSEQ_RECV", // 23 B
        "CURLINFO_RTSP_SERVER_CSEQ", // 25 B
        "CURLINFO_RTSP_SESSION_ID", // 24 B
        "CURLINFO_CONTENT_LENGTH_DOWNLOAD_T", // 34 B
        "CURLINFO_CONTENT_LENGTH_UPLOAD_T", // 32 B
        "CURLINFO_HTTP_VERSION", // 21 B
        "CURLINFO_PROTOCOL", // 17 B
        "CURLINFO_PROXY_SSL_VERIFYRESULT", // 31 B
        "CURLOPT_PROXY_SSL_VERIFYPEER", // 28 B
        "CURLINFO_SCHEME", // 15 B
        "CURLINFO_SIZE_DOWNLOAD_T", // 24 B
        "CURLINFO_SIZE_UPLOAD_T", // 22 B
        "CURLINFO_SPEED_DOWNLOAD_T", // 25 B
        "CURLINFO_SPEED_UPLOAD_T", // 23 B
        "CURLINFO_APPCONNECT_TIME_T", // 26 B
        "CURLINFO_CONNECT_TIME_T", // 23 B
        "CURLINFO_FILETIME_T", // 19 B
        "CURLINFO_FILETIME", // 17 B
        "CURLINFO_NAMELOOKUP_TIME_T", // 26 B
        "CURLINFO_PRETRANSFER_TIME_T", // 27 B
        "CURLINFO_REDIRECT_TIME_T", // 24 B
        "CURLINFO_STARTTRANSFER_TIME_T", // 29 B
        "CURLINFO_TOTAL_TIME_T", // 21 B
    ], // 73 items
], // 1 item
       curl_init => [
    url => ["CURLOPT_URL"], // 1 item (11 B)
], // 1 item
       curl_multi_setopt => [
    value => [
        "CURLMOPT_PIPELINING", // 19 B
        "CURLMOPT_MAXCONNECTS", // 20 B
        "CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE", // 34 B
        "CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE", // 36 B
        "CURLMOPT_MAX_HOST_CONNECTIONS", // 29 B
        "CURLMOPT_MAX_PIPELINE_LENGTH", // 28 B
        "CURLMOPT_MAX_TOTAL_CONNECTIONS", // 30 B
        "CURLMOPT_PUSHFUNCTION", // 21 B
        "CURL_PUSH_OK", // 12 B
        "CURL_PUSH_DENY", // 14 B
    ], // 10 items
], // 1 item
       curl_setopt => [
    option => ["CURLOPT_XXX"], // 1 item (11 B)
    value => [
        "CURLOPT_AUTOREFERER", // 19 B
        "CURLOPT_COOKIESESSION", // 21 B
        "CURLOPT_CERTINFO", // 16 B
        "CURLOPT_VERBOSE", // 15 B
        "CURLOPT_CONNECT_ONLY", // 20 B
        "CURLOPT_CRLF", // 12 B
        "CURLOPT_DISALLOW_USERNAME_IN_URL", // 32 B
        "CURLOPT_DNS_SHUFFLE_ADDRESSES", // 29 B
        "CURLOPT_HAPROXYPROTOCOL", // 23 B
        "CURLOPT_SSH_COMPRESSION", // 23 B
        "CURLOPT_DNS_USE_GLOBAL_CACHE", // 28 B
        "CURLOPT_FAILONERROR", // 19 B
        "CURLOPT_SSL_FALSESTART", // 22 B
        "CURLOPT_FILETIME", // 16 B
        "CURLINFO_FILETIME", // 17 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_MAXREDIRS", // 17 B
        "CURLOPT_FORBID_REUSE", // 20 B
        "CURLOPT_FRESH_CONNECT", // 21 B
        "CURLOPT_FTP_USE_EPRT", // 20 B
        "CURLOPT_FTP_USE_EPSV", // 20 B
        "CURLOPT_FTP_CREATE_MISSING_DIRS", // 31 B
        "CURLOPT_FTPAPPEND", // 17 B
        "CURLOPT_TCP_NODELAY", // 19 B
        "CURLOPT_FTPASCII", // 16 B
        "CURLOPT_TRANSFERTEXT", // 20 B
        "CURLOPT_FTPLISTONLY", // 19 B
        "CURLOPT_HEADER", // 14 B
        "CURLINFO_HEADER_OUT", // 19 B
        "CURLINFO_", // 9 B
        "CURLOPT_HTTPGET", // 15 B
        "CURLOPT_HTTPPROXYTUNNEL", // 23 B
        "CURLOPT_HTTP_CONTENT_DECODING", // 29 B
        "CURLOPT_KEEP_SENDING_ON_ERROR", // 29 B
        "CURLOPT_MUTE", // 12 B
        "CURLOPT_NETRC", // 13 B
        "CURLOPT_NOBODY", // 14 B
        "CURLOPT_NOPROGRESS", // 18 B
        "CURLOPT_NOSIGNAL", // 16 B
        "CURLOPT_PATH_AS_IS", // 18 B
        "CURLOPT_PIPEWAIT", // 16 B
        "CURLOPT_POST", // 12 B
        "CURLOPT_PUT", // 11 B
        "CURLOPT_INFILE", // 14 B
        "CURLOPT_INFILESIZE", // 18 B
        "CURLOPT_RETURNTRANSFER", // 22 B
        "CURLOPT_SASL_IR", // 15 B
        "CURLOPT_SSL_ENABLE_ALPN", // 23 B
        "CURLOPT_SSL_ENABLE_NPN", // 22 B
        "CURLOPT_SSL_VERIFYPEER", // 22 B
        "CURLOPT_CAINFO", // 14 B
        "CURLOPT_CAPATH", // 14 B
        "CURLOPT_SSL_VERIFYSTATUS", // 24 B
        "CURLOPT_PROXY_SSL_VERIFYPEER", // 28 B
        "CURLOPT_CAINFO", // 14 B
        "CURLOPT_CAPATH", // 14 B
        "CURLOPT_SUPPRESS_CONNECT_HEADERS", // 32 B
        "CURLOPT_HEADERFUNCTION", // 22 B
        "CURLOPT_WRITEFUNCTION", // 21 B
        "CURLOPT_HTTPPROXYTUNNEL", // 23 B
        "CURLOPT_TCP_FASTOPEN", // 20 B
        "CURLOPT_TFTP_NO_OPTIONS", // 23 B
        "CURLOPT_TRANSFERTEXT", // 20 B
        "CURLOPT_UNRESTRICTED_AUTH", // 25 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_UPLOAD", // 14 B
        "CURLOPT_VERBOSE", // 15 B
        "CURLOPT_STDERR", // 14 B
        "CURLOPT_BUFFERSIZE", // 18 B
        "CURLOPT_CONNECTTIMEOUT", // 22 B
        "CURLOPT_CONNECTTIMEOUT_MS", // 25 B
        "CURLOPT_DNS_CACHE_TIMEOUT", // 25 B
        "CURLOPT_EXPECT_100_TIMEOUT_MS", // 29 B
        "CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS", // 33 B
        "CURLOPT_FTPSSLAUTH", // 18 B
        "CURLOPT_HEADEROPT", // 17 B
        "CURLHEADER_UNIFIED", // 18 B
        "CURLOPT_HTTPHEADER", // 18 B
        "CURLOPT_PROXYHEADER", // 19 B
        "CURLHEADER_SEPARATE", // 19 B
        "CURLOPT_HTTPHEADER", // 18 B
        "CURLOPT_PROXYHEADER", // 19 B
        "CURLOPT_PROXYHEADER", // 19 B
        "CURLOPT_HTTPHEADER", // 18 B
        "CURLHEADER_SEPARATE", // 19 B
        "CURLHEADER_UNIFIED", // 18 B
        "CURLOPT_HTTP_VERSION", // 20 B
        "CURL_HTTP_VERSION_NONE", // 22 B
        "CURL_HTTP_VERSION_1_0", // 21 B
        "CURL_HTTP_VERSION_1_1", // 21 B
        "CURL_HTTP_VERSION_2_0", // 21 B
        "CURL_HTTP_VERSION_2_0", // 21 B
        "CURL_HTTP_VERSION_2TLS", // 22 B
        "CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE", // 35 B
        "CURLOPT_HTTPAUTH", // 16 B
        "CURLAUTH_BASIC", // 14 B
        "CURLAUTH_DIGEST", // 15 B
        "CURLAUTH_GSSNEGOTIATE", // 21 B
        "CURLAUTH_NTLM", // 13 B
        "CURLAUTH_ANY", // 12 B
        "CURLAUTH_ANYSAFE", // 16 B
        "CURLAUTH_ANY", // 12 B
        "CURLAUTH_ANYSAFE", // 16 B
        "CURLOPT_INFILESIZE", // 18 B
        "CURLOPT_READFUNCTION", // 20 B
        "CURLOPT_LOW_SPEED_LIMIT", // 23 B
        "CURLOPT_LOW_SPEED_TIME", // 22 B
        "CURLOPT_LOW_SPEED_TIME", // 22 B
        "CURLOPT_LOW_SPEED_LIMIT", // 23 B
        "CURLOPT_MAXCONNECTS", // 19 B
        "CURLOPT_CLOSEPOLICY", // 19 B
        "CURLOPT_MAXREDIRS", // 17 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_PORT", // 12 B
        "CURLOPT_POSTREDIR", // 17 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_PROTOCOLS", // 17 B
        "CURLOPT_REDIR_PROTOCOLS", // 23 B
        "CURLPROTO_HTTP", // 14 B
        "CURLPROTO_HTTPS", // 15 B
        "CURLPROTO_FTP", // 13 B
        "CURLPROTO_FTPS", // 14 B
        "CURLPROTO_SCP", // 13 B
        "CURLPROTO_SFTP", // 14 B
        "CURLPROTO_TELNET", // 16 B
        "CURLPROTO_LDAP", // 14 B
        "CURLPROTO_LDAPS", // 15 B
        "CURLPROTO_DICT", // 14 B
        "CURLPROTO_FILE", // 14 B
        "CURLPROTO_TFTP", // 14 B
        "CURLPROTO_ALL", // 13 B
        "CURLOPT_PROXYAUTH", // 17 B
        "CURLOPT_HTTPAUTH", // 16 B
        "CURLAUTH_BASIC", // 14 B
        "CURLAUTH_NTLM", // 13 B
        "CURLOPT_PROXYPORT", // 17 B
        "CURLOPT_PROXY", // 13 B
        "CURLOPT_PROXYTYPE", // 17 B
        "CURLPROXY_HTTP", // 14 B
        "CURLPROXY_SOCKS4", // 16 B
        "CURLPROXY_SOCKS5", // 16 B
        "CURLPROXY_SOCKS4A", // 17 B
        "CURLPROXY_SOCKS5_HOSTNAME", // 25 B
        "CURLOPT_REDIR_PROTOCOLS", // 23 B
        "CURLOPT_FOLLOWLOCATION", // 22 B
        "CURLOPT_PROTOCOLS", // 17 B
        "CURLOPT_RESUME_FROM", // 19 B
        "CURLOPT_SOCKS5_AUTH", // 19 B
        "CURLAUTH_BASIC", // 14 B
        "CURLAUTH_GSSAPI", // 15 B
        "CURLAUTH_NONE", // 13 B
        "CURLAUTH_BASIC", // 14 B
        "CURLAUTH_GSSAPI", // 15 B
        "CURLAUTH_NONE", // 13 B
        "CURLOPT_PROXYUSERPWD", // 20 B
        "CURLOPT_SSL_OPTIONS", // 19 B
        "CURLSSLOPT_ALLOW_BEAST", // 22 B
        "CURLSSLOPT_NO_REVOKE", // 20 B
        "CURLOPT_SSL_VERIFYHOST", // 22 B
        "CURLOPT_SSLVERSION", // 18 B
        "CURL_SSLVERSION_DEFAULT", // 23 B
        "CURL_SSLVERSION_MAX_DEFAULT", // 27 B
        "CURLOPT_PROXY_SSL_OPTIONS", // 25 B
        "CURLSSLOPT_ALLOW_BEAST", // 22 B
        "CURLSSLOPT_NO_REVOKE", // 20 B
        "CURLSSLOPT_NO_PARTIALCHAIN", // 26 B
        "CURLOPT_PROXY_SSL_VERIFYHOST", // 28 B
        "CURLE_BAD_FUNCTION_ARGUMENT", // 27 B
        "CURLOPT_PROXY_SSLVERSION", // 24 B
        "CURL_SSLVERSION_DEFAULT", // 23 B
        "CURL_SSLVERSION_MAX_DEFAULT", // 27 B
        "CURL_SSLVERSION_DEFAULT", // 23 B
        "CURLOPT_STREAM_WEIGHT", // 21 B
        "CURLOPT_TCP_KEEPALIVE", // 21 B
        "CURLOPT_TCP_KEEPIDLE", // 20 B
        "CURLOPT_TCP_KEEPINTVL", // 21 B
        "CURLOPT_TCP_KEEPIDLE", // 20 B
        "CURLOPT_TCP_KEEPALIVE", // 21 B
        "CURLOPT_TCP_KEEPINTVL", // 21 B
        "CURLOPT_TCP_KEEPALIVE", // 21 B
        "CURLOPT_TIMECONDITION", // 21 B
        "CURLOPT_TIMEVALUE", // 17 B
        "CURL_TIMECOND_IFMODSINCE", // 24 B
        "CURLOPT_TIMEVALUE", // 17 B
        "CURLOPT_HEADER", // 14 B
        "CURL_TIMECOND_IFUNMODSINCE", // 26 B
        "CURL_TIMECOND_NONE", // 18 B
        "CURLOPT_TIMEVALUE", // 17 B
        "CURL_TIMECOND_NONE", // 18 B
        "CURL_TIMECOND_IFMODSINCE", // 24 B
        "CURLOPT_TIMEOUT", // 15 B
        "CURLOPT_TIMEOUT_MS", // 18 B
        "CURLOPT_TIMEVALUE", // 17 B
        "CURLOPT_TIMECONDITION", // 21 B
        "CURLOPT_TIMEVALUE_LARGE", // 23 B
        "CURLOPT_TIMECONDITION", // 21 B
        "CURLOPT_TIMEVALUE", // 17 B
        "CURLOPT_MAX_RECV_SPEED_LARGE", // 28 B
        "CURLOPT_MAX_SEND_SPEED_LARGE", // 28 B
        "CURLOPT_SSH_AUTH_TYPES", // 22 B
        "CURLSSH_AUTH_PUBLICKEY", // 22 B
        "CURLSSH_AUTH_PASSWORD", // 21 B
        "CURLSSH_AUTH_HOST", // 17 B
        "CURLSSH_AUTH_KEYBOARD", // 21 B
        "CURLSSH_AUTH_ANY", // 16 B
        "CURLOPT_IPRESOLVE", // 17 B
        "CURL_IPRESOLVE_WHATEVER", // 23 B
        "CURL_IPRESOLVE_V4", // 17 B
        "CURL_IPRESOLVE_V6", // 17 B
        "CURL_IPRESOLVE_WHATEVER", // 23 B
        "CURLOPT_FTP_FILEMETHOD", // 22 B
        "CURLFTPMETHOD_MULTICWD", // 22 B
        "CURLFTPMETHOD_NOCWD", // 19 B
        "CURLFTPMETHOD_SINGLECWD", // 23 B
        "CURLOPT_ABSTRACT_UNIX_SOCKET", // 28 B
        "CURLOPT_UNIX_SOCKET_PATH", // 24 B
        "CURLOPT_CAINFO", // 14 B
        "CURLOPT_SSL_VERIFYPEER", // 22 B
        "CURLOPT_CAPATH", // 14 B
        "CURLOPT_SSL_VERIFYPEER", // 22 B
        "CURLOPT_COOKIE", // 14 B
        "CURLOPT_COOKIEFILE", // 18 B
        "CURLOPT_COOKIEJAR", // 17 B
        "CURLOPT_COOKIELIST", // 18 B
        "CURLOPT_COOKIEJAR", // 17 B
        "CURLOPT_COOKIEFILE", // 18 B
        "CURLOPT_CUSTOMREQUEST", // 21 B
        "CURLOPT_DEFAULT_PROTOCOL", // 24 B
        "CURLOPT_DNS_INTERFACE", // 21 B
        "CURLOPT_DNS_LOCAL_IP4", // 21 B
        "CURLOPT_DNS_LOCAL_IP6", // 21 B
        "CURLOPT_EGDSOCKET", // 17 B
        "CURLOPT_RANDOM_FILE", // 19 B
        "CURLOPT_ENCODING", // 16 B
        "CURLOPT_FTPPORT", // 15 B
        "CURLOPT_INTERFACE", // 17 B
        "CURLOPT_KEYPASSWD", // 17 B
        "CURLOPT_SSLKEY", // 14 B
        "CURLOPT_SSH_PRIVATE_KEYFILE", // 27 B
        "CURLOPT_KRB4LEVEL", // 17 B
        "CURLOPT_LOGIN_OPTIONS", // 21 B
        "CURLOPT_USERNAME", // 16 B
        "CURLOPT_PINNEDPUBLICKEY", // 23 B
        "CURLOPT_POSTFIELDS", // 18 B
        "CURLOPT_PRIVATE", // 15 B
        "CURLINFO_PRIVATE", // 16 B
        "CURLOPT_PRE_PROXY", // 17 B
        "CURLOPT_PROXY", // 13 B
        "CURLOPT_PROXYPORT", // 17 B
        "CURLOPT_PROXY", // 13 B
        "CURLOPT_PROXY_SERVICE_NAME", // 26 B
        "CURLOPT_PROXY_CAINFO", // 20 B
        "CURLOPT_PROXY_CAPATH", // 20 B
        "CURLOPT_PROXY_CRLFILE", // 21 B
        "CURLOPT_PROXY_KEYPASSWD", // 23 B
        "CURLOPT_PROXY_SSLKEY", // 20 B
        "CURLOPT_PROXY_PINNEDPUBLICKEY", // 29 B
        "CURLOPT_PROXY_SSLCERT", // 21 B
        "CURLOPT_PROXY_SSLCERTTYPE", // 25 B
        "CURLOPT_PROXY_SSLCERTTYPE", // 25 B
        "CURLOPT_PROXY_SSL_CIPHER_LIST", // 29 B
        "CURLOPT_PROXY_TLS13_CIPHERS", // 27 B
        "CURLOPT_PROXY_SSL_CIPHER_LIST", // 29 B
        "CURLOPT_PROXY_SSLKEY", // 20 B
        "CURLOPT_PROXY_SSLKEYTYPE", // 24 B
        "CURLOPT_PROXY_SSLKEYTYPE", // 24 B
        "CURLOPT_PROXY_TLSAUTH_PASSWORD", // 30 B
        "CURLOPT_PROXY_TLSAUTH_TYPE", // 26 B
        "CURLOPT_PROXY_TLSAUTH_USERNAME", // 30 B
        "CURLOPT_PROXY_TLSAUTH_TYPE", // 26 B
        "CURLOPT_PROXY_TLSAUTH_USERNAME", // 30 B
        "CURLOPT_PROXY_TLSAUTH_PASSWORD", // 30 B
        "CURLOPT_PROXY_TLSAUTH_USERNAME", // 30 B
        "CURLOPT_PROXY_TLSAUTH_TYPE", // 26 B
        "CURLOPT_PROXY_TLSAUTH_PASSWORD", // 30 B
        "CURLOPT_PROXYUSERPWD", // 20 B
        "CURLOPT_RANDOM_FILE", // 19 B
        "CURLOPT_RANGE", // 13 B
        "CURLOPT_REFERER", // 15 B
        "CURLOPT_SERVICE_NAME", // 20 B
        "CURLOPT_SSH_HOST_PUBLIC_KEY_MD5", // 31 B
        "CURLOPT_SSH_PUBLIC_KEYFILE", // 26 B
        "CURLOPT_SSH_PRIVATE_KEYFILE", // 27 B
        "CURLOPT_KEYPASSWD", // 17 B
        "CURLOPT_SSL_CIPHER_LIST", // 23 B
        "CURLOPT_SSLCERT", // 15 B
        "CURLOPT_SSLCERTPASSWD", // 21 B
        "CURLOPT_SSLCERT", // 15 B
        "CURLOPT_SSLCERTTYPE", // 19 B
        "CURLOPT_SSLENGINE", // 17 B
        "CURLOPT_SSLKEY", // 14 B
        "CURLOPT_SSLENGINE_DEFAULT", // 25 B
        "CURLOPT_SSLKEY", // 14 B
        "CURLOPT_SSLKEYPASSWD", // 20 B
        "CURLOPT_SSLKEY", // 14 B
        "CURLOPT_SSLKEYTYPE", // 18 B
        "CURLOPT_SSLKEY", // 14 B
        "CURLOPT_TLS13_CIPHERS", // 21 B
        "CURLOPT_SSL_CIPHER_LIST", // 23 B
        "CURLOPT_UNIX_SOCKET_PATH", // 24 B
        "CURLOPT_URL", // 11 B
        "CURLOPT_USERAGENT", // 17 B
        "CURLOPT_USERNAME", // 16 B
        "CURLOPT_PASSWORD", // 16 B
        "CURLOPT_USERPWD", // 15 B
        "CURLOPT_XOAUTH2_BEARER", // 22 B
        "CURLOPT_CONNECT_TO", // 18 B
        "CURLOPT_HTTP200ALIASES", // 22 B
        "CURLOPT_HTTPHEADER", // 18 B
        "CURLOPT_POSTQUOTE", // 17 B
        "CURLOPT_PROXYHEADER", // 19 B
        "CURLOPT_QUOTE", // 13 B
        "CURLOPT_RESOLVE", // 15 B
        "CURLOPT_FILE", // 12 B
        "CURLOPT_INFILE", // 14 B
        "CURLOPT_STDERR", // 14 B
        "CURLOPT_WRITEHEADER", // 19 B
        "CURLOPT_HEADERFUNCTION", // 22 B
        "CURLOPT_PASSWDFUNCTION", // 22 B
        "CURLOPT_PROGRESSFUNCTION", // 24 B
        "CURLOPT_NOPROGRESS", // 18 B
        "CURLE_ABORTED_BY_CALLBACK", // 25 B
        "CURLOPT_READFUNCTION", // 20 B
        "CURLOPT_INFILE", // 14 B
        "CURLOPT_WRITEFUNCTION", // 21 B
        "CURLOPT_SHARE", // 13 B
        "STDERR", // 6 B
        "STDOUT", // 6 B
        "STDERR", // 6 B
        "CURLFTPAUTH_SSL", // 15 B
        "CURLFTPAUTH_TLS", // 15 B
        "CURLFTPAUTH_DEFAULT", // 19 B
        "20", // 2 B
        "0", // 1 B
        "2", // 1 B
        "0", // 1 B
        "1", // 1 B
        "2", // 1 B
        "1", // 1 B
        "2", // 1 B
        "0", // 1 B
        "1", // 1 B
        "1", // 1 B
        "2", // 1 B
        "2", // 1 B
        "1", // 1 B
        "0", // 1 B
        "60", // 2 B
        "60", // 2 B
        "STDOUT", // 6 B
        "STDERR", // 6 B
        "EOF", // 3 B
    ], // 352 items
], // 2 items
       curl_share_setopt => [
    option => ["CURLSHOPT_SHARE", "CURLSHOPT_UNSHARE"], // 2 items (15 B, 17 B)
    value => [
        "CURL_LOCK_DATA_COOKIE", // 21 B
        "CURL_LOCK_DATA_DNS", // 18 B
        "CURL_LOCK_DATA_SSL_SESSION", // 26 B
    ], // 3 items
], // 2 items
       ftp_fget => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_fput => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_get_option => [
    option => ["FTP_TIMEOUT_SEC", "FTP_AUTOSEEK"], // 2 items (15 B, 12 B)
], // 1 item
       ftp_get => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_login => [
    username => ["USER"], // 1 item (4 B)
    password => ["PASS"], // 1 item (4 B)
], // 2 items
       ftp_nb_fget => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_nb_fput => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_nb_get => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_nb_put => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_put => [
    mode => ["FTP_ASCII", "FTP_BINARY"], // 2 items (9 B, 10 B)
], // 1 item
       ftp_set_option => [
    option => ["FTP_TIMEOUT_SEC", "FTP_AUTOSEEK", "FTP_USEPASVADDRESS"], // 3 items (15 B, 12 B, 18 B)
], // 1 item
       ldap_escape => [
    flags => ["LDAP_ESCAPE_FILTER", "LDAP_ESCAPE_DN"], // 2 items (18 B, 14 B)
], // 1 item
       ldap_exop => [
    reqoid => [
        "LDAP_EXOP_START_TLS", // 19 B
        "LDAP_EXOP_MODIFY_PASSWD", // 23 B
        "LDAP_EXOP_REFRESH", // 17 B
        "LDAP_EXOP_WHO_AM_I", // 18 B
        "LDAP_EXOP_TURN", // 14 B
    ], // 5 items
    reqdata => ["LDAP_EXOP_WHO_AM_I"], // 1 item (18 B)
], // 2 items
       ldap_get_option => [
    option => [
        "LDAP_OPT_DEREF", // 14 B
        "LDAP_OPT_SIZELIMIT", // 18 B
        "LDAP_OPT_TIMELIMIT", // 18 B
        "LDAP_OPT_NETWORK_TIMEOUT", // 24 B
        "LDAP_OPT_PROTOCOL_VERSION", // 25 B
        "LDAP_OPT_ERROR_NUMBER", // 21 B
        "LDAP_OPT_DIAGNOSTIC_MESSAGE", // 27 B
        "LDAP_OPT_REFERRALS", // 18 B
        "LDAP_OPT_RESTART", // 16 B
        "LDAP_OPT_HOST_NAME", // 18 B
        "LDAP_OPT_ERROR_STRING", // 21 B
        "LDAP_OPT_MATCHED_DN", // 19 B
        "LDAP_OPT_SERVER_CONTROLS", // 24 B
        "LDAP_OPT_CLIENT_CONTROLS", // 24 B
        "LDAP_OPT_X_KEEPALIVE_IDLE", // 25 B
        "LDAP_OPT_X_KEEPALIVE_PROBES", // 27 B
        "LDAP_OPT_X_KEEPALIVE_INTERVAL", // 29 B
        "LDAP_OPT_X_TLS_CACERTDIR", // 24 B
        "LDAP_OPT_X_TLS_CACERTFILE", // 25 B
        "LDAP_OPT_X_TLS_CERTFILE", // 23 B
        "LDAP_OPT_X_TLS_CIPHER_SUITE", // 27 B
        "LDAP_OPT_X_TLS_CRLCHECK", // 23 B
        "LDAP_OPT_X_TLS_CRL_NONE", // 23 B
        "LDAP_OPT_X_TLS_CRL_PEER", // 23 B
        "LDAP_OPT_X_TLS_CRL_ALL", // 22 B
        "LDAP_OPT_X_TLS_CRLFILE", // 22 B
        "LDAP_OPT_X_TLS_DHFILE", // 21 B
        "LDAP_OPT_X_TLS_KEYFILE", // 22 B
        "LDAP_OPT_X_TLS_PACKAGE", // 22 B
        "LDAP_OPT_X_TLS_PROTOCOL_MIN", // 27 B
        "LDAP_OPT_X_TLS_RANDOM_FILE", // 26 B
        "LDAP_OPT_X_TLS_REQUIRE_CERT", // 27 B
    ], // 32 items
], // 1 item
       ldap_list => [
    deref => [
        "LDAP_DEREF_NEVER", // 16 B
        "LDAP_DEREF_SEARCHING", // 20 B
        "LDAP_DEREF_FINDING", // 18 B
        "LDAP_DEREF_ALWAYS", // 17 B
    ], // 4 items
], // 1 item
       ldap_modify_batch => [
    modifications_info => [
        "LDAP_MODIFY_BATCH_ADD", // 21 B
        "LDAP_MODIFY_BATCH_REMOVE", // 24 B
        "LDAP_MODIFY_BATCH_REMOVE_ALL", // 28 B
        "LDAP_MODIFY_BATCH_REPLACE", // 25 B
    ], // 4 items
], // 1 item
       ldap_parse_result => [
    error_code => ["0"], // 1 item (1 B)
], // 1 item
       ldap_read => [
    deref => [
        "LDAP_DEREF_NEVER", // 16 B
        "LDAP_DEREF_SEARCHING", // 20 B
        "LDAP_DEREF_FINDING", // 18 B
        "LDAP_DEREF_ALWAYS", // 17 B
    ], // 4 items
], // 1 item
       ldap_search => [
    deref => [
        "LDAP_DEREF_NEVER", // 16 B
        "LDAP_DEREF_SEARCHING", // 20 B
        "LDAP_DEREF_FINDING", // 18 B
        "LDAP_DEREF_ALWAYS", // 17 B
    ], // 4 items
], // 1 item
       ldap_set_option => [
    option => [
        "LDAP_OPT_DEREF", // 14 B
        "LDAP_OPT_SIZELIMIT", // 18 B
        "LDAP_OPT_TIMELIMIT", // 18 B
        "LDAP_OPT_NETWORK_TIMEOUT", // 24 B
        "LDAP_OPT_PROTOCOL_VERSION", // 25 B
        "LDAP_OPT_ERROR_NUMBER", // 21 B
        "LDAP_OPT_REFERRALS", // 18 B
        "LDAP_OPT_RESTART", // 16 B
        "LDAP_OPT_HOST_NAME", // 18 B
        "LDAP_OPT_ERROR_STRING", // 21 B
        "LDAP_OPT_DIAGNOSTIC_MESSAGE", // 27 B
        "LDAP_OPT_MATCHED_DN", // 19 B
        "LDAP_OPT_SERVER_CONTROLS", // 24 B
        "LDAP_OPT_CLIENT_CONTROLS", // 24 B
        "LDAP_OPT_X_KEEPALIVE_IDLE", // 25 B
        "LDAP_OPT_X_KEEPALIVE_PROBES", // 27 B
        "LDAP_OPT_X_KEEPALIVE_INTERVAL", // 29 B
        "LDAP_OPT_X_TLS_CACERTDIR", // 24 B
        "LDAP_OPT_X_TLS_CACERTFILE", // 25 B
        "LDAP_OPT_X_TLS_CERTFILE", // 23 B
        "LDAP_OPT_X_TLS_CIPHER_SUITE", // 27 B
        "LDAP_OPT_X_TLS_CRLCHECK", // 23 B
        "LDAP_OPT_X_TLS_CRLFILE", // 22 B
        "LDAP_OPT_X_TLS_DHFILE", // 21 B
        "LDAP_OPT_X_TLS_KEYFILE", // 22 B
        "LDAP_OPT_X_TLS_PROTOCOL_MIN", // 27 B
        "LDAP_OPT_X_TLS_RANDOM_FILE", // 26 B
        "LDAP_OPT_X_TLS_REQUIRE_CERT", // 27 B
        "LDAP_OPT_SERVER_CONTROLS", // 24 B
        "LDAP_OPT_CLIENT_CONTROLS", // 24 B
    ], // 30 items
], // 1 item
       dns_get_record => [
    type => [
        "DNS_A", // 5 B
        "DNS_CNAME", // 9 B
        "DNS_HINFO", // 9 B
        "DNS_CAA", // 7 B
        "DNS_MX", // 6 B
        "DNS_NS", // 6 B
        "DNS_PTR", // 7 B
        "DNS_SOA", // 7 B
        "DNS_TXT", // 7 B
        "DNS_AAAA", // 8 B
        "DNS_SRV", // 7 B
        "DNS_NAPTR", // 9 B
        "DNS_A6", // 6 B
        "DNS_ALL", // 7 B
        "DNS_ANY", // 7 B
        "DNS_ANY", // 7 B
        "DNS_ALL", // 7 B
        "DNS_CAA", // 7 B
        "DNS_A6", // 6 B
    ], // 19 items
], // 1 item
       fsockopen => [
    error_code => ["0"], // 1 item (1 B)
], // 1 item
       header => [
    header => ["REDIRECT", "201"], // 2 items (8 B, 3 B)
], // 1 item
       openlog => [
    flags => [
        "LOG_CONS", // 8 B
        "LOG_NDELAY", // 10 B
        "LOG_ODELAY", // 10 B
        "LOG_PERROR", // 10 B
        "LOG_PID", // 7 B
        "OR", // 2 B
    ], // 6 items
    facility => [
        "LOG_AUTH", // 8 B
        "LOG_AUTHPRIV", // 12 B
        "LOG_AUTHPRIV", // 12 B
        "LOG_CRON", // 8 B
        "LOG_DAEMON", // 10 B
        "LOG_KERN", // 8 B
        "LOG_LOCAL0", // 10 B
        "LOG_LOCAL7", // 10 B
        "LOG_LPR", // 7 B
        "LOG_MAIL", // 8 B
        "LOG_NEWS", // 8 B
        "LOG_SYSLOG", // 10 B
        "LOG_USER", // 8 B
        "LOG_UUCP", // 8 B
        "LOG_USER", // 8 B
    ], // 15 items
], // 2 items
       setcookie => [
    options => ["E_WARNING"], // 1 item (9 B)
], // 1 item
       syslog => [
    priority => [
        "LOG_EMERG", // 9 B
        "LOG_ALERT", // 9 B
        "LOG_CRIT", // 8 B
        "LOG_ERR", // 7 B
        "LOG_WARNING", // 11 B
        "LOG_NOTICE", // 10 B
        "LOG_INFO", // 8 B
        "LOG_DEBUG", // 9 B
        "LOG_EMERG", // 9 B
        "LOG_ALERT", // 9 B
        "LOG_CRIT", // 8 B
        "LOG_ERR", // 7 B
        "LOG_WARNING", // 11 B
        "LOG_NOTICE", // 10 B
        "LOG_INFO", // 8 B
        "LOG_DEBUG", // 9 B
    ], // 16 items
], // 1 item
       snmp_set_oid_output_format => [
    format => [
        "SNMP_OID_OUTPUT_FULL", // 20 B
        "SNMP_OID_OUTPUT_NUMERIC", // 23 B
        "SNMP_OID_OUTPUT_MODULE", // 22 B
        "SNMP_OID_OUTPUT_SUFFIX", // 22 B
        "SNMP_OID_OUTPUT_UCD", // 19 B
        "SNMP_OID_OUTPUT_NONE", // 20 B
    ], // 6 items
], // 1 item
       snmp_set_valueretrieval => [
    method => [
        "SNMP_OCTET_STR", // 14 B
        "SNMP_COUNTER", // 12 B
        "SNMP_VALUE_LIBRARY", // 18 B
        "SNMP_VALUE_PLAIN", // 16 B
    ], // 4 items
], // 1 item
       snmp2_set => [
    type => ["OPAQUE_SPECIAL_TYPES"], // 1 item (20 B)
], // 1 item
       snmp3_set => [
    type => ["OPAQUE_SPECIAL_TYPES"], // 1 item (20 B)
], // 1 item
       snmpset => [
    type => ["OPAQUE_SPECIAL_TYPES"], // 1 item (20 B)
], // 1 item
       socket_bind => [
    address => ["AF_INET", "AF_UNIX"], // 2 items (7 B, 7 B)
    port => ["AF_INET"], // 1 item (7 B)
], // 2 items
       socket_connect => [
    address => ["AF_INET", "AF_INET6", "AF_UNIX"], // 3 items (7 B, 8 B, 7 B)
    port => ["AF_INET", "AF_INET6"], // 2 items (7 B, 8 B)
], // 2 items
       socket_create_listen => [
    backlog => ["SOMAXCONN"], // 1 item (9 B)
], // 1 item
       socket_create_pair => [
    protocol => ["SOL_TCP", "SOL_UDP"], // 2 items (7 B, 7 B)
], // 1 item
       socket_create => [
    domain => ["AF_INET", "AF_INET6", "AF_UNIX"], // 3 items (7 B, 8 B, 7 B)
    type => [
        "SOCK_STREAM", // 11 B
        "SOCK_DGRAM", // 10 B
        "SOCK_SEQPACKET", // 14 B
        "SOCK_RAW", // 8 B
        "SOCK_RDM", // 8 B
    ], // 5 items
    protocol => ["SOL_TCP", "SOL_UDP"], // 2 items (7 B, 7 B)
], // 3 items
       socket_get_option => [
    level => ["SOL_SOCKET", "TCP"], // 2 items (10 B, 3 B)
    option => [
        "SO_DEBUG", // 8 B
        "SO_BROADCAST", // 12 B
        "SO_REUSEADDR", // 12 B
        "SO_REUSEPORT", // 12 B
        "SO_KEEPALIVE", // 12 B
        "SO_LINGER", // 9 B
        "SO_OOBINLINE", // 12 B
        "SO_SNDBUF", // 9 B
        "SO_RCVBUF", // 9 B
        "SO_ERROR", // 8 B
        "SO_TYPE", // 7 B
        "SOCK_STREAM", // 11 B
        "SO_DONTROUTE", // 12 B
        "SO_RCVLOWAT", // 11 B
        "SO_RCVTIMEO", // 11 B
        "SO_SNDTIMEO", // 11 B
        "SO_SNDLOWAT", // 11 B
        "TCP_NODELAY", // 11 B
        "MCAST_JOIN_GROUP", // 16 B
        "MCAST_LEAVE_GROUP", // 17 B
        "MCAST_JOIN_GROUP", // 16 B
        "MCAST_BLOCK_SOURCE", // 18 B
        "MCAST_JOIN_GROUP", // 16 B
        "MCAST_UNBLOCK_SOURCE", // 20 B
        "MCAST_BLOCK_SOURCE", // 18 B
        "MCAST_JOIN_SOURCE_GROUP", // 23 B
        "MCAST_BLOCK_SOURCE", // 18 B
        "MCAST_LEAVE_SOURCE_GROUP", // 24 B
        "MCAST_BLOCK_SOURCE", // 18 B
        "IP_MULTICAST_IF", // 15 B
        "IP_MULTICAST_IF", // 15 B
        "IPV6_MULTICAST_IF", // 17 B
        "IPV6_MULTICAST_IF", // 17 B
        "IP_MULTICAST_IF", // 15 B
        "IP_MULTICAST_LOOP", // 17 B
        "IPV6_MULTICAST_LOOP", // 19 B
        "IP_MULTICAST_LOOP", // 17 B
        "IP_MULTICAST_LOOP", // 17 B
        "IP_MULTICAST_TTL", // 16 B
        "IPV6_MULTICAST_HOPS", // 19 B
        "IP_MULTICAST_TTL", // 16 B
        "0", // 1 B
        "0", // 1 B
        "1", // 1 B
    ], // 44 items
], // 2 items
       socket_getpeername => [
    address => ["AF_INET", "AF_INET6", "AF_UNIX"], // 3 items (7 B, 8 B, 7 B)
], // 1 item
       socket_getsockname => [
    address => ["AF_INET", "AF_INET6", "AF_UNIX"], // 3 items (7 B, 8 B, 7 B)
], // 1 item
       socket_listen => [
    backlog => ["SOMAXCONN", "SOMAXCONN", "ECONNREFUSED"], // 3 items (9 B, 9 B, 12 B)
], // 1 item
       socket_read => [
    mode => ["PHP_BINARY_READ", "PHP_NORMAL_READ"], // 2 items (15 B, 15 B)
], // 1 item
       socket_recv => [
    flags => ["MSG_OOB", "MSG_PEEK", "MSG_WAITALL", "MSG_DONTWAIT"], // 4 items (7 B, 8 B, 11 B, 12 B)
], // 1 item
       socket_recvfrom => [
    flags => ["MSG_OOB", "MSG_PEEK", "MSG_WAITALL", "MSG_DONTWAIT"], // 4 items (7 B, 8 B, 11 B, 12 B)
    address => ["AF_UNIX"], // 1 item (7 B)
    port => ["AF_INET", "AF_INET6"], // 2 items (7 B, 8 B)
], // 3 items
       socket_send => [
    flags => ["MSG_OOB", "MSG_EOR", "MSG_EOF", "MSG_DONTROUTE"], // 4 items (7 B, 7 B, 7 B, 13 B)
], // 1 item
       socket_sendto => [
    flags => ["MSG_OOB", "MSG_EOR", "MSG_EOF", "MSG_DONTROUTE"], // 4 items (7 B, 7 B, 7 B, 13 B)
], // 1 item
       socket_set_option => [
    level => ["SOL_SOCKET"], // 1 item (10 B)
], // 1 item
       socket_shutdown => [
    mode => ["0", "1", "2"], // 3 items (1 B, 1 B, 1 B)
], // 1 item
       ssh2_connect => [
    callbacks => ["SSH2_MSG_IGNORE", "SSH2_MSG_DEBUG", "SSH2_MSG_DISCONNECT"], // 3 items (15 B, 14 B, 19 B)
], // 1 item
       ssh2_exec => [
    width_height_type => ["SSH2_TERM_UNIT_CHARS", "SSH2_TERM_UNIT_PIXELS"], // 2 items (20 B, 21 B)
], // 1 item
       ssh2_fingerprint => [
    flags => [
        "SSH2_FINGERPRINT_MD5", // 20 B
        "SSH2_FINGERPRINT_SHA1", // 21 B
        "SSH2_FINGERPRINT_HEX", // 20 B
        "SSH2_FINGERPRINT_RAW", // 20 B
    ], // 4 items
], // 1 item
       ssh2_shell => [
    width_height_type => ["SSH2_TERM_UNIT_CHARS", "SSH2_TERM_UNIT_PIXELS"], // 2 items (20 B, 21 B)
], // 1 item
       svn_checkout => [
    flags => ["SVN_NON_RECURSIVE", "SVN_IGNORE_EXTERNALS"], // 2 items (17 B, 20 B)
], // 1 item
       svn_diff => [
    rev1 => ["SVN_REVISION_HEAD"], // 1 item (17 B)
], // 1 item
       svn_log => [
    start_revision => ["SVN_REVISION_HEAD"], // 1 item (17 B)
    end_revision => ["SVN_REVISION_INITIAL"], // 1 item (20 B)
    flags => ["SVN_OMIT_MESSAGES", "SVN_DISCOVER_CHANGED_PATHS", "SVN_STOP_ON_COPY"], // 3 items (17 B, 26 B, 16 B)
], // 3 items
       svn_update => [
    revno => ["SVN_REVISION_HEAD", "SVN_REVISION_HEAD"], // 2 items (17 B, 17 B)
], // 1 item
       yaz_element => [
    elementset => ["F", "B"], // 2 items (1 B, 1 B)
], // 1 item
       yaz_record => [
    type => ["XML"], // 1 item (3 B)
], // 1 item
       session_name => [
    name => ["PHPSESSID"], // 1 item (9 B)
], // 1 item
       preg_grep => [
    flags => ["PREG_GREP_INVERT"], // 1 item (16 B)
], // 1 item
       preg_match_all => [
    flags => [
        "PREG_PATTERN_ORDER", // 18 B
        "PREG_SET_ORDER", // 14 B
        "PREG_PATTERN_ORDER", // 18 B
        "PREG_SET_ORDER", // 14 B
        "PREG_OFFSET_CAPTURE", // 19 B
        "PREG_UNMATCHED_AS_NULL", // 22 B
        "PREG_PATTERN_ORDER", // 18 B
        "0", // 1 B
        "1", // 1 B
    ], // 9 items
], // 1 item
       preg_match => [
    flags => ["PREG_OFFSET_CAPTURE", "PREG_UNMATCHED_AS_NULL", "0", "1"], // 4 items (19 B, 22 B, 1 B, 1 B)
    offset => ["A"], // 1 item (1 B)
], // 2 items
       preg_replace_callback_array => [
    flags => ["PREG_OFFSET_CAPTURE", "PREG_UNMATCHED_AS_NULL"], // 2 items (19 B, 22 B)
], // 1 item
       preg_replace_callback => [
    flags => ["PREG_OFFSET_CAPTURE", "PREG_UNMATCHED_AS_NULL"], // 2 items (19 B, 22 B)
], // 1 item
       preg_replace => [
    replacement => ["1", "1"], // 2 items (1 B, 1 B)
], // 1 item
       preg_split => [
    flags => [
        "PREG_SPLIT_NO_EMPTY", // 19 B
        "PREG_SPLIT_DELIM_CAPTURE", // 24 B
        "PREG_SPLIT_OFFSET_CAPTURE", // 25 B
        "0", // 1 B
        "1", // 1 B
        "PREG_SPLIT_NO_EMPTY", // 19 B
        "PREG_SPLIT_DELIM_CAPTURE", // 24 B
        "PREG_SPLIT_OFFSET_CAPTURE", // 25 B
        "0", // 1 B
        "1", // 1 B
    ], // 10 items
], // 1 item
       crypt => [
    string => ["CRYPT_BLOWFISH"], // 1 item (14 B)
], // 1 item
       fprintf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       get_html_translation_table => [
    table => ["HTML_ENTITIES", "HTML_SPECIALCHARS"], // 2 items (13 B, 17 B)
    flags => [
        "ENT_COMPAT", // 10 B
        "ENT_QUOTES", // 10 B
        "ENT_NOQUOTES", // 12 B
        "ENT_HTML401", // 11 B
        "ENT_XML1", // 8 B
        "ENT_XHTML", // 9 B
        "ENT_HTML5", // 9 B
    ], // 7 items
], // 2 items
       html_entity_decode => [
    flags => [
        "ENT_COMPAT", // 10 B
        "ENT_QUOTES", // 10 B
        "ENT_NOQUOTES", // 12 B
        "ENT_HTML401", // 11 B
        "ENT_XML1", // 8 B
        "ENT_XHTML", // 9 B
        "ENT_HTML5", // 9 B
    ], // 7 items
], // 1 item
       htmlentities => [
    flags => [
        "ENT_COMPAT", // 10 B
        "ENT_QUOTES", // 10 B
        "ENT_NOQUOTES", // 12 B
        "ENT_IGNORE", // 10 B
        "ENT_SUBSTITUTE", // 14 B
        "ENT_DISALLOWED", // 14 B
        "ENT_HTML401", // 11 B
        "ENT_XML1", // 8 B
        "ENT_XHTML", // 9 B
        "ENT_HTML5", // 9 B
    ], // 10 items
], // 1 item
       htmlspecialchars_decode => [
    flags => [
        "ENT_COMPAT", // 10 B
        "ENT_QUOTES", // 10 B
        "ENT_NOQUOTES", // 12 B
        "ENT_HTML401", // 11 B
        "ENT_XML1", // 8 B
        "ENT_XHTML", // 9 B
        "ENT_HTML5", // 9 B
    ], // 7 items
], // 1 item
       htmlspecialchars => [
    flags => [
        "ENT_COMPAT", // 10 B
        "ENT_QUOTES", // 10 B
        "ENT_NOQUOTES", // 12 B
        "ENT_IGNORE", // 10 B
        "ENT_SUBSTITUTE", // 14 B
        "ENT_DISALLOWED", // 14 B
        "ENT_HTML401", // 11 B
        "ENT_XML1", // 8 B
        "ENT_XHTML", // 9 B
        "ENT_HTML5", // 9 B
    ], // 10 items
], // 1 item
       metaphone => [
    max_phonemes => ["0"], // 1 item (1 B)
], // 1 item
       nl_langinfo => [
    item => [
        "AM_STR", // 6 B
        "PM_STR", // 6 B
        "D_T_FMT", // 7 B
        "D_FMT", // 5 B
        "T_FMT", // 5 B
        "T_FMT_AMPM", // 10 B
        "ERA", // 3 B
        "ERA_YEAR", // 8 B
        "ERA_D_T_FMT", // 11 B
        "ERA_D_FMT", // 9 B
        "ERA_T_FMT", // 9 B
        "INT_CURR_SYMBOL", // 15 B
        "CURRENCY_SYMBOL", // 15 B
        "CRNCYSTR", // 8 B
        "CURRENCY_SYMBOL", // 15 B
        "MON_DECIMAL_POINT", // 17 B
        "MON_THOUSANDS_SEP", // 17 B
        "MON_GROUPING", // 12 B
        "POSITIVE_SIGN", // 13 B
        "NEGATIVE_SIGN", // 13 B
        "INT_FRAC_DIGITS", // 15 B
        "FRAC_DIGITS", // 11 B
        "P_CS_PRECEDES", // 13 B
        "CURRENCY_SYMBOL", // 15 B
        "P_SEP_BY_SPACE", // 14 B
        "CURRENCY_SYMBOL", // 15 B
        "N_CS_PRECEDES", // 13 B
        "CURRENCY_SYMBOL", // 15 B
        "N_SEP_BY_SPACE", // 14 B
        "CURRENCY_SYMBOL", // 15 B
        "P_SIGN_POSN", // 11 B
        "CURRENCY_SYMBOL", // 15 B
        "CURRENCY_SYMBOL", // 15 B
        "CURRENCY_SYMBOL", // 15 B
        "CURRENCY_SYMBOL", // 15 B
        "CURRENCY_SYMBOL", // 15 B
        "N_SIGN_POSN", // 11 B
        "DECIMAL_POINT", // 13 B
        "RADIXCHAR", // 9 B
        "DECIMAL_POINT", // 13 B
        "THOUSANDS_SEP", // 13 B
        "THOUSEP", // 7 B
        "THOUSANDS_SEP", // 13 B
        "GROUPING", // 8 B
        "YESEXPR", // 7 B
        "NOEXPR", // 6 B
        "YESSTR", // 6 B
        "NOSTR", // 5 B
        "CODESET", // 7 B
    ], // 49 items
], // 1 item
       number_format => [
    decimals => ["0"], // 1 item (1 B)
], // 1 item
       printf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       setlocale => [
    category => [
        "LC_ALL", // 6 B
        "LC_COLLATE", // 10 B
        "LC_CTYPE", // 8 B
        "LC_MONETARY", // 11 B
        "LC_NUMERIC", // 10 B
        "LC_TIME", // 7 B
        "LC_MESSAGES", // 11 B
    ], // 7 items
], // 1 item
       similar_text => [
    percent => ["100"], // 1 item (3 B)
], // 1 item
       sprintf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       sscanf => [
    format => ["F", "G", "D"], // 3 items (1 B, 1 B, 1 B, callable)
], // 1 item
       str_pad => [
    pad_type => [
        "STR_PAD_RIGHT", // 13 B
        "STR_PAD_LEFT", // 12 B
        "STR_PAD_BOTH", // 12 B
        "STR_PAD_RIGHT", // 13 B
    ], // 4 items
], // 1 item
       strcspn => [
    offset => ["0", "2"], // 2 items (1 B, 1 B)
], // 1 item
       strspn => [
    offset => ["0", "2"], // 2 items (1 B, 1 B)
], // 1 item
       strtr => [
    replace_pairs => ["E_WARNING"], // 1 item (9 B)
], // 1 item
       substr => [
    offset => ["0", "2"], // 2 items (1 B, 1 B)
    length => ["0"], // 1 item (1 B)
], // 2 items
       vfprintf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       vprintf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       vsprintf => [
    format => [
        "PHP_INT_MAX", // 11 B
        "0", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "E", // 1 B
        "F", // 1 B
        "H", // 1 B
        "E", // 1 B
        "F", // 1 B
        "X", // 1 B
        "X", // 1 B
        "E", // 1 B
        "F", // 1 B
        "G", // 1 B
        "H", // 1 B
    ], // 20 items
], // 1 item
       array_change_key_case => [
           case => ["CASE_UPPER", "CASE_LOWER"], // 2 items (10 B, 10 B)
       ], // 1 item
       array_filter => [
    mode => ["ARRAY_FILTER_USE_KEY", "ARRAY_FILTER_USE_BOTH", "0"], // 3 items (20 B, 21 B, 1 B)
], // 1 item
       array_multisort => [
    array1_sort_order => ["SORT_ASC", "SORT_DESC", "SORT_ASC"], // 3 items (8 B, 9 B, 8 B)
    array1_sort_flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
        "SORT_REGULAR", // 12 B
    ], // 9 items
], // 2 items
       array_unique => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
    ], // 4 items
], // 1 item
       arsort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       asort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       count => [
    mode => ["COUNT_RECURSIVE", "E_WARNING"], // 2 items (15 B, 9 B)
], // 1 item
       extract => [
    array => ["EXTR_PREFIX_ALL", "EXTR_PREFIX_INVALID"], // 2 items (15 B, 19 B)
    flags => [
        "EXTR_OVERWRITE", // 14 B
        "EXTR_SKIP", // 9 B
        "EXTR_PREFIX_SAME", // 16 B
        "EXTR_PREFIX_ALL", // 15 B
        "EXTR_PREFIX_INVALID", // 19 B
        "EXTR_IF_EXISTS", // 14 B
        "EXTR_PREFIX_IF_EXISTS", // 21 B
        "EXTR_REFS", // 9 B
        "EXTR_OVERWRITE", // 14 B
    ], // 9 items
    prefix => [
        "EXTR_PREFIX_SAME", // 16 B
        "EXTR_PREFIX_ALL", // 15 B
        "EXTR_PREFIX_INVALID", // 19 B
        "EXTR_PREFIX_IF_EXISTS", // 21 B
    ], // 4 items
], // 3 items
       krsort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       ksort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       rsort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       sort => [
    flags => [
        "SORT_REGULAR", // 12 B
        "SORT_NUMERIC", // 12 B
        "SORT_STRING", // 11 B
        "SORT_LOCALE_STRING", // 18 B
        "SORT_NATURAL", // 12 B
        "SORT_FLAG_CASE", // 14 B
        "SORT_STRING", // 11 B
        "SORT_NATURAL", // 12 B
    ], // 8 items
], // 1 item
       get_class => [
    object => ["E_WARNING"], // 1 item (9 B)
], // 1 item
       filter_has_var => [
    input_type => [
        "INPUT_GET", // 9 B
        "INPUT_POST", // 10 B
        "INPUT_COOKIE", // 12 B
        "INPUT_SERVER", // 12 B
        "INPUT_ENV", // 9 B
    ], // 5 items
], // 1 item
       filter_input_array => [
    type => [
        "INPUT_GET", // 9 B
        "INPUT_POST", // 10 B
        "INPUT_COOKIE", // 12 B
        "INPUT_SERVER", // 12 B
        "INPUT_ENV", // 9 B
    ], // 5 items
], // 1 item
       filter_input => [
    type => [
        "INPUT_GET", // 9 B
        "INPUT_POST", // 10 B
        "INPUT_COOKIE", // 12 B
        "INPUT_SERVER", // 12 B
        "INPUT_ENV", // 9 B
    ], // 5 items
    filter => ["FILTER_DEFAULT", "FILTER_UNSAFE_RAW"], // 2 items (14 B, 17 B)
], // 2 items
       filter_var => [
    filter => [
        "FILTER_DEFAULT", // 14 B
        "FILTER_UNSAFE_RAW", // 17 B
        "FILTER_DEFAULT", // 14 B
        "FILTER_UNSAFE_RAW", // 17 B
    ], // 4 items
], // 1 item
       floatval => [
    value => ["E_NOTICE"], // 1 item (8 B)
], // 1 item
       variant_cast => [
    type => ["VT_XXX"], // 1 item (6 B)
], // 1 item
       variant_cmp => [
    flags => [
        "NORM_IGNORECASE", // 15 B
        "NORM_IGNORENONSPACE", // 19 B
        "NORM_IGNORESYMBOLS", // 18 B
        "NORM_IGNOREWIDTH", // 16 B
        "NORM_IGNOREKANATYPE", // 19 B
        "NORM_IGNOREKASHIDA", // 18 B
    ], // 6 items
], // 1 item
       win32_create_service => [
    details => [
        "WIN32_SERVICE_WIN32_OWN_PROCESS", // 31 B
        "WIN32_SERVICE_AUTO_START", // 24 B
        "WIN32_SERVER_ERROR_IGNORE", // 25 B
        "WIN32_SERVICE_AUTO_START", // 24 B
        "WIN32_SC_ACTION_NONE", // 20 B
        "WIN32_SC_ACTION_NONE", // 20 B
        "WIN32_SC_ACTION_NONE", // 20 B
        "WIN32_SC_ACTION_REBOOT", // 22 B
        "WIN32_SC_ACTION_RUN_COMMAND", // 27 B
        "86400", // 5 B
    ], // 10 items
    svc_type => ["WIN32_SERVICE_WIN32_OWN_PROCESS"], // 1 item (31 B)
    start_type => ["WIN32_SERVICE_AUTO_START"], // 1 item (24 B)
    error_control => ["WIN32_SERVER_ERROR_IGNORE"], // 1 item (25 B)
    delayed_start => ["WIN32_SERVICE_AUTO_START"], // 1 item (24 B)
    recovery_action_1 => ["WIN32_SC_ACTION_NONE"], // 1 item (20 B)
    recovery_action_2 => ["WIN32_SC_ACTION_NONE"], // 1 item (20 B)
    recovery_action_3 => ["WIN32_SC_ACTION_NONE"], // 1 item (20 B)
    recovery_reset_period => ["86400"], // 1 item (5 B)
    recovery_reboot_msg => ["WIN32_SC_ACTION_REBOOT"], // 1 item (22 B)
    recovery_command => ["WIN32_SC_ACTION_RUN_COMMAND"], // 1 item (27 B)
], // 11 items
       win32_query_service_status => [
    Win32ExitCode => ["WIN32_ERROR_SERVICE_SPECIFIC_ERROR"], // 1 item (34 B)
], // 1 item
       win32_set_service_status => [
    status => [
        "WIN32_SERVICE_RUNNING", // 21 B
        "WIN32_SERVICE_STOPPED", // 21 B
        "WIN32_SERVICE_STOP_PENDING", // 26 B
        "WIN32_SERVICE_START_PENDING", // 27 B
        "WIN32_SERVICE_CONTINUE_PENDING", // 30 B
        "WIN32_SERVICE_PAUSE_PENDING", // 27 B
        "WIN32_SERVICE_PAUSED", // 20 B
    ], // 7 items
    checkpoint => [
        "WIN32_SERVICE_STOP_PENDING", // 26 B
        "WIN32_SERVICE_START_PENDING", // 27 B
        "WIN32_SERVICE_CONTINUE_PENDING", // 30 B
        "WIN32_SERVICE_PAUSE_PENDING", // 27 B
    ], // 4 items
], // 2 items
       xml_parser_get_option => [
    option => [
        "XML_OPTION_CASE_FOLDING", // 23 B
        "XML_OPTION_SKIP_TAGSTART", // 24 B
        "XML_OPTION_SKIP_WHITE", // 21 B
        "XML_OPTION_TARGET_ENCODING", // 26 B
    ], // 4 items
], // 1 item
       xml_parser_set_option => [
    option => [
        "XML_OPTION_CASE_FOLDING", // 23 B
        "XML_OPTION_SKIP_TAGSTART", // 24 B
        "XML_OPTION_SKIP_WHITE", // 21 B
        "XML_OPTION_TARGET_ENCODING", // 26 B
    ], // 4 items
], // 1 item
       xml_set_end_namespace_decl_handler => [
    handler => ["XML_ERROR_EXTERNAL_ENTITY_HANDLING"], // 1 item (34 B)
], // 1 item
       xml_set_external_entity_ref_handler => [
    handler => ["XML_ERROR_EXTERNAL_ENTITY_HANDLING"], // 1 item (34 B)
], // 1 item
       xml_set_start_namespace_decl_handler => [
    handler => ["XML_ERROR_EXTERNAL_ENTITY_HANDLING"], // 1 item (34 B)
], // 1 item
       dba_open => [
    args => ["0644"], // 1 item (4 B)
], // 1 item
       dba_popen => [
    args => ["0644"], // 1 item (4 B)
], // 1 item
       odbc_binmode => [
    statement => ["0"], // 1 item (1 B)
    mode => ["ODBC_BINMODE_PASSTHRU", "ODBC_BINMODE_RETURN", "ODBC_BINMODE_CONVERT"], // 3 items (21 B, 19 B, 20 B)
], // 2 items
       odbc_columnprivileges => [
    schema => ["_"], // 1 item (1 B, callable)
    table => ["_"], // 1 item (1 B, callable)
    column => ["_"], // 1 item (1 B, callable)
], // 3 items
       odbc_columns => [
    schema => ["_"], // 1 item (1 B, callable)
    table => ["_"], // 1 item (1 B, callable)
    column => ["_"], // 1 item (1 B, callable)
], // 3 items
       odbc_data_source => [
    fetch_type => [
        "SQL_FETCH_FIRST", // 15 B
        "SQL_FETCH_NEXT", // 14 B
        "SQL_FETCH_FIRST", // 15 B
        "SQL_FETCH_NEXT", // 14 B
    ], // 4 items
], // 1 item
       odbc_longreadlen => [
    length => ["0"], // 1 item (1 B)
], // 1 item
       odbc_procedurecolumns => [
    schema => ["_"], // 1 item (1 B, callable)
    procedure => ["_"], // 1 item (1 B, callable)
    column => ["_"], // 1 item (1 B, callable)
], // 3 items
       odbc_procedures => [
    schema => ["_"], // 1 item (1 B, callable)
    procedure => ["_"], // 1 item (1 B, callable)
], // 2 items
       odbc_specialcolumns => [
    type => ["SQL_BEST_ROWID", "SQL_ROWVER"], // 2 items (14 B, 10 B)
    scope => ["SQL_SCOPE_CURROW", "SQL_SCOPE_TRANSACTION", "SQL_SCOPE_SESSION"], // 3 items (16 B, 21 B, 17 B)
    nullable => ["SQL_NO_NULLS"], // 1 item (12 B)
], // 3 items
       odbc_statistics => [
    unique => ["SQL_INDEX_UNIQUE", "SQL_INDEX_ALL"], // 2 items (16 B, 13 B)
    accuracy => ["SQL_ENSURE", "SQL_QUICK", "CARDINALITY", "PAGES"], // 4 items (10 B, 9 B, 11 B, 5 B)
], // 2 items
       odbc_tableprivileges => [
    schema => ["_"], // 1 item (1 B, callable)
    table => ["_"], // 1 item (1 B, callable)
], // 2 items
       odbc_tables => [
    schema => ["_"], // 1 item (1 B, callable)
    table => ["_"], // 1 item (1 B, callable)
], // 2 items
       cubrid_execute => [
    option => ["CUBRID_INCLUDE_OID", "CUBRID_ASYNC", "CUBRID_EXEC_QUERY_ALL"], // 3 items (18 B, 12 B, 21 B)
], // 1 item
       cubrid_move_cursor => [
    origin => ["CUBRID_CURSOR_FIRST", "CUBRID_CURSOR_CURRENT", "CUBRID_CURSOR_LAST"], // 3 items (19 B, 21 B, 18 B)
], // 1 item
       cubrid_prepare => [
    option => ["CUBRID_INCLUDE_OID"], // 1 item (18 B)
], // 1 item
       cubrid_set_autocommit => [
    mode => ["CUBRID_AUTOCOMMIT_FALSE", "CUBRID_AUTOCOMMIT_TRUE"], // 2 items (23 B, 22 B)
], // 1 item
       dbase_create => [
    type => [
        "DBASE_TYPE_DBASE", // 16 B
        "DBASE_TYPE_FOXPRO", // 17 B
        "DBASE_TYPE_DBASE", // 16 B
        "DBASE_TYPE_FOXPRO", // 17 B
    ], // 4 items
], // 1 item
       dbase_get_record_with_names => [
    _number => ["1"], // 1 item (1 B)
], // 1 item
       dbase_get_record => [
    number => ["1"], // 1 item (1 B)
], // 1 item
       dbase_open => [
    mode => ["DBASE_RDONLY", "DBASE_RDWR"], // 2 items (12 B, 10 B)
], // 1 item
       ibase_backup => [
    options => [
        "IBASE_BKP_IGNORE_CHECKSUMS", // 26 B
        "IBASE_BKP_IGNORE_LIMBO", // 22 B
        "IBASE_BKP_METADATA_ONLY", // 23 B
        "IBASE_BKP_NO_GARBAGE_COLLECT", // 28 B
        "IBASE_BKP_OLD_DESCRIPTIONS", // 26 B
        "IBASE_BKP_NON_TRANSPORTABLE", // 27 B
        "IBASE_BKP_CONVERT", // 17 B
    ], // 7 items
], // 1 item
       ibase_fetch_assoc => [
    fetch_flag => ["IBASE_TEXT", "IBASE_UNIXTIME", "IBASE_TEXT", "IBASE_UNIXTIME"], // 4 items (10 B, 14 B, 10 B, 14 B)
], // 1 item
       ibase_fetch_object => [
    fetch_flag => ["IBASE_TEXT", "IBASE_UNIXTIME", "IBASE_TEXT", "IBASE_UNIXTIME"], // 4 items (10 B, 14 B, 10 B, 14 B)
], // 1 item
       ibase_fetch_row => [
    fetch_flag => ["IBASE_TEXT", "IBASE_UNIXTIME", "IBASE_TEXT", "IBASE_UNIXTIME"], // 4 items (10 B, 14 B, 10 B, 14 B)
], // 1 item
       ibase_restore => [
    options => [
        "IBASE_RES_DEACTIVATE_IDX", // 24 B
        "IBASE_RES_NO_SHADOW", // 19 B
        "IBASE_RES_NO_VALIDITY", // 21 B
        "IBASE_RES_ONE_AT_A_TIME", // 23 B
        "IBASE_RES_REPLACE", // 17 B
        "IBASE_RES_CREATE", // 16 B
        "IBASE_RES_USE_ALL_SPACE", // 23 B
        "IBASE_PRP_PAGE_BUFFERS", // 22 B
        "IBASE_PRP_SWEEP_INTERVAL", // 24 B
        "IBASE_RES_CREATE", // 16 B
    ], // 10 items
], // 1 item
       ibase_trans => [
    trans_args => [
        "IBASE_READ", // 10 B
        "IBASE_WRITE", // 11 B
        "IBASE_COMMITTED", // 15 B
        "IBASE_CONSISTENCY", // 17 B
        "IBASE_CONCURRENCY", // 17 B
        "IBASE_REC_VERSION", // 17 B
        "IBASE_REC_NO_VERSION", // 20 B
        "IBASE_WAIT", // 10 B
        "IBASE_NOWAIT", // 12 B
    ], // 9 items
], // 1 item
       db2_autocommit => [
    value => [
        "DB2_AUTOCOMMIT_OFF", // 18 B
        "DB2_AUTOCOMMIT_ON", // 17 B
        "DB2_AUTOCOMMIT_OFF", // 18 B
        "DB2_AUTOCOMMIT_ON", // 17 B
    ], // 4 items
], // 1 item
       db2_bind_param => [
    parameter_type => [
        "DB2_PARAM_IN", // 12 B
        "DB2_PARAM_OUT", // 13 B
        "DB2_PARAM_INOUT", // 15 B
        "DB2_PARAM_FILE", // 14 B
    ], // 4 items
    data_type => ["DB2_BINARY", "DB2_CHAR", "DB2_DOUBLE", "DB2_LONG"], // 4 items (10 B, 8 B, 10 B, 8 B)
], // 2 items
       db2_connect => [
    options => [
        "DB2_AUTOCOMMIT_ON", // 17 B
        "DB2_AUTOCOMMIT_OFF", // 18 B
        "DB2_CASE_NATURAL", // 16 B
        "DB2_CASE_LOWER", // 14 B
        "DB2_CASE_UPPER", // 14 B
        "DB2_FORWARD_ONLY", // 16 B
        "DB2_SCROLLABLE", // 14 B
        "DB2_I5_NAMING_ON", // 16 B
        "DB2_I5_NAMING_OFF", // 17 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_READ_UNCOMMITTED", // 27 B
        "DB2_I5_TXN_READ_COMMITTED", // 25 B
        "DB2_I5_TXN_REPEATABLE_READ", // 26 B
        "DB2_I5_TXN_SERIALIZABLE", // 23 B
        "DB2_FIRST_IO", // 12 B
        "DB2_ALL_IO", // 10 B
        "DB2_I5_DBCS_ALLOC_ON", // 20 B
        "DB2_I5_DBCS_ALLOC_OFF", // 21 B
        "DB2_I5_DBCS_ALLOC_OFF", // 21 B
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_MDY", // 14 B
        "DB2_I5_FMT_DMY", // 14 B
        "DB2_I5_FMT_YMD", // 14 B
        "DB2_I5_FMT_JUL", // 14 B
        "DB2_I5_FMT_JOB", // 14 B
        "DB2_I5_SEP_SLASH", // 16 B
        "DB2_I5_SEP_DASH", // 15 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_HMS", // 14 B
        "DB2_I5_SEP_COLON", // 16 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 48 items
    autocommit => ["DB2_AUTOCOMMIT_ON", "DB2_AUTOCOMMIT_OFF"], // 2 items (17 B, 18 B)
    DB2_ATTR_CASE => ["DB2_CASE_NATURAL", "DB2_CASE_LOWER", "DB2_CASE_UPPER"], // 3 items (16 B, 14 B, 14 B)
    CURSOR => ["DB2_FORWARD_ONLY", "DB2_SCROLLABLE"], // 2 items (16 B, 14 B)
    i5_naming => ["DB2_I5_NAMING_ON", "DB2_I5_NAMING_OFF"], // 2 items (16 B, 17 B)
    i5_commit => [
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_READ_UNCOMMITTED", // 27 B
        "DB2_I5_TXN_READ_COMMITTED", // 25 B
        "DB2_I5_TXN_REPEATABLE_READ", // 26 B
        "DB2_I5_TXN_SERIALIZABLE", // 23 B
    ], // 6 items
    i5_query_optimize => ["DB2_FIRST_IO", "DB2_ALL_IO"], // 2 items (12 B, 10 B)
    i5_dbcs_alloc => ["DB2_I5_DBCS_ALLOC_ON", "DB2_I5_DBCS_ALLOC_OFF", "DB2_I5_DBCS_ALLOC_OFF"], // 3 items (20 B, 21 B, 21 B)
    i5_date_fmt => [
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_MDY", // 14 B
        "DB2_I5_FMT_DMY", // 14 B
        "DB2_I5_FMT_YMD", // 14 B
        "DB2_I5_FMT_JUL", // 14 B
        "DB2_I5_FMT_JOB", // 14 B
    ], // 9 items
    i5_date_sep => [
        "DB2_I5_SEP_SLASH", // 16 B
        "DB2_I5_SEP_DASH", // 15 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 6 items
    i5_time_fmt => [
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_HMS", // 14 B
    ], // 5 items
    i5_time_sep => [
        "DB2_I5_SEP_COLON", // 16 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 5 items
    i5_decimal_sep => ["DB2_I5_SEP_PERIOD", "DB2_I5_SEP_COMMA", "DB2_I5_SEP_JOB"], // 3 items (17 B, 16 B, 14 B)
], // 13 items
       db2_get_option => [
    option => [
        "SQL_ATTR_INFO_USERID", // 20 B
        "SQL_ATTR_INFO_ACCTSTR", // 21 B
        "SQL_ATTR_INFO_APPLNAME", // 22 B
        "SQL_ATTR_INFO_WRKSTNNAME", // 24 B
    ], // 4 items
    userid => ["SQL_ATTR_INFO_USERID"], // 1 item (20 B)
    acctstr => ["SQL_ATTR_INFO_ACCTSTR"], // 1 item (21 B)
    applname => ["SQL_ATTR_INFO_APPLNAME"], // 1 item (22 B)
    wrkstnname => ["SQL_ATTR_INFO_WRKSTNNAME"], // 1 item (24 B)
], // 5 items
       db2_pconnect => [
    options => [
        "DB2_AUTOCOMMIT_ON", // 17 B
        "DB2_AUTOCOMMIT_OFF", // 18 B
        "DB2_CASE_NATURAL", // 16 B
        "DB2_CASE_LOWER", // 14 B
        "DB2_CASE_UPPER", // 14 B
        "DB2_FORWARD_ONLY", // 16 B
        "DB2_SCROLLABLE", // 14 B
        "DB2_I5_NAMING_ON", // 16 B
        "DB2_I5_NAMING_OFF", // 17 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_READ_UNCOMMITTED", // 27 B
        "DB2_I5_TXN_READ_COMMITTED", // 25 B
        "DB2_I5_TXN_REPEATABLE_READ", // 26 B
        "DB2_I5_TXN_SERIALIZABLE", // 23 B
        "DB2_FIRST_IO", // 12 B
        "DB2_ALL_IO", // 10 B
        "DB2_I5_DBCS_ALLOC_ON", // 20 B
        "DB2_I5_DBCS_ALLOC_OFF", // 21 B
        "DB2_I5_DBCS_ALLOC_OFF", // 21 B
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_MDY", // 14 B
        "DB2_I5_FMT_DMY", // 14 B
        "DB2_I5_FMT_YMD", // 14 B
        "DB2_I5_FMT_JUL", // 14 B
        "DB2_I5_FMT_JOB", // 14 B
        "DB2_I5_SEP_SLASH", // 16 B
        "DB2_I5_SEP_DASH", // 15 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_HMS", // 14 B
        "DB2_I5_SEP_COLON", // 16 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 48 items
    autocommit => ["DB2_AUTOCOMMIT_ON", "DB2_AUTOCOMMIT_OFF"], // 2 items (17 B, 18 B)
    DB2_ATTR_CASE => ["DB2_CASE_NATURAL", "DB2_CASE_LOWER", "DB2_CASE_UPPER"], // 3 items (16 B, 14 B, 14 B)
    CURSOR => ["DB2_FORWARD_ONLY", "DB2_SCROLLABLE"], // 2 items (16 B, 14 B)
    i5_naming => ["DB2_I5_NAMING_ON", "DB2_I5_NAMING_OFF"], // 2 items (16 B, 17 B)
    i5_commit => [
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_NO_COMMIT", // 20 B
        "DB2_I5_TXN_READ_UNCOMMITTED", // 27 B
        "DB2_I5_TXN_READ_COMMITTED", // 25 B
        "DB2_I5_TXN_REPEATABLE_READ", // 26 B
        "DB2_I5_TXN_SERIALIZABLE", // 23 B
    ], // 6 items
    i5_query_optimize => ["DB2_FIRST_IO", "DB2_ALL_IO"], // 2 items (12 B, 10 B)
    i5_dbcs_alloc => ["DB2_I5_DBCS_ALLOC_ON", "DB2_I5_DBCS_ALLOC_OFF", "DB2_I5_DBCS_ALLOC_OFF"], // 3 items (20 B, 21 B, 21 B)
    i5_date_fmt => [
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_MDY", // 14 B
        "DB2_I5_FMT_DMY", // 14 B
        "DB2_I5_FMT_YMD", // 14 B
        "DB2_I5_FMT_JUL", // 14 B
        "DB2_I5_FMT_JOB", // 14 B
    ], // 9 items
    i5_date_sep => [
        "DB2_I5_SEP_SLASH", // 16 B
        "DB2_I5_SEP_DASH", // 15 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 6 items
    i5_time_fmt => [
        "DB2_I5_FMT_ISO", // 14 B
        "DB2_I5_FMT_USA", // 14 B
        "DB2_I5_FMT_EUR", // 14 B
        "DB2_I5_FMT_JIS", // 14 B
        "DB2_I5_FMT_HMS", // 14 B
    ], // 5 items
    i5_time_sep => [
        "DB2_I5_SEP_COLON", // 16 B
        "DB2_I5_SEP_PERIOD", // 17 B
        "DB2_I5_SEP_COMMA", // 16 B
        "DB2_I5_SEP_BLANK", // 16 B
        "DB2_I5_SEP_JOB", // 14 B
    ], // 5 items
    i5_decimal_sep => ["DB2_I5_SEP_PERIOD", "DB2_I5_SEP_COMMA", "DB2_I5_SEP_JOB"], // 3 items (17 B, 16 B, 14 B)
], // 13 items
       db2_procedure_columns => [
    schema => ["_"], // 1 item (1 B, callable)
    procedure => ["_"], // 1 item (1 B, callable)
    parameter => ["_"], // 1 item (1 B, callable)
], // 3 items
       db2_procedures => [
    schema => ["_"], // 1 item (1 B, callable)
    procedure => ["_"], // 1 item (1 B, callable)
], // 2 items
       db2_set_option => [
    options => [
        "DB2_AUTOCOMMIT_ON", // 17 B
        "DB2_AUTOCOMMIT_OFF", // 18 B
        "DB2_FORWARD_ONLY", // 16 B
        "DB2_SCROLLABLE", // 14 B
        "DB2_BINARY", // 10 B
        "DB2_CONVERT", // 11 B
        "DB2_PASSTHRU", // 12 B
        "DB2_CASE_LOWER", // 14 B
        "DB2_CASE_UPPER", // 14 B
        "DB2_CASE_NATURAL", // 16 B
        "DB2_DEFERRED_PREPARE_ON", // 23 B
        "DB2_DEFERRED_PREPARE_OFF", // 24 B
        "DB2_I5_FETCH_ON", // 15 B
        "SQL_ATTR_FOR_FETCH_ONLY", // 23 B
        "SQL_FALSE", // 9 B
        "DB2_I5_FETCH_OFF", // 16 B
        "DB2_ROWCOUNT_PREFETCH_ON", // 24 B
        "ROLLFORWARD_ONLY", // 16 B
        "DB2_ROWCOUNT_PREFETCH_OFF", // 25 B
        "SQL_ATTR_INFO_USERID", // 20 B
        "SQL_ATTR_INFO_ACCTSTR", // 21 B
        "SQL_ATTR_INFO_APPLNAME", // 22 B
        "SQL_ATTR_INFO_WRKSTNNAME", // 24 B
    ], // 23 items
    autocommit => ["DB2_AUTOCOMMIT_ON", "DB2_AUTOCOMMIT_OFF"], // 2 items (17 B, 18 B)
    cursor => ["DB2_FORWARD_ONLY", "DB2_SCROLLABLE"], // 2 items (16 B, 14 B)
    binmode => ["DB2_BINARY", "DB2_CONVERT", "DB2_PASSTHRU"], // 3 items (10 B, 11 B, 12 B)
    db2_attr_case => ["DB2_CASE_LOWER", "DB2_CASE_UPPER", "DB2_CASE_NATURAL"], // 3 items (14 B, 14 B, 16 B)
    deferred_prepare => ["DB2_DEFERRED_PREPARE_ON", "DB2_DEFERRED_PREPARE_OFF"], // 2 items (23 B, 24 B)
    i5_fetch_only => [
        "DB2_I5_FETCH_ON", // 15 B
        "SQL_ATTR_FOR_FETCH_ONLY", // 23 B
        "SQL_FALSE", // 9 B
        "DB2_I5_FETCH_OFF", // 16 B
    ], // 4 items
    rowcount => [
        "DB2_ROWCOUNT_PREFETCH_ON", // 24 B
        "ROLLFORWARD_ONLY", // 16 B
        "DB2_ROWCOUNT_PREFETCH_OFF", // 25 B
    ], // 3 items
    userid => ["SQL_ATTR_INFO_USERID"], // 1 item (20 B)
    acctstr => ["SQL_ATTR_INFO_ACCTSTR"], // 1 item (21 B)
    applname => ["SQL_ATTR_INFO_APPLNAME"], // 1 item (22 B)
    wrkstnname => ["SQL_ATTR_INFO_WRKSTNNAME"], // 1 item (24 B)
    type => ["1", "1"], // 2 items (1 B, 1 B)
], // 13 items
       db2_table_privileges => [
    schema => ["_"], // 1 item (1 B, callable)
    table_name => ["_"], // 1 item (1 B, callable)
], // 2 items
       db2_tables => [
    schema => ["_"], // 1 item (1 B, callable)
    table-name => ["_"], // 1 item (1 B, callable)
], // 2 items
       oci_bind_array_by_name => [
    type => [
        "SQLT_NUM", // 8 B
        "SQLT_INT", // 8 B
        "SQLT_NUM", // 8 B
        "SQLT_FLT", // 8 B
        "SQLT_AFC", // 8 B
        "SQLT_CHR", // 8 B
        "SQLT_VCS", // 8 B
        "SQLT_AVC", // 8 B
        "SQLT_STR", // 8 B
        "SQLT_LVC", // 8 B
        "SQLT_ODT", // 8 B
        "SQLT_NUM", // 8 B
        "SQLT_INT", // 8 B
        "SQLT_NUM", // 8 B
        "SQLT_FLT", // 8 B
        "SQLT_AFC", // 8 B
        "SQLT_CHR", // 8 B
        "SQLT_VCS", // 8 B
        "SQLT_AVC", // 8 B
        "SQLT_STR", // 8 B
        "SQLT_LVC", // 8 B
        "SQLT_ODT", // 8 B
    ], // 22 items
], // 1 item
       oci_bind_by_name => [
    type => [
        "SQLT_CHR", // 8 B
        "SQLT_BFILEE", // 11 B
        "OCI_B_BFILE", // 11 B
        "SQLT_CFILEE", // 11 B
        "OCI_B_CFILEE", // 12 B
        "SQLT_CLOB", // 9 B
        "OCI_B_CLOB", // 10 B
        "SQLT_BLOB", // 9 B
        "OCI_B_BLOB", // 10 B
        "SQLT_RDD", // 8 B
        "OCI_B_ROWID", // 11 B
        "SQLT_NTY", // 8 B
        "OCI_B_NTY", // 9 B
        "SQLT_INT", // 8 B
        "OCI_B_INT", // 9 B
        "SQLT_CHR", // 8 B
        "SQLT_BIN", // 8 B
        "OCI_B_BIN", // 9 B
        "SQLT_LNG", // 8 B
        "SQLT_LBI", // 8 B
        "SQLT_RSET", // 9 B
        "SQLT_BOL", // 8 B
        "OCI_B_BOL", // 9 B
    ], // 23 items
], // 1 item
       oci_connect => [
    connection_string => ["TWO_TASK", "LOCAL", "ORACLE_SID", "TNS_ADMIN"], // 4 items (8 B, 5 B, 10 B, 9 B)
    character_set => ["NLS_LANG"], // 1 item (8 B)
    session_mode => [
        "OCI_DEFAULT", // 11 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
    ], // 11 items
], // 3 items
       oci_define_by_name => [
    type => ["SQLT_INT", "SQLT_CHR"], // 2 items (8 B, 8 B)
], // 1 item
       oci_execute => [
    mode => [
        "OCI_COMMIT_ON_SUCCESS", // 21 B
        "OCI_DESCRIBE_ONLY", // 17 B
        "OCI_NO_AUTO_COMMIT", // 18 B
        "OCI_DEFAULT", // 11 B
        "OCI_NO_AUTO_COMMIT", // 18 B
        "OCI_NO_AUTO_COMMIT", // 18 B
        "OCI_NO_AUTO_COMMIT", // 18 B
        "OCI_NO_AUTO_COMMIT", // 18 B
    ], // 8 items
], // 1 item
       oci_fetch_all => [
    flags => [
        "OCI_FETCHSTATEMENT_BY_ROW", // 25 B
        "OCI_FETCHSTATEMENT_BY_COLUMN", // 28 B
        "OCI_NUM", // 7 B
        "OCI_ASSOC", // 9 B
    ], // 4 items
], // 1 item
       oci_fetch_array => [
    mode => [
        "OCI_BOTH", // 8 B
        "OCI_ASSOC", // 9 B
        "OCI_NUM", // 7 B
        "OCI_ASSOC", // 9 B
        "OCI_NUM", // 7 B
        "OCI_RETURN_NULLS", // 16 B
        "OCI_RETURN_LOBS", // 15 B
        "OCI_BOTH", // 8 B
    ], // 8 items
], // 1 item
       oci_new_connect => [
    connection_string => ["TWO_TASK", "LOCAL", "ORACLE_SID", "TNS_ADMIN"], // 4 items (8 B, 5 B, 10 B, 9 B)
    character_set => ["NLS_LANG"], // 1 item (8 B)
    session_mode => [
        "OCI_DEFAULT", // 11 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
    ], // 11 items
], // 3 items
       oci_new_descriptor => [
    type => ["OCI_DTYPE_FILE", "OCI_DTYPE_LOB", "OCI_DTYPE_ROWID"], // 3 items (14 B, 13 B, 15 B)
], // 1 item
       oci_pconnect => [
    connection_string => ["TWO_TASK", "LOCAL", "ORACLE_SID", "TNS_ADMIN"], // 4 items (8 B, 5 B, 10 B, 9 B)
    character_set => ["NLS_LANG"], // 1 item (8 B)
    session_mode => [
        "OCI_DEFAULT", // 11 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_CRED_EXT", // 12 B
        "OCI_SYSOPER", // 11 B
        "OCI_SYSDBA", // 10 B
        "OCI_CRED_EXT", // 12 B
    ], // 11 items
], // 3 items
       pg_connect => [
    connect_type => ["PGSQL_CONNECT_FORCE_NEW", "PGSQL_CONNECT_ASYNC"], // 2 items (23 B, 19 B)
], // 1 item
       pg_convert => [
    options => [
        "PGSQL_CONV_IGNORE_DEFAULT", // 25 B
        "PGSQL_CONV_FORCE_NULL", // 21 B
        "PGSQL_CONV_IGNORE_NOT_NULL", // 26 B
    ], // 3 items
], // 1 item
       pg_copy_from => [
    delimiter => ["TAB"], // 1 item (3 B)
    null_as => ["NULL"], // 1 item (4 B)
], // 2 items
       pg_copy_to => [
    delimiter => ["TAB"], // 1 item (3 B)
    null_as => ["NULL"], // 1 item (4 B)
], // 2 items
       pg_delete => [
    options => [
        "PGSQL_CONV_FORCE_NULL", // 21 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
        "PGSQL_DML_EXEC", // 14 B
        "PGSQL_DML_ASYNC", // 15 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
    ], // 9 items
], // 1 item
       pg_escape_literal => [
    connection => ["E_WARNING"], // 1 item (9 B)
], // 1 item
       pg_execute => [
    stmtname => ["PREPARE"], // 1 item (7 B)
], // 1 item
       pg_fetch_array => [
    result_type => [
        "PGSQL_ASSOC", // 11 B
        "PGSQL_NUM", // 9 B
        "PGSQL_BOTH", // 10 B
        "PGSQL_NUM", // 9 B
        "PGSQL_ASSOC", // 11 B
        "PGSQL_BOTH", // 10 B
    ], // 6 items
], // 1 item
       pg_get_notify => [
    result_type => [
        "PGSQL_ASSOC", // 11 B
        "PGSQL_NUM", // 9 B
        "PGSQL_BOTH", // 10 B
        "PGSQL_NUM", // 9 B
        "PGSQL_ASSOC", // 11 B
        "PGSQL_BOTH", // 10 B
    ], // 6 items
], // 1 item
       pg_insert => [
    options => [
        "PGSQL_CONV_OPTS", // 15 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
        "PGSQL_DML_EXEC", // 14 B
        "PGSQL_DML_ASYNC", // 15 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
    ], // 9 items
], // 1 item
       pg_last_notice => [
    option => ["PGSQL_NOTICE_LAST", "PGSQL_NOTICE_ALL", "PGSQL_NOTICE_CLEAR"], // 3 items (17 B, 16 B, 18 B)
], // 1 item
       pg_lo_seek => [
    whence => ["PGSQL_SEEK_SET", "PGSQL_SEEK_CUR", "PGSQL_SEEK_END"], // 3 items (14 B, 14 B, 14 B)
], // 1 item
       pg_pconnect => [
    connect_type => ["PGSQL_CONNECT_FORCE_NEW"], // 1 item (23 B)
], // 1 item
       pg_put_line => [
    data => ["NULL"], // 1 item (4 B)
], // 1 item
       pg_result_error_field => [
    fieldcode => [
        "PGSQL_DIAG_SEVERITY", // 19 B
        "PGSQL_DIAG_SQLSTATE", // 19 B
        "PGSQL_DIAG_MESSAGE_PRIMARY", // 26 B
        "PGSQL_DIAG_MESSAGE_DETAIL", // 25 B
        "PGSQL_DIAG_MESSAGE_HINT", // 23 B
        "PGSQL_DIAG_STATEMENT_POSITION", // 29 B
        "PGSQL_DIAG_INTERNAL_POSITION", // 28 B
        "PGSQL_DIAG_INTERNAL_QUERY", // 25 B
        "PGSQL_DIAG_CONTEXT", // 18 B
        "PGSQL_DIAG_SOURCE_FILE", // 22 B
        "PGSQL_DIAG_SOURCE_LINE", // 22 B
        "PGSQL_DIAG_SOURCE_FUNCTION", // 26 B
    ], // 12 items
], // 1 item
       pg_result_status => [
    type => ["PGSQL_STATUS_LONG", "PGSQL_STATUS_STRING", "PGSQL_STATUS_LONG"], // 3 items (17 B, 19 B, 17 B)
], // 1 item
       pg_select => [
    options => [
        "PGSQL_CONV_FORCE_NULL", // 21 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
        "PGSQL_DML_EXEC", // 14 B
        "PGSQL_DML_ASYNC", // 15 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
    ], // 9 items
], // 1 item
       pg_send_execute => [
    stmtname => ["PREPARE"], // 1 item (7 B)
], // 1 item
       pg_set_client_encoding => [
    encoding => [
        "SQL_ASCII", // 9 B
        "EUC_JP", // 6 B
        "EUC_CN", // 6 B
        "EUC_KR", // 6 B
        "EUC_TW", // 6 B
        "UNICODE", // 7 B
        "MULE_INTERNAL", // 13 B
        "LATINX", // 6 B
        "KOI8", // 4 B
        "WIN", // 3 B
        "ALT", // 3 B
        "SJIS", // 4 B
        "BIG5", // 4 B
        "WIN1250", // 7 B
    ], // 14 items
], // 1 item
       pg_set_error_verbosity => [
    verbosity => ["PGSQL_ERRORS_TERSE", "PGSQL_ERRORS_DEFAULT", "PGSQL_ERRORS_VERBOSE"], // 3 items (18 B, 20 B, 20 B)
], // 1 item
       pg_update => [
    options => [
        "PGSQL_CONV_FORCE_NULL", // 21 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
        "PGSQL_DML_EXEC", // 14 B
        "PGSQL_DML_ASYNC", // 15 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_STRING", // 16 B
        "PGSQL_DML_NO_CONV", // 17 B
        "PGSQL_DML_ESCAPE", // 16 B
    ], // 9 items
], // 1 item
       sqlsrv_fetch_array => [
    fetchType => ["SQLSRV_FETCH_ASSOC", "SQLSRV_FETCH_NUMERIC", "SQLSRV_FETCH_BOTH"], // 3 items (18 B, 20 B, 17 B)
    row => [
        "SQLSRV_SCROLL_NEXT", // 18 B
        "SQLSRV_SCROLL_PRIOR", // 19 B
        "SQLSRV_SCROLL_FIRST", // 19 B
        "SQLSRV_SCROLL_LAST", // 18 B
        "SQLSRV_SCROLL_ABSOLUTE", // 22 B
        "SQLSRV_SCROLL_RELATIVE", // 22 B
    ], // 6 items
    offset => ["SQLSRV_SCROLL_ABSOLUTE", "SQLSRV_SCROLL_RELATIVE"], // 2 items (22 B, 22 B)
], // 3 items
       sqlsrv_fetch_object => [
    offset => ["SQLSRV_SCROLL_ABSOLUTE", "SQLSRV_SCROLL_RELATIVE"], // 2 items (22 B, 22 B)
], // 1 item
       sqlsrv_fetch => [
    offset => ["SQLSRV_SCROLL_ABSOLUTE", "SQLSRV_SCROLL_RELATIVE"], // 2 items (22 B, 22 B)
], // 1 item
   ], // 469 items
   APCUIterator => [
    __construct => [
        list => ["APC_LIST_ACTIVE", "APC_LIST_DELETED"], // 2 items (15 B, 16 B)
       ], // 1 item
   ], // 1 item
   FFI => [
    cdef => [
        lib => ["RTLD_DEFAULT"], // 1 item (12 B)
    ], // 1 item
    load => [
        filename => ["FFI_SCOPE", "FFI_LIB"], // 2 items (9 B, 7 B)
    ], // 1 item
    scope => [
        name => ["FFI_SCOPE"], // 1 item (9 B)
    ], // 1 item
], // 3 items
   Phar => [
    mungServer => [
        munglist => ["REQUEST_URI", "PHP_SELF", "SCRIPT_NAME", "SCRIPT_FILENAME"], // 4 items (11 B, 8 B, 11 B, 15 B)
    ], // 1 item
], // 1 item
   ZipArchive => [
    getFromIndex => [
        len => ["0"], // 1 item (1 B)
    ], // 1 item
    getFromName => [
        len => ["0"], // 1 item (1 B)
    ], // 1 item
], // 2 items
   DateTime => [
    createFromFormat => [
        format => [
            "01", // 2 B
            "31", // 2 B
            "1", // 1 B
            "31", // 2 B
            "D", // 1 B, callable
            "S", // 1 B
            "0", // 1 B
            "365", // 3 B
            "F", // 1 B
            "M", // 1 B
            "01", // 2 B
            "12", // 2 B
            "1", // 1 B
            "12", // 2 B
            "Y", // 1 B
            "1999", // 4 B
            "2003", // 4 B
            "99", // 2 B
            "03", // 2 B
            "1999", // 4 B
            "2003", // 4 B
            "A", // 1 B
            "1", // 1 B
            "12", // 2 B
            "01", // 2 B
            "12", // 2 B
            "G", // 1 B
            "H", // 1 B
            "0", // 1 B
            "23", // 2 B
            "00", // 2 B
            "23", // 2 B
            "00", // 2 B
            "59", // 2 B
            "00", // 2 B
            "59", // 2 B
            "12", // 2 B
            "345", // 3 B
            "45", // 2 B
            "654321", // 6 B
            "O", // 1 B
            "P", // 1 B
            "T", // 1 B, callable
            "UTC", // 3 B
            "GMT", // 3 B
            "EST", // 3 B
            "MDT", // 3 B
            "U", // 1 B
            "1292177455", // 10 B
        ], // 49 items
        timezone => ["946684800"], // 1 item (9 B)
    ], // 2 items
    format => [
        format => [
            "DATE_RSS", // 8 B
            "01", // 2 B
            "31", // 2 B
            "D", // 1 B, callable
            "1", // 1 B
            "31", // 2 B
            "N", // 1 B
            "1", // 1 B
            "7", // 1 B
            "S", // 1 B
            "0", // 1 B
            "6", // 1 B
            "0", // 1 B
            "365", // 3 B
            "W", // 1 B
            "42", // 2 B
            "F", // 1 B
            "01", // 2 B
            "12", // 2 B
            "M", // 1 B
            "1", // 1 B
            "12", // 2 B
            "28", // 2 B
            "31", // 2 B
            "L", // 1 B
            "1", // 1 B
            "0", // 1 B
            "Y", // 1 B
            "W", // 1 B
            "1999", // 4 B
            "2003", // 4 B
            "Y", // 1 B
            "1999", // 4 B
            "2003", // 4 B
            "99", // 2 B
            "03", // 2 B
            "A", // 1 B
            "AM", // 2 B
            "PM", // 2 B
            "B", // 1 B
            "000", // 3 B
            "999", // 3 B
            "1", // 1 B
            "12", // 2 B
            "G", // 1 B
            "0", // 1 B
            "23", // 2 B
            "01", // 2 B
            "12", // 2 B
            "H", // 1 B
            "00", // 2 B
            "23", // 2 B
            "00", // 2 B
            "59", // 2 B
            "00", // 2 B
            "59", // 2 B
            "000000", // 6 B
            "654321", // 6 B
            "654", // 3 B
            "UTC", // 3 B
            "GMT", // 3 B
            "I", // 1 B
            "1", // 1 B
            "0", // 1 B
            "O", // 1 B
            "P", // 1 B
            "P", // 1 B
            "Z", // 1 B
            "T", // 1 B, callable
            "EST", // 3 B
            "MDT", // 3 B
            "Z", // 1 B
            "50400", // 5 B
            "U", // 1 B
            "Z", // 1 B
            "0", // 1 B
        ], // 76 items
    ], // 1 item
], // 2 items
   DateInterval => [
    __construct => [
        duration => [
            "P", // 1 B
            "T", // 1 B, callable
            "Y", // 1 B
            "M", // 1 B
            "D", // 1 B, callable
            "W", // 1 B
            "D", // 1 B, callable
            "H", // 1 B
            "M", // 1 B
            "S", // 1 B
            "P2D", // 3 B
            "PT2S", // 4 B
            "P6YT5M", // 6 B
            "P1Y4D", // 5 B
            "P4D1Y", // 5 B
            "25", // 2 B
        ], // 16 items
    ], // 1 item
    format => [
        format => [
            "Y", // 1 B
            "01", // 2 B
            "03", // 2 B
            "1", // 1 B
            "3", // 1 B
            "M", // 1 B
            "01", // 2 B
            "03", // 2 B
            "12", // 2 B
            "1", // 1 B
            "3", // 1 B
            "12", // 2 B
            "D", // 1 B, callable
            "01", // 2 B
            "03", // 2 B
            "31", // 2 B
            "1", // 1 B
            "3", // 1 B
            "31", // 2 B
            "4", // 1 B
            "18", // 2 B
            "8123", // 4 B
            "H", // 1 B
            "01", // 2 B
            "03", // 2 B
            "23", // 2 B
            "1", // 1 B
            "3", // 1 B
            "23", // 2 B
            "I", // 1 B
            "01", // 2 B
            "03", // 2 B
            "59", // 2 B
            "1", // 1 B
            "3", // 1 B
            "59", // 2 B
            "S", // 1 B
            "01", // 2 B
            "03", // 2 B
            "57", // 2 B
            "1", // 1 B
            "3", // 1 B
            "57", // 2 B
            "F", // 1 B
            "007701", // 6 B
            "052738", // 6 B
            "428291", // 6 B
            "7701", // 4 B
            "52738", // 5 B
            "428291", // 6 B
            "R", // 1 B
        ], // 51 items
    ], // 1 item
], // 2 items
   DatePeriod => [
    __construct => [
        recurrences => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   IntlCalendar => [
    add => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    clear => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    fieldDifference => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    get => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getActualMaximum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getActualMinimum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getGreatestMinimum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getLeastMaximum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getMaximum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    getMinimum => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    isSet => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
    roll => [
        field => ["0"], // 1 item (1 B)
        amountOrUpOrDown => ["1", "1"], // 2 items (1 B, 1 B)
    ], // 2 items
    set => [
        field => ["0"], // 1 item (1 B)
    ], // 1 item
], // 13 items
   IntlChar => [
    digit => [
        radix => ["10"], // 1 item (2 B)
    ], // 1 item
    forDigit => [
        radix => ["10"], // 1 item (2 B)
    ], // 1 item
    getPropertyValueName => [
        value => ["0"], // 1 item (1 B)
    ], // 1 item
], // 3 items
   Imagick => [
    importImagePixels => [
        map => ["RGB"], // 1 item (3 B)
    ], // 1 item
    setImageCompression => [
        compression => ["COMPRESSION"], // 1 item (11 B)
    ], // 1 item
], // 2 items
   ImagickPixel => [
    getColor => [
        normalized => [
            "0", // 1 B
            "1", // 1 B
            "2", // 1 B
            "0", // 1 B
            "1", // 1 B
            "2", // 1 B
            "0", // 1 B
            "255", // 3 B
            "0", // 1 B
            "1", // 1 B
            "0", // 1 B
            "1", // 1 B
            "0", // 1 B
            "255", // 3 B
        ], // 14 items
    ], // 1 item
], // 1 item
   Ev => [
    run => [
        flags => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   EvChild => [
    __construct => [
        pid => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   EvLoop => [
    run => [
        flags => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   Pool => [
    submitTo => [
        worker => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   SplFixedArray => [
    __construct => [
        size => ["PHP_INT_MAX", "0"], // 2 items (11 B, 1 B)
    ], // 1 item
    setSize => [
        size => ["PHP_INT_MAX", "0"], // 2 items (11 B, 1 B)
    ], // 1 item
], // 2 items
   SplObjectStorage => [
    count => [
        mode => ["COUNT_RECURSIVE"], // 1 item (15 B)
    ], // 1 item
], // 1 item
   RecursiveCachingIterator => [
    __construct => [
        flags => ["CALL_TOSTRING", "CATCH_GET_CHILD"], // 2 items (13 B, 15 B)
    ], // 1 item
], // 1 item
   SplFileObject => [
    flock => [
        operation => ["LOCK_SH", "LOCK_EX", "LOCK_UN", "LOCK_NB"], // 4 items (7 B, 7 B, 7 B, 7 B)
    ], // 1 item
    fscanf => [
        format => [
            "PHP_INT_MAX", // 11 B
            "0", // 1 B
            "E", // 1 B
            "F", // 1 B
            "G", // 1 B
            "H", // 1 B
            "E", // 1 B
            "F", // 1 B
            "G", // 1 B
            "E", // 1 B
            "F", // 1 B
            "H", // 1 B
            "E", // 1 B
            "F", // 1 B
            "X", // 1 B
            "X", // 1 B
            "E", // 1 B
            "F", // 1 B
            "G", // 1 B
            "H", // 1 B
        ], // 20 items
    ], // 1 item
    fseek => [
        whence => ["SEEK_SET", "SEEK_CUR", "SEEK_END", "SEEK_SET"], // 4 items (8 B, 8 B, 8 B, 8 B)
    ], // 1 item
], // 3 items
   ArrayObject => [
    asort => [
        flags => [
            "SORT_REGULAR", // 12 B
            "SORT_NUMERIC", // 12 B
            "SORT_STRING", // 11 B
            "SORT_LOCALE_STRING", // 18 B
            "SORT_NATURAL", // 12 B
            "SORT_FLAG_CASE", // 14 B
            "SORT_STRING", // 11 B
            "SORT_NATURAL", // 12 B
        ], // 8 items
    ], // 1 item
    ksort => [
        flags => [
            "SORT_REGULAR", // 12 B
            "SORT_NUMERIC", // 12 B
            "SORT_STRING", // 11 B
            "SORT_LOCALE_STRING", // 18 B
            "SORT_NATURAL", // 12 B
            "SORT_FLAG_CASE", // 14 B
            "SORT_STRING", // 11 B
            "SORT_NATURAL", // 12 B
        ], // 8 items
    ], // 1 item
], // 2 items
   streamWrapper => [
    mkdir => [
        options => ["STREAM_MKDIR_RECURSIVE"], // 1 item (22 B)
    ], // 1 item
    rmdir => [
        options => ["STREAM_MKDIR_RECURSIVE"], // 1 item (22 B)
    ], // 1 item
    stream_cast => [
        cast_as => ["STREAM_CAST_FOR_SELECT", "STREAM_CAST_AS_STREAM"], // 2 items (22 B, 21 B)
    ], // 1 item
    stream_lock => [
        operation => ["LOCK_SH", "LOCK_EX", "LOCK_UN", "LOCK_NB"], // 4 items (7 B, 7 B, 7 B, 7 B)
    ], // 1 item
    stream_metadata => [
        option => [
            "STREAM_META_TOUCH", // 17 B
            "STREAM_META_OWNER_NAME", // 22 B
            "STREAM_META_OWNER", // 17 B
            "STREAM_META_GROUP_NAME", // 22 B
            "STREAM_META_GROUP", // 17 B
            "STREAM_META_ACCESS", // 18 B
        ], // 6 items
        value => [
            "STREAM_META_TOUCH", // 17 B
            "STREAM_META_OWNER_NAME", // 22 B
            "STREAM_META_GROUP_NAME", // 22 B
            "STREAM_META_OWNER", // 17 B
            "STREAM_META_GROUP", // 17 B
            "STREAM_META_ACCESS", // 18 B
        ], // 6 items
    ], // 2 items
    stream_open => [
        options => ["STREAM_USE_PATH", "STREAM_REPORT_ERRORS"], // 2 items (15 B, 20 B)
        opened_path => ["STREAM_USE_PATH"], // 1 item (15 B)
    ], // 2 items
    stream_seek => [
        whence => ["SEEK_SET", "SEEK_CUR", "SEEK_END", "SEEK_CUR", "SEEK_SET"], // 5 items (8 B, 8 B, 8 B, 8 B, 8 B)
    ], // 1 item
    stream_set_option => [
        option => [
            "STREAM_OPTION_BLOCKING", // 22 B
            "STREAM_OPTION_READ_TIMEOUT", // 26 B
            "STREAM_OPTION_WRITE_BUFFER", // 26 B
        ], // 3 items
        arg1 => [
            "STREAM_OPTION_BLOCKING", // 22 B
            "STREAM_OPTION_READ_TIMEOUT", // 26 B
            "STREAM_OPTION_WRITE_BUFFER", // 26 B
            "STREAM_BUFFER_NONE", // 18 B
            "STREAM_BUFFER_FULL", // 18 B
        ], // 5 items
        arg2 => [
            "STREAM_OPTION_BLOCKING", // 22 B
            "STREAM_OPTION_READ_TIMEOUT", // 26 B
            "STREAM_OPTION_WRITE_BUFFER", // 26 B
        ], // 3 items
    ], // 3 items
], // 8 items
   PhpToken => [
    tokenize => [
        flags => ["TOKEN_PARSE"], // 1 item (11 B)
    ], // 1 item
], // 1 item
   Event => [
    __construct => [
        fd => ["SIGHUP"], // 1 item (6 B)
    ], // 1 item
    set => [
        fd => ["SIGHUP"], // 1 item (6 B)
    ], // 1 item
], // 2 items
   EventBufferEvent => [
    __construct => [
        options => ["0"], // 1 item (1 B)
    ], // 1 item
    createPair => [
        options => ["OR"], // 1 item (2 B)
    ], // 1 item
    setWatermark => [
        highmark => ["0"], // 1 item (1 B)
    ], // 1 item
], // 3 items
   EventConfig => [
    setMaxDispatchInterval => [
        max_interval => ["0"], // 1 item (1 B)
        min_priority => ["0", "1", "1"], // 3 items (1 B, 1 B, 1 B)
    ], // 2 items
], // 1 item
   EventDnsBase => [
    parseResolvConf => [
        flags => [
            "1", // 1 B
            "2", // 1 B
            "3", // 1 B
            "4", // 1 B
            "5", // 1 B
            "6", // 1 B
        ], // 6 items
    ], // 1 item
], // 1 item
   GearmanClient => [
    addOptions => [
        options => [
            "GEARMAN_CLIENT_GENERATE_UNIQUE", // 30 B
            "GEARMAN_CLIENT_NON_BLOCKING", // 27 B
            "GEARMAN_CLIENT_UNBUFFERED_RESULT", // 32 B
            "GEARMAN_CLIENT_FREE_TASKS", // 25 B
        ], // 4 items
    ], // 1 item
], // 1 item
   Memcache => [
    add => [
        flag => ["MEMCACHE_COMPRESSED"], // 1 item (19 B)
    ], // 1 item
    addServer => [
        host => ["0"], // 1 item (1 B)
        port => ["0"], // 1 item (1 B)
    ], // 2 items
    connect => [
        host => ["0"], // 1 item (1 B)
        port => ["0"], // 1 item (1 B)
    ], // 2 items
    delete => [
        timeout => ["0"], // 1 item (1 B)
    ], // 1 item
    pconnect => [
        host => ["0"], // 1 item (1 B)
        port => ["0"], // 1 item (1 B)
    ], // 2 items
    replace => [
        flag => ["MEMCACHE_COMPRESSED"], // 1 item (19 B)
    ], // 1 item
    set => [
        flag => ["MEMCACHE_COMPRESSED"], // 1 item (19 B)
    ], // 1 item
], // 7 items
   Memcached => [
    addServer => [
        host => ["0"], // 1 item (1 B)
        port => ["11211", "0"], // 2 items (5 B, 1 B)
    ], // 2 items
], // 1 item
   SNMP => [
    set => [
        type => ["OPAQUE_SPECIAL_TYPES"], // 1 item (20 B)
    ], // 1 item
], // 1 item
   ReflectionGenerator => [
    getTrace => [
        options => ["DEBUG_BACKTRACE_PROVIDE_OBJECT", "DEBUG_BACKTRACE_IGNORE_ARGS"], // 2 items (30 B, 27 B)
    ], // 1 item
], // 1 item
   OAuth => [
    __construct => [
        signature_method => ["OAUTH_SIG_METHOD_HMACSHA1"], // 1 item (25 B)
        auth_type => ["OAUTH_AUTH_TYPE_AUTHORIZATION"], // 1 item (29 B)
    ], // 2 items
    fetch => [
        http_method => ["OAUTH_HTTP_METHOD_HEAD"], // 1 item (22 B)
    ], // 1 item
    getAccessToken => [
        http_method => ["GET", "POST"], // 2 items (3 B, 4 B)
    ], // 1 item
    getRequestToken => [
        http_method => ["GET", "POST"], // 2 items (3 B, 4 B)
    ], // 1 item
    setAuthType => [
        auth_type => [
            "OAUTH_AUTH_TYPE_AUTHORIZATION", // 29 B
            "OAUTH_AUTH_TYPE_FORM", // 20 B
            "OAUTH_AUTH_TYPE_URI", // 19 B
            "OAUTH_AUTH_TYPE_NONE", // 20 B
        ], // 4 items
    ], // 1 item
    setRequestEngine => [
        reqengine => ["OAUTH_REQENGINE_STREAMS", "OAUTH_REQENGINE_CURL"], // 2 items (23 B, 20 B)
    ], // 1 item
], // 6 items
   SoapClient => [
    __construct => [
        wsdl => ["WSDL"], // 1 item (4 B)
        options => [
            "SOAP_1_1", // 8 B
            "SOAP_1_2", // 8 B
            "SOAP_AUTHENTICATION_BASIC", // 25 B
            "SOAP_AUTHENTICATION_DIGEST", // 26 B
            "WSDL_CACHE_NONE", // 15 B
            "WSDL_CACHE_DISK", // 15 B
            "WSDL_CACHE_MEMORY", // 17 B
            "WSDL_CACHE_BOTH", // 15 B
            "SOAP_SINGLE_ELEMENT_ARRAYS", // 26 B
            "SOAP_USE_XSI_ARRAY_TYPE", // 23 B
            "SOAP_WAIT_ONE_WAY_CALLS", // 23 B
            "SOAP_SSL_METHOD_TLS", // 19 B
        ], // 12 items
    ], // 2 items
], // 1 item
   SoapServer => [
    addFunction => [
        functions => ["SOAP_FUNCTIONS_ALL"], // 1 item (18 B)
    ], // 1 item
    __construct => [
        options => [
            "WSDL_CACHE_NONE", // 15 B
            "WSDL_CACHE_DISK", // 15 B
            "WSDL_CACHE_MEMORY", // 17 B
            "WSDL_CACHE_BOTH", // 15 B
            "SOAP_WAIT_ONE_WAY_CALLS", // 23 B
            "SOAP_SINGLE_ELEMENT_ARRAYS", // 26 B
            "SOAP_USE_XSI_ARRAY_TYPE", // 23 B
        ], // 7 items
    ], // 1 item
    setPersistence => [
        mode => [
            "SOAP_PERSISTENCE_REQUEST", // 24 B
            "SOAP_PERSISTENCE_SESSION", // 24 B
            "SOAP_PERSISTENCE_XXX", // 20 B
        ], // 3 items
    ], // 1 item
], // 3 items
   com => [
    __construct => [
        server_name => [
            "CLSCTX_INPROC_SERVER", // 20 B
            "CLSCTX_INPROC_HANDLER", // 21 B
            "CLSCTX_LOCAL_SERVER", // 19 B
            "CLSCTX_REMOTE_SERVER", // 20 B
            "CLSCTX_SERVER", // 13 B
            "CLSCTX_ALL", // 10 B
            "CLSCTX_SERVER", // 13 B
            "CLSCTX_REMOTE_SERVER", // 20 B
        ], // 8 items
        codepage => [
            "CP_ACP", // 6 B
            "CP_MACCP", // 8 B
            "CP_OEMCP", // 8 B
            "CP_SYMBOL", // 9 B
            "CP_THREAD_ACP", // 13 B
            "CP_UTF7", // 7 B
            "CP_UTF8", // 7 B
        ], // 7 items
    ], // 2 items
], // 1 item
   variant => [
    __construct => [
        type => ["VT_XXX"], // 1 item (6 B)
    ], // 1 item
], // 1 item
   COMPersistHelper => [
    LoadFromFile => [
        flags => ["0"], // 1 item (1 B)
    ], // 1 item
], // 1 item
   DOMDocument => [
    load => [
        options => ["OR"], // 1 item (2 B)
    ], // 1 item
    loadXML => [
        options => ["OR"], // 1 item (2 B)
    ], // 1 item
], // 2 items
   SimpleXMLElement => [
    __construct => [
        options => ["LIBXML_NOEMPTYTAG"], // 1 item (17 B)
    ], // 1 item
], // 1 item
   XSLTProcessor => [
    setSecurityPrefs => [
        preferences => [
            "XSL_SECPREF_READ_FILE", // 21 B
            "XSL_SECPREF_WRITE_FILE", // 22 B
            "XSL_SECPREF_CREATE_DIRECTORY", // 28 B
            "XSL_SECPREF_READ_NETWORK", // 24 B
            "XSL_SECPREF_WRITE_NETWORK", // 25 B
            "XSL_SECPREF_NONE", // 16 B
            "XSL_SECPREF_DEFAULT", // 19 B
        ], // 7 items
    ], // 1 item
], // 1 item
   SQLite3 => [
    backup => [
        sourceDatabase => ["AS", "ATTACH"], // 2 items (2 B, 6 B)
    ], // 1 item
    __construct => [
        flags => ["SQLITE3_OPEN_READONLY", "SQLITE3_OPEN_READWRITE", "SQLITE3_OPEN_CREATE"], // 3 items (21 B, 22 B, 19 B)
    ], // 1 item
    createAggregate => [
        finalCallback => ["0"], // 1 item (1 B)
        rownumber => ["0"], // 1 item (1 B)
    ], // 2 items
    createFunction => [
        flags => ["SQLITE3_DETERMINISTIC"], // 1 item (21 B)
    ], // 1 item
    open => [
        flags => ["SQLITE3_OPEN_READONLY", "SQLITE3_OPEN_READWRITE", "SQLITE3_OPEN_CREATE"], // 3 items (21 B, 22 B, 19 B)
    ], // 1 item
    openBlob => [
        flags => ["SQLITE3_OPEN_READONLY", "SQLITE3_OPEN_READWRITE"], // 2 items (21 B, 22 B)
    ], // 1 item
], // 6 items
   SQLite3Stmt => [
    bindParam => [
        param => ["1"], // 1 item (1 B)
        type => [
            "SQLITE3_INTEGER", // 15 B
            "SQLITE3_FLOAT", // 13 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_BLOB", // 12 B
            "SQLITE3_NULL", // 12 B
            "SQLITE3_INTEGER", // 15 B
            "SQLITE3_FLOAT", // 13 B
            "SQLITE3_NULL", // 12 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_NULL", // 12 B
        ], // 11 items
    ], // 2 items
    bindValue => [
        param => ["1"], // 1 item (1 B)
        type => [
            "SQLITE3_INTEGER", // 15 B
            "SQLITE3_FLOAT", // 13 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_BLOB", // 12 B
            "SQLITE3_NULL", // 12 B
            "SQLITE3_INTEGER", // 15 B
            "SQLITE3_FLOAT", // 13 B
            "SQLITE3_NULL", // 12 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_TEXT", // 12 B
            "SQLITE3_NULL", // 12 B
        ], // 11 items
    ], // 2 items
], // 2 items
   SQLite3Result => [
    fetchArray => [
        mode => [
            "SQLITE3_ASSOC", // 13 B
            "SQLITE3_NUM", // 11 B
            "SQLITE3_BOTH", // 12 B
            "SQLITE3_ASSOC", // 13 B
            "SQLITE3_NUM", // 11 B
            "SQLITE3_BOTH", // 12 B
        ], // 6 items
    ], // 1 item
], // 1 item
] // 44 items