<?php return array (
  '*::app' => 
  array (
    'debug' => true,
    'name' => 'October CMS',
    'url' => 'octobercms.local',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => '45yAscMt62rDu2OC13jNpDylMxWLM1Cy',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'providers' => 
    array (
      0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Cookie\\CookieServiceProvider',
      4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      6 => 'Illuminate\\Hashing\\HashServiceProvider',
      7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      8 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      9 => 'Illuminate\\Queue\\QueueServiceProvider',
      10 => 'Illuminate\\Redis\\RedisServiceProvider',
      11 => 'Illuminate\\Session\\SessionServiceProvider',
      12 => 'Illuminate\\Validation\\ValidationServiceProvider',
      13 => 'Illuminate\\View\\ViewServiceProvider',
      14 => 'Laravel\\Tinker\\TinkerServiceProvider',
      15 => 'October\\Rain\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      16 => 'October\\Rain\\Database\\DatabaseServiceProvider',
      17 => 'October\\Rain\\Halcyon\\HalcyonServiceProvider',
      18 => 'October\\Rain\\Filesystem\\FilesystemServiceProvider',
      19 => 'October\\Rain\\Parse\\ParseServiceProvider',
      20 => 'October\\Rain\\Html\\HtmlServiceProvider',
      21 => 'October\\Rain\\Html\\UrlServiceProvider',
      22 => 'October\\Rain\\Network\\NetworkServiceProvider',
      23 => 'October\\Rain\\Scaffold\\ScaffoldServiceProvider',
      24 => 'October\\Rain\\Flash\\FlashServiceProvider',
      25 => 'October\\Rain\\Mail\\MailServiceProvider',
      26 => 'October\\Rain\\Argon\\ArgonServiceProvider',
      27 => 'System\\ServiceProvider',
      28 => 'Torann\\GeoIP\\GeoIPServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Db' => 'Illuminate\\Support\\Facades\\DB',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Url' => 'Illuminate\\Support\\Facades\\URL',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Model' => 'October\\Rain\\Database\\Model',
      'Block' => 'October\\Rain\\Support\\Facades\\Block',
      'File' => 'October\\Rain\\Support\\Facades\\File',
      'Config' => 'October\\Rain\\Support\\Facades\\Config',
      'Seeder' => 'October\\Rain\\Database\\Updates\\Seeder',
      'Flash' => 'October\\Rain\\Support\\Facades\\Flash',
      'Form' => 'October\\Rain\\Support\\Facades\\Form',
      'Html' => 'October\\Rain\\Support\\Facades\\Html',
      'Http' => 'October\\Rain\\Support\\Facades\\Http',
      'Str' => 'October\\Rain\\Support\\Facades\\Str',
      'Markdown' => 'October\\Rain\\Support\\Facades\\Markdown',
      'Yaml' => 'October\\Rain\\Support\\Facades\\Yaml',
      'Ini' => 'October\\Rain\\Support\\Facades\\Ini',
      'Twig' => 'October\\Rain\\Support\\Facades\\Twig',
      'DbDongle' => 'October\\Rain\\Support\\Facades\\DbDongle',
      'Schema' => 'October\\Rain\\Support\\Facades\\Schema',
      'Cms' => 'Cms\\Facades\\Cms',
      'Backend' => 'Backend\\Facades\\Backend',
      'BackendMenu' => 'Backend\\Facades\\BackendMenu',
      'BackendAuth' => 'Backend\\Facades\\BackendAuth',
      'AjaxException' => 'October\\Rain\\Exception\\AjaxException',
      'SystemException' => 'October\\Rain\\Exception\\SystemException',
      'ApplicationException' => 'October\\Rain\\Exception\\ApplicationException',
      'ValidationException' => 'October\\Rain\\Exception\\ValidationException',
      'GeoIP' => 'Torann\\GeoIP\\Facades\\GeoIP',
    ),
  ),
  '*::cms' => 
  array (
    'activeTheme' => 'demo',
    'edgeUpdates' => false,
    'backendUri' => 'backend',
    'backendForceSecure' => NULL,
    'backendForceRemember' => true,
    'backendTimezone' => 'UTC',
    'backendSkin' => 'Backend\\Skins\\Standard',
    'loadModules' => 
    array (
      0 => 'System',
      1 => 'Backend',
      2 => 'Cms',
    ),
    'disableCoreUpdates' => true,
    'disablePlugins' => 
    array (
    ),
    'enableRoutesCache' => false,
    'urlCacheTtl' => 10,
    'parsedPageCacheTTL' => 10,
    'enableAssetCache' => false,
    'enableAssetMinify' => NULL,
    'enableAssetDeepHashing' => NULL,
    'pluginsPath' => '/plugins',
    'themesPath' => '/themes',
    'storage' => 
    array (
      'uploads' => 
      array (
        'disk' => 'local',
        'folder' => 'uploads',
        'path' => '/storage/app/uploads',
      ),
      'media' => 
      array (
        'disk' => 'local',
        'folder' => 'media',
        'path' => '/storage/app/media',
      ),
    ),
    'convertLineEndings' => false,
    'linkPolicy' => 'detect',
    'defaultMask' => 
    array (
      'file' => NULL,
      'folder' => NULL,
    ),
    'enableSafeMode' => NULL,
    'enableCsrfProtection' => true,
    'forceBytecodeInvalidation' => true,
    'enableTwigStrictVariables' => false,
    'restrictBaseDir' => true,
  ),
  '*::image' => 
  array (
    'driver' => 'gd',
  ),
  '*::cache' => 
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
        'path' => '/home/tee/domains/homeschoolnetwork.org/public_html/storage/framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
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
        'connection' => 'default',
      ),
    ),
    'prefix' => 'october',
    'codeParserDataCacheKey' => 'cms-php-file-data',
    'disableRequestCache' => false,
  ),
  '*::view' => 
  array (
    'paths' => 
    array (
    ),
    'compiled' => '/home/tee/domains/homeschoolnetwork.org/public_html/storage/framework/views',
  ),
  '*::geoip' => 
  array (
    'log_failures' => true,
    'include_currency' => true,
    'service' => 'maxmind_database',
    'services' => 
    array (
      'maxmind_database' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\MaxMindDatabase',
        'database_path' => '/home/tee/domains/homeschoolnetwork.org/public_html/storage/app/geoip.mmdb',
        'update_url' => 'https://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz',
        'locales' => 
        array (
          0 => 'en',
        ),
      ),
      'maxmind_api' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\MaxMindWebService',
        'user_id' => NULL,
        'license_key' => NULL,
        'locales' => 
        array (
          0 => 'en',
        ),
      ),
      'ipapi' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\IPApi',
        'secure' => true,
        'key' => NULL,
        'continent_path' => '/home/tee/domains/homeschoolnetwork.org/public_html/storage/app/continents.json',
        'lang' => 'en',
      ),
      'ipgeolocation' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\IPGeoLocation',
        'secure' => true,
        'key' => NULL,
        'continent_path' => '/home/tee/domains/homeschoolnetwork.org/public_html/storage/app/continents.json',
        'lang' => 'en',
      ),
      'ipdata' => 
      array (
        'class' => 'Torann\\GeoIP\\Services\\IPData',
        'key' => NULL,
        'secure' => true,
      ),
    ),
    'cache' => 'none',
    'cache_tags' => NULL,
    'cache_expires' => 30,
    'default_location' => 
    array (
      'ip' => '127.0.0.0',
      'iso_code' => 'US',
      'country' => 'United States',
      'city' => 'New Haven',
      'state' => 'CT',
      'state_name' => 'Connecticut',
      'postal_code' => '06510',
      'lat' => 41.31,
      'lon' => -72.92,
      'timezone' => 'America/New_York',
      'continent' => 'NA',
      'default' => true,
      'currency' => 'USD',
    ),
  ),
  '*::lfm' => 
  array (
    'assets_directory' => '/themes/responsiv-flat/assets',
    'use_package_routes' => true,
    'middlewares' => 
    array (
      0 => 'web',
    ),
    'url_prefix' => 'laravel-filemanager',
    'allow_multi_user' => true,
    'allow_share_folder' => true,
    'user_field' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'base_directory' => 'storage',
    'images_folder_name' => 'photos',
    'files_folder_name' => 'files',
    'shared_folder_name' => 'shares',
    'thumb_folder_name' => 'thumbs',
    'images_startup_view' => 'grid',
    'files_startup_view' => 'list',
    'rename_file' => true,
    'alphanumeric_filename' => true,
    'alphanumeric_directory' => true,
    'should_validate_size' => false,
    'max_image_size' => 50000,
    'max_file_size' => 200000,
    'should_validate_mime' => false,
    'valid_image_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
      3 => 'image/gif',
      4 => 'image/svg+xml',
    ),
    'should_create_thumbnails' => true,
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'create_folder_mode' => 493,
    'create_file_mode' => 420,
    'should_change_file_mode' => true,
    'valid_file_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
      3 => 'image/gif',
      4 => 'image/svg+xml',
      5 => 'application/pdf',
      6 => 'text/plain',
    ),
    'thumb_img_width' => 180,
    'thumb_img_height' => 180,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'file_icon_array' => 
    array (
      'pdf' => 'fa-file-pdf-o',
      'doc' => 'fa-file-word-o',
      'docx' => 'fa-file-word-o',
      'xls' => 'fa-file-excel-o',
      'xlsx' => 'fa-file-excel-o',
      'zip' => 'fa-file-archive-o',
      'gif' => 'fa-file-image-o',
      'jpg' => 'fa-file-image-o',
      'jpeg' => 'fa-file-image-o',
      'png' => 'fa-file-image-o',
      'ppt' => 'fa-file-powerpoint-o',
      'pptx' => 'fa-file-powerpoint-o',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  '*::database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'storage/database.sqlite',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'database' => 'homeschool_db',
        'username' => 'homeschool_db',
        'password' => '7OJvmYjC',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => 5432,
        'database' => 'database',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => 1433,
        'database' => 'database',
        'username' => 'root',
        'password' => '',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'cluster' => false,
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
    ),
  ),
  '*::tinker' => 
  array (
    'dont_alias' => 
    array (
    ),
  ),
);
