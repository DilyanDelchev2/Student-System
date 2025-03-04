<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'beyondcode/laravel-dump-server' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8864b9efcb48e0a79e83014dd7f0a5481f5c808f',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '265b8593498b997dc2d31e75b89f053b5cc9621a',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5527a48b7313d15261292c149e55e26eae771b0a',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a2c590166b2133a4633738648b6b064edae0814a',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1febd6c3ef84253d7c815bed85fc622ad207a9f8',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '72b6fbf76adb3cf5bc0db68559b33d41219aba27',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.10',
      'version' => '2.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a6c8d7101b19a451c1707b1b79bbbc56e4bdb7ec',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.3',
      'version' => '1.7.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6d893938171a817f4e9bc9e86f2da1e370b7bcd7',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.1.0',
      'version' => '4.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '177c79a2d1f9970f89ee2fb4c12b429af38b6dfb',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.4.1',
      'version' => '2.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fb502c23885701a991b0bba974b1a8eb6673577',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f72816b43e74063c8b10357394b6bba8cb1c10de',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '776503d3a8e85d4f9a1148614f95b7a608b046ad',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.8.29',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => 'v0.2',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd5deaecff52a0d61ccb613bb3804088da0307191',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.4',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f7a229a69d52506914b4bc61bfdb199d90c5547',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.8.29',
      'version' => '5.8.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '489ae2218c7eb138caac780de584d8df9fe8160b',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cafbf598a90acde68985660e79b2b03c5609a405',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.53',
      'version' => '1.0.53.0',
      'aliases' => 
      array (
      ),
      'reference' => '08e12b7628f035600634a5e76d95b5eb66cea674',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0eb0b48c3f07b3b89f5169ce005b7d05b18cf1d2',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72',
      'replaced' => 
      array (
        0 => '1.9.1',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.21.3',
      'version' => '2.21.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '58bdbbfab17ccd2ec7347b99e997f18232def4dc',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.2.2',
      'version' => '4.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1bd73cc04c3843ad8d6b0bfc0956026a151fc420',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'af42d339fe2742295a54f6fdd42aaa6f8c4aca68',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '92927e26d7fc3f271efe1f55bdbb073fbb2f0722',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.99',
      'version' => '9.99.99.0',
      'aliases' => 
      array (
      ),
      'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '4.3.1',
      'version' => '4.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '0.4.0',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c977708995954784726e25d0cd1dddf4e65b0f7',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '94e644f7d2051a5f0fcf77d81605f152eecff0ed',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1927e75f4ed19131ec9bcc3b002e07fb1173ee76',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '6.1.4',
      'version' => '6.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '050bedf145a257b1ff02746c31894800e5122946',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1038454804406b0b5f5f520358e78c1c2f71501e',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4a66b97f040e3e20b3aa2a243230a1c3a9f7c8c',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '7.5.14',
      'version' => '7.5.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '2834789aeb9ac182ad69bfdf9ae91856a59945ff',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
        1 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.9.9',
      'version' => '0.9.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '9aaf29575bb8293206bb0420c1e1c87ff2ffa94e',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd09ea80159c1929d75b3f9c60504d613aeb4a1e3',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.8.0',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.2',
      'version' => '4.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '234199f4528de6d12aaa58b612e98f7d36adb937',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7cfd9e65d11ffb5af41198476395774d4c8a84c5',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '773f97c67f28de00d397be301821b06708fca0be',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.1',
      'version' => '6.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5397cd05b0a0f7937c47b0adcb4c60e5ab936b6a',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b592b26a24265a35172d8a2094d8b10f22b7cc39',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '105c98bb0c5d8635bea056135304bd8edcc42b4d',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd8f4fb38152e0eb6a433705e5f661d25b32c5fcd',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd257021c1ab28d48d24a16de79dfab445ce93398',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c61766f4440ca687de1084a5c00b08e167a2575c',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '33c21f7d5d3dc8a140c282854a7e13aeb5d0f91a',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e1b507fcfa4e87d192281774b5ecd4265370180d',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4150f71e27ed37a74700561b77e3dbd754cbb44d',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec2c5565de60e03f33d4296a655e3273f0ad1f8b',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '82ebae02209c21113908c229e9883c419720738a',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f037ea22acfaee983e271dd9c3b8bb4150bd8ad7',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c766e95bec706cdd89903b1eda8afab7d7a6b7af',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5e94c604826c35a32fa832f35bd036b6799609',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab50dcf166d5f577978419edd37aa2bb8eabce0c',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1fb4abcc0c47be136208ad9d68bf59f1ee17abd',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '856d35814cf287480465bb7a6c413bb7f5f5e69c',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ef809021d72071c611b218c47a3bf3b17b7325e',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '934ab1d18545149e012aa898cf02e9f23790f7a0',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v1.1.5',
      'version' => '1.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb4b18ad7b92a26e83b65dde940fab78339e6f3c',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.3.2',
      'version' => '4.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '45d6ef73671995aca565a1aa3d9a432a3ea63f91',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ed4a2ea4e0902dac0489e6436ebcd5bbcae9757',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v3.4.0',
      'version' => '3.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5084b23845c24dbff8ac6c204290c341e4776c92',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '83e253c8e0be5b0257b881e1827274667c5c17a9',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
