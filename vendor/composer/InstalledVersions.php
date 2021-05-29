<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'ba703a11fcf490a351447850a0db75eee96dd961',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'ba703a11fcf490a351447850a0db75eee96dd961',
    ),
    'guzzle/batch' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/common' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/guzzle' => 
    array (
      'pretty_version' => 'v3.9.3',
      'version' => '3.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0645b70d953bc1c067bbc8d5bc53194706b628d9',
    ),
    'guzzle/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/inflection' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/iterator' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/parser' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-async' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-backoff' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-curlauth' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-error-response' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-history' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-log' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-md5' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-mock' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/plugin-oauth' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/service' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'guzzle/stream' => 
    array (
      'replaced' => 
      array (
        0 => 'v3.9.3',
      ),
    ),
    'mailgun/mailgun-php' => 
    array (
      'pretty_version' => 'v1.7.2',
      'version' => '1.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '45ec0c8f3a2a6554b4987e97889f44991e4f75b4',
    ),
    'pear/http_request2' => 
    array (
      'pretty_version' => 'v2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd6c81670c504045248c1afdf896bb9a3288158de',
    ),
    'pear/net_url2' => 
    array (
      'pretty_version' => 'v2.2.2',
      'version' => '2.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '07fd055820dbf466ee3990abe96d0e40a8791f9d',
    ),
    'pear/pear_exception' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v5.2.8',
      'version' => '5.2.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd3802c597bff8f6c2ccfa3eab2a511aa01b8d68f',
    ),
    'sendgrid/php-http-client' => 
    array (
      'pretty_version' => '3.14.0',
      'version' => '3.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7880d5aecc53856802130ba83af1dfcf942e9767',
    ),
    'sendgrid/sendgrid' => 
    array (
      'pretty_version' => '7.9.2',
      'version' => '7.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab0023a6233f39e408b5eb8c4299f20790f5f5a7',
    ),
    'sendgrid/sendgrid-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'starkbank/ecdsa' => 
    array (
      'pretty_version' => '0.0.4',
      'version' => '0.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9369d35ed9019321adb4eb9fd3be21357d527c74',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v2.8.52',
      'version' => '2.8.52.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a77e974a5fecb4398833b0709210e3d5e334ffb0',
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
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
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
