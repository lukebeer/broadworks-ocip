<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP;
require_once 'corefactory.php';

define('OCI_PATH', dirname(__DIR__));
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . PATH_SEPARATOR . OCI_PATH);
spl_autoload_register(function ($c) {
    require_once preg_replace('#\\\|_(?!.*\\\)#', '/', $c) . '.php';
});
$errorControl = CoreFactory::getErrorControl();