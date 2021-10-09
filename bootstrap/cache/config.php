<?php return array (
  'apidoc' => 
  array (
    'type' => 'static',
    'laravel' => 
    array (
      'autoload' => false,
      'docs_url' => '/doc',
      'middleware' => 
      array (
      ),
    ),
    'router' => 'laravel',
    'base_url' => NULL,
    'postman' => 
    array (
      'enabled' => true,
      'name' => NULL,
      'description' => NULL,
      'auth' => NULL,
    ),
    'routes' => 
    array (
      0 => 
      array (
        'match' => 
        array (
          'domains' => 
          array (
            0 => '*',
          ),
          'prefixes' => 
          array (
            0 => '*',
          ),
          'versions' => 
          array (
            0 => 'v1',
          ),
        ),
        'include' => 
        array (
        ),
        'exclude' => 
        array (
        ),
        'apply' => 
        array (
          'headers' => 
          array (
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
          ),
          'response_calls' => 
          array (
            'methods' => 
            array (
              0 => 'GET',
            ),
            'config' => 
            array (
              'app.env' => 'documentation',
              'app.debug' => false,
            ),
            'cookies' => 
            array (
            ),
            'queryParams' => 
            array (
            ),
            'bodyParams' => 
            array (
            ),
          ),
        ),
      ),
    ),
    'strategies' => 
    array (
      'metadata' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Metadata\\GetFromDocBlocks',
      ),
      'urlParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\UrlParameters\\GetFromUrlParamTag',
      ),
      'queryParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\QueryParameters\\GetFromQueryParamTag',
      ),
      'headers' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\RequestHeaders\\GetFromRouteRules',
      ),
      'bodyParameters' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\BodyParameters\\GetFromBodyParamTag',
      ),
      'responses' => 
      array (
        0 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseTransformerTags',
        1 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseResponseTag',
        2 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseResponseFileTag',
        3 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\UseApiResourceTags',
        4 => 'Mpociot\\ApiDoc\\Extracting\\Strategies\\Responses\\ResponseCalls',
      ),
    ),
    'logo' => false,
    'default_group' => 'general',
    'example_languages' => 
    array (
      0 => 'bash',
      1 => 'javascript',
    ),
    'fractal' => 
    array (
      'serializer' => NULL,
    ),
    'faker_seed' => NULL,
    'routeMatcher' => 'Mpociot\\ApiDoc\\Matching\\RouteMatcher',
  ),
  'app' => 
  array (
    'app_pro' => false,
    'app_sync' => false,
    'debug' => true,
    'name' => 'InfixEdu',
    'force_https' => false,
    'debug_blacklist' => 
    array (
      '_COOKIE' => 
      array (
      ),
      '_SERVER' => 
      array (
        0 => 'ALLUSERSPROFILE',
        1 => 'APPDATA',
        2 => 'ChocolateyInstall',
        3 => 'ChocolateyLastPathUpdate',
        4 => 'CommonProgramFiles',
        5 => 'CommonProgramFiles(x86)',
        6 => 'CommonProgramW6432',
        7 => 'COMPUTERNAME',
        8 => 'ComSpec',
        9 => 'DriverData',
        10 => 'FPS_BROWSER_APP_PROFILE_STRING',
        11 => 'FPS_BROWSER_USER_PROFILE_STRING',
        12 => 'HOMEDRIVE',
        13 => 'HOMEPATH',
        14 => 'LOCALAPPDATA',
        15 => 'LOGONSERVER',
        16 => 'NUMBER_OF_PROCESSORS',
        17 => 'OneDrive',
        18 => 'OS',
        19 => 'Path',
        20 => 'PATHEXT',
        21 => 'PROCESSOR_ARCHITECTURE',
        22 => 'PROCESSOR_IDENTIFIER',
        23 => 'PROCESSOR_LEVEL',
        24 => 'PROCESSOR_REVISION',
        25 => 'ProgramData',
        26 => 'ProgramFiles',
        27 => 'ProgramFiles(x86)',
        28 => 'ProgramW6432',
        29 => 'PROMPT',
        30 => 'PSModulePath',
        31 => 'PUBLIC',
        32 => 'SESSIONNAME',
        33 => 'SystemDrive',
        34 => 'SystemRoot',
        35 => 'TEMP',
        36 => 'TMP',
        37 => 'USERDOMAIN',
        38 => 'USERDOMAIN_ROAMINGPROFILE',
        39 => 'USERNAME',
        40 => 'USERPROFILE',
        41 => 'windir',
        42 => 'PHP_SELF',
        43 => 'SCRIPT_NAME',
        44 => 'SCRIPT_FILENAME',
        45 => 'PATH_TRANSLATED',
        46 => 'DOCUMENT_ROOT',
        47 => 'REQUEST_TIME_FLOAT',
        48 => 'REQUEST_TIME',
        49 => 'argv',
        50 => 'argc',
        51 => 'SHELL_VERBOSITY',
        52 => 'APP_NAME',
        53 => 'APP_ENV',
        54 => 'APP_KEY',
        55 => 'APP_DEBUG',
        56 => 'APP_SYNC',
        57 => 'APP_PRO',
        58 => 'APP_URL',
        59 => 'FORCE_HTTPS',
        60 => 'LOG_CHANNEL',
        61 => 'DB_CONNECTION',
        62 => 'DB_HOST',
        63 => 'DB_PORT',
        64 => 'DB_DATABASE',
        65 => 'DB_USERNAME',
        66 => 'DB_PASSWORD',
        67 => 'BROADCAST_DRIVER',
        68 => 'CACHE_DRIVER',
        69 => 'QUEUE_CONNECTION',
        70 => 'SESSION_DRIVER',
        71 => 'SESSION_LIFETIME',
        72 => 'REDIS_HOST',
        73 => 'REDIS_PASSWORD',
        74 => 'REDIS_PORT',
        75 => 'MAIL_DRIVER',
        76 => 'MAIL_HOST',
        77 => 'MAIL_PORT',
        78 => 'MAIL_USERNAME',
        79 => 'MAIL_PASSWORD',
        80 => 'MAIL_FROM_ADDRESS',
        81 => 'MAIL_FROM_NAME',
        82 => 'MAIL_ENCRYPTION',
        83 => 'AWS_ACCESS_KEY_ID',
        84 => 'AWS_SECRET_ACCESS_KEY',
        85 => 'AWS_DEFAULT_REGION',
        86 => 'AWS_BUCKET',
        87 => 'PUSHER_APP_ID',
        88 => 'PUSHER_APP_KEY',
        89 => 'PUSHER_APP_SECRET',
        90 => 'PUSHER_APP_CLUSTER',
        91 => 'MIX_PUSHER_APP_KEY',
        92 => 'MIX_PUSHER_APP_CLUSTER',
        93 => 'APP_LOCALE',
        94 => 'PAYPAL_CLIENT_ID',
        95 => 'PAYPAL_SECRET',
        96 => 'PAYSTACK_PUBLIC_KEY',
        97 => 'PAYSTACK_SECRET_KEY',
        98 => 'PAYSTACK_PAYMENT_URL',
        99 => 'MERCHANT_EMAIL',
        100 => 'STRIPE_SECRET',
        101 => 'RAZOR_KEY',
        102 => 'RAZOR_SECRET',
        103 => 'NOCAPTCHA_SITEKEY',
        104 => 'NOCAPTCHA_SECRET',
        105 => 'ZOOM_CLIENT_KEY',
        106 => 'ZOOM_CLIENT_SECRET',
        107 => 'BBB_SECURITY_SALT',
        108 => 'BBB_SERVER_BASE_URL',
      ),
      '_ENV' => 
      array (
        0 => 'SHELL_VERBOSITY',
        1 => 'APP_NAME',
        2 => 'APP_ENV',
        3 => 'APP_KEY',
        4 => 'APP_DEBUG',
        5 => 'APP_SYNC',
        6 => 'APP_PRO',
        7 => 'APP_URL',
        8 => 'FORCE_HTTPS',
        9 => 'LOG_CHANNEL',
        10 => 'DB_CONNECTION',
        11 => 'DB_HOST',
        12 => 'DB_PORT',
        13 => 'DB_DATABASE',
        14 => 'DB_USERNAME',
        15 => 'DB_PASSWORD',
        16 => 'BROADCAST_DRIVER',
        17 => 'CACHE_DRIVER',
        18 => 'QUEUE_CONNECTION',
        19 => 'SESSION_DRIVER',
        20 => 'SESSION_LIFETIME',
        21 => 'REDIS_HOST',
        22 => 'REDIS_PASSWORD',
        23 => 'REDIS_PORT',
        24 => 'MAIL_DRIVER',
        25 => 'MAIL_HOST',
        26 => 'MAIL_PORT',
        27 => 'MAIL_USERNAME',
        28 => 'MAIL_PASSWORD',
        29 => 'MAIL_FROM_ADDRESS',
        30 => 'MAIL_FROM_NAME',
        31 => 'MAIL_ENCRYPTION',
        32 => 'AWS_ACCESS_KEY_ID',
        33 => 'AWS_SECRET_ACCESS_KEY',
        34 => 'AWS_DEFAULT_REGION',
        35 => 'AWS_BUCKET',
        36 => 'PUSHER_APP_ID',
        37 => 'PUSHER_APP_KEY',
        38 => 'PUSHER_APP_SECRET',
        39 => 'PUSHER_APP_CLUSTER',
        40 => 'MIX_PUSHER_APP_KEY',
        41 => 'MIX_PUSHER_APP_CLUSTER',
        42 => 'APP_LOCALE',
        43 => 'PAYPAL_CLIENT_ID',
        44 => 'PAYPAL_SECRET',
        45 => 'PAYSTACK_PUBLIC_KEY',
        46 => 'PAYSTACK_SECRET_KEY',
        47 => 'PAYSTACK_PAYMENT_URL',
        48 => 'MERCHANT_EMAIL',
        49 => 'STRIPE_SECRET',
        50 => 'RAZOR_KEY',
        51 => 'RAZOR_SECRET',
        52 => 'NOCAPTCHA_SITEKEY',
        53 => 'NOCAPTCHA_SECRET',
        54 => 'ZOOM_CLIENT_KEY',
        55 => 'ZOOM_CLIENT_SECRET',
        56 => 'BBB_SECURITY_SALT',
        57 => 'BBB_SERVER_BASE_URL',
      ),
      '_POST' => 
      array (
      ),
    ),
    'env' => 'Production',
    'url' => 'http://localhost/Celestial%20Code/infixEduV6.3.1',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:SSFKYEAx6qWhMKG0SZVpzgfWDPg5Xx5ArWNTgbA0z6w=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Barryvdh\\DomPDF\\ServiceProvider',
      23 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
      24 => 'Laravel\\Passport\\PassportServiceProvider',
      25 => 'App\\Providers\\AppServiceProvider',
      26 => 'App\\Providers\\AuthServiceProvider',
      27 => 'App\\Providers\\EventServiceProvider',
      28 => 'App\\Providers\\RouteServiceProvider',
      29 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
      30 => 'Intervention\\Image\\ImageServiceProvider',
      31 => 'Anhskohbo\\NoCaptcha\\NoCaptchaServiceProvider',
      32 => 'Rahulreghunath\\Textlocal\\ServiceProvider',
      33 => 'Jenssegers\\Agent\\AgentServiceProvider',
      34 => 'Craftsys\\Msg91\\Msg91LaravelServiceProvider',
      35 => 'Yajra\\DataTables\\DataTablesServiceProvider',
      36 => 'App\\Providers\\BroadcastServiceProvider',
      37 => 'App\\Providers\\TranslationServiceProvider',
      38 => 'Benwilkins\\FCM\\FcmNotificationServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'Carbon' => 'Carbon\\Carbon',
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Agent' => 'Jenssegers\\Agent\\Facades\\Agent',
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
      'Msg91' => 'Craftsys\\Msg91\\Facade\\Msg91',
      'DataTables' => 'Yajra\\DataTables\\Facades\\DataTables',
      'Str' => 'Illuminate\\Support\\Str',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'backup' => 
  array (
    'mysql' => 
    array (
      'mysql_path' => 'mysql',
      'mysqldump_path' => 'mysqldump',
      'compress' => false,
      'local-storage' => 
      array (
        'disk' => 'local',
        'path' => 'backups',
      ),
      'cloud-storage' => 
      array (
        'enabled' => false,
        'disk' => 's3',
        'path' => 'path/to/your/backup-folder/',
        'keep-local' => true,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'infixedu_cache',
  ),
  'captcha' => 
  array (
    'secret' => '',
    'sitekey' => '',
    'options' => 
    array (
      'timeout' => 30,
    ),
  ),
  'clickatell' => 
  array (
    'api_key' => NULL,
  ),
  'coreinfixedu' => 
  array (
    'name' => 'CoreInfixEdu',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'ds_2',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'ds_2',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
      ),
      'mysql2' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3307',
        'database' => 'origin_db',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'ds_2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'ds_2',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\fonts/',
      'font_cache' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\FAREED~1\\AppData\\Local\\Temp',
      'chroot' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\FAREED~1\\AppData\\Local\\Temp',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\app/public',
        'url' => 'http://localhost/Celestial%20Code/infixEduV6.3.1/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
      'ftp' => 
      array (
        'driver' => 'ftp',
        'host' => NULL,
        'username' => NULL,
        'password' => NULL,
        'port' => NULL,
        'root' => '',
        'passive' => true,
        'ssl' => true,
        'timeout' => 30,
      ),
      'sftp' => 
      array (
        'driver' => 'sftp',
        'host' => '139.59.7.19',
        'username' => 'rashed',
        'password' => '@midhakaN@!',
        'port' => 21,
        'root' => '',
        'passive' => true,
        'ssl' => true,
        'timeout' => 30,
      ),
      'custom' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1/uploads',
      ),
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
    ),
    'send_logs_as_events' => true,
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'himalayasms' => 
  array (
    'name' => 'HimalayaSms',
    'key' => '560F935496062E',
    'senderid' => 'KalashAlert',
    'campaign' => '5144',
    'routeid' => '125',
    'type' => 'text',
    'api_endpoint' => 'https://sms.techhimalaya.com/base/smsapi/index.php',
    'methods' => 
    array (
      'send' => 'https://sms.techhimalaya.com/base/smsapi/index.php',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'laravel-page-speed' => 
  array (
    'enable' => false,
    'php' => 
    array (
      'enable' => true,
      'skip' => 
      array (
        0 => '*.xml',
        1 => '*.less',
        2 => '*.pdf',
        3 => '*.doc',
        4 => '*.txt',
        5 => '*.ico',
        6 => '*.rss',
        7 => '*.zip',
        8 => '*.mp3',
        9 => '*.rar',
        10 => '*.exe',
        11 => '*.wmv',
        12 => '*.doc',
        13 => '*.avi',
        14 => '*.ppt',
        15 => '*.mpg',
        16 => '*.mpeg',
        17 => '*.tif',
        18 => '*.wav',
        19 => '*.mov',
        20 => '*.psd',
        21 => '*.ai',
        22 => '*.xls',
        23 => '*.mp4',
        24 => '*.m4a',
        25 => '*.swf',
        26 => '*.dat',
        27 => '*.dmg',
        28 => '*.iso',
        29 => '*.flv',
        30 => '*.m4v',
        31 => '*.torrent',
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587587',
    'from' => 
    array (
      'address' => 'admin@infixedu.com',
      'name' => 'InfixEdu',
    ),
    'stream' => 
    array (
      'ssl' => 
      array (
        'allow_self_signed' => true,
        'verify_peer' => false,
        'verify_peer_name' => false,
      ),
    ),
    'encryption' => 'tlstls',
    'username' => 'demo@spondonit.com',
    'password' => '123456',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\Modules',
      'assets' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\public\\modules',
      'migration' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'CommandMakeCommand',
      1 => 'ControllerMakeCommand',
      2 => 'DisableCommand',
      3 => 'DumpCommand',
      4 => 'EnableCommand',
      5 => 'EventMakeCommand',
      6 => 'JobMakeCommand',
      7 => 'ListenerMakeCommand',
      8 => 'MailMakeCommand',
      9 => 'MiddlewareMakeCommand',
      10 => 'NotificationMakeCommand',
      11 => 'ProviderMakeCommand',
      12 => 'RouteProviderMakeCommand',
      13 => 'InstallCommand',
      14 => 'ListCommand',
      15 => 'ModuleDeleteCommand',
      16 => 'ModuleMakeCommand',
      17 => 'FactoryMakeCommand',
      18 => 'PolicyMakeCommand',
      19 => 'RequestMakeCommand',
      20 => 'RuleMakeCommand',
      21 => 'MigrateCommand',
      22 => 'MigrateRefreshCommand',
      23 => 'MigrateResetCommand',
      24 => 'MigrateRollbackCommand',
      25 => 'MigrateStatusCommand',
      26 => 'MigrationMakeCommand',
      27 => 'ModelMakeCommand',
      28 => 'PublishCommand',
      29 => 'PublishConfigurationCommand',
      30 => 'PublishMigrationCommand',
      31 => 'PublishTranslationCommand',
      32 => 'SeedCommand',
      33 => 'SeedMakeCommand',
      34 => 'SetupCommand',
      35 => 'UnUseCommand',
      36 => 'UpdateCommand',
      37 => 'UseCommand',
      38 => 'ResourceMakeCommand',
      39 => 'TestMakeCommand',
      40 => 'LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
    ),
    'composer-output' => false,
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'msg91' => 
  array (
    'auth_key' => NULL,
    'sender_id' => NULL,
    'route' => NULL,
    'country' => NULL,
    'limit_credit' => true,
  ),
  'parentregistration' => 
  array (
    'name' => 'ParentRegistration',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
      ),
    ),
  ),
  'paypal' => 
  array (
    'client_id' => 'AaCPtpoUHZEXCa3v006nbYhYfD0HIX-dlgYWlsb0fdoFqpVToATuUbT43VuUE6pAxgvSbPTspKBqAF0x',
    'secret' => 'EJ6q4h8w0OanYO1WKtNbo9o8suDg6PKUkHNKv-T6F4APDiq2e19OZf7DfpL5uOlEzJ_AMgeE0L2PtTEj',
    'settings' => 
    array (
      'mode' => 'sandbox',
      'http.ConnectionTimeOut' => 30,
      'log.LogEnabled' => true,
      'log.FileName' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage/logs/paypal.log',
      'log.LogLevel' => 'ERROR',
    ),
  ),
  'paystack' => 
  array (
    'publicKey' => 'pk_test_d85ff3d14475233d9da27df301185459f5d148b0',
    'secretKey' => 'sk_test_ee55a9b27d06843d868851a81362018d1aa9ff90',
    'paymentUrl' => 'https://api.paystack.co',
    'merchantEmail' => 'abiralo@gmail.com',
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'rolepermission' => 
  array (
    'name' => 'RolePermission',
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => 'sk_test_5KfzrcHprH1e5Hrt0Vhk7NSS00rFu57PND',
    ),
    'fcm' => 
    array (
      'key' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'infixedu_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'spondonit' => 
  array (
    'item_id' => '101101',
    'module_manager_model' => 'App\\InfixModuleManager',
    'module_manager_table' => 'infix_module_managers',
    'settings_model' => 'App\\SmGeneralSettings',
    'module_model' => 'Nwidart\\Modules\\Facades\\Module',
    'user_model' => 'App\\User',
    'settings_table' => 'sm_general_settings',
    'database_file' => 'infixeduV6.sql',
  ),
  'telescope' => 
  array (
    'domain' => NULL,
    'path' => 'telescope',
    'driver' => 'database',
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
      ),
    ),
    'enabled' => true,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'Laravel\\Telescope\\Http\\Middleware\\Authorize',
    ),
    'ignore_paths' => 
    array (
    ),
    'ignore_commands' => 
    array (
    ),
    'watchers' => 
    array (
      'Laravel\\Telescope\\Watchers\\CacheWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CommandWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\DumpWatcher' => true,
      'Laravel\\Telescope\\Watchers\\EventWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ExceptionWatcher' => true,
      'Laravel\\Telescope\\Watchers\\JobWatcher' => true,
      'Laravel\\Telescope\\Watchers\\LogWatcher' => true,
      'Laravel\\Telescope\\Watchers\\MailWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ModelWatcher' => 
      array (
        'enabled' => true,
        'events' => 
        array (
          0 => 'eloquent.*',
        ),
      ),
      'Laravel\\Telescope\\Watchers\\NotificationWatcher' => true,
      'Laravel\\Telescope\\Watchers\\QueryWatcher' => 
      array (
        'enabled' => true,
        'ignore_packages' => true,
        'slow' => 100,
      ),
      'Laravel\\Telescope\\Watchers\\RedisWatcher' => true,
      'Laravel\\Telescope\\Watchers\\RequestWatcher' => 
      array (
        'enabled' => true,
        'size_limit' => 64,
      ),
      'Laravel\\Telescope\\Watchers\\GateWatcher' => 
      array (
        'enabled' => true,
        'ignore_abilities' => 
        array (
        ),
        'ignore_packages' => true,
      ),
      'Laravel\\Telescope\\Watchers\\ScheduleWatcher' => true,
    ),
  ),
  'templatesettings' => 
  array (
    'name' => 'TemplateSettings',
  ),
  'textlocal' => 
  array (
    'key' => 'rghcuvdUML0-WSnvgevxlu2ptIANgeLh7vNluVSIco',
    'sender' => 'TXTLCL',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
  'toastr' => 
  array (
    'options' => 
    array (
      'closeButton' => false,
      'debug' => false,
      'newestOnTop' => false,
      'progressBar' => false,
      'positionClass' => 'toast-top-right',
      'preventDuplicates' => false,
      'onclick' => NULL,
      'showDuration' => '300',
      'hideDuration' => '1000',
      'timeOut' => '5000',
      'extendedTimeOut' => '1000',
      'showEasing' => 'swing',
      'hideEasing' => 'linear',
      'showMethod' => 'fadeIn',
      'hideMethod' => 'fadeOut',
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'twilio' => 
  array (
    'twilio' => 
    array (
      'default' => 'twilio',
      'connections' => 
      array (
        'twilio' => 
        array (
          'sid' => '',
          'token' => '',
          'from' => '',
        ),
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\Celestialcode\\infixEduV6.3.1\\storage\\framework\\views',
  ),
  'zoom' => 
  array (
    'api_key' => 'GsF_U_fzQyuqQ7bMDWBL9A',
    'api_secret' => 'l0B0jsyfAXSTAVkYIBF3Jg0DLhZG247ybhOG',
    'base_url' => 'https://api.zoom.us/v2/',
    'token_life' => 604800,
    'authentication_method' => 'jwt',
    'max_api_calls_per_request' => '5',
    'apiKey' => 'GsF_U_fzQyuqQ7bMDWBL9A',
    'apiSecret' => 'l0B0jsyfAXSTAVkYIBF3Jg0DLhZG247ybhOG',
    'baseUrl' => 'https://api.zoom.us/v2/',
  ),
  'bigbluebutton' => 
  array (
    'BBB_SECURITY_SALT' => '8cd8ef52e8e101574e400365b55e11a6',
    'BBB_SERVER_BASE_URL' => 'http://test-install.blindsidenetworks.com/bigbluebutton/',
    'servers' => 
    array (
      'server1' => 
      array (
        'BBB_SECURITY_SALT' => '',
        'BBB_SERVER_BASE_URL' => '',
      ),
      'server2' => 
      array (
        'BBB_SECURITY_SALT' => '',
        'BBB_SERVER_BASE_URL' => '',
      ),
    ),
    'create' => 
    array (
      'passwordLength' => 8,
      'welcomeMessage' => NULL,
      'dialNumber' => NULL,
      'maxParticipants' => 0,
      'logoutUrl' => NULL,
      'record' => false,
      'duration' => 0,
      'isBreakout' => false,
      'moderatorOnlyMessage' => NULL,
      'autoStartRecording' => false,
      'allowStartStopRecording' => true,
      'webcamsOnlyForModerator' => false,
      'logo' => NULL,
      'copyright' => NULL,
      'muteOnStart' => false,
      'lockSettingsDisableCam' => false,
      'lockSettingsDisableMic' => false,
      'lockSettingsDisablePrivateChat' => false,
      'lockSettingsDisablePublicChat' => false,
      'lockSettingsDisableNote' => false,
      'lockSettingsLockedLayout' => false,
      'lockSettingsLockOnJoin' => false,
      'lockSettingsLockOnJoinConfigurable' => false,
      'guestPolicy' => 'ALWAYS_ACCEPT',
    ),
    'join' => 
    array (
      'redirect' => true,
      'joinViaHtml5' => true,
    ),
    'getRecordings' => 
    array (
      'state' => 'any',
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'bulkprint' => 
  array (
    'name' => 'BulkPrint',
  ),
  'chat' => 
  array (
    'name' => 'Chat',
  ),
  'lesson' => 
  array (
    'name' => 'Lesson',
  ),
  'menumanage' => 
  array (
    'name' => 'MenuManage',
  ),
  'studentabsentnotification' => 
  array (
    'name' => 'StudentAbsentNotification',
  ),
  'xenditpayment' => 
  array (
    'name' => 'XenditPayment',
  ),
);
