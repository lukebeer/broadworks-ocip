<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP;


ini_set('display_errors', 1);
libxml_use_internal_errors(true);
error_reporting(E_ALL);
define('OCI_PATH', realpath(dirname(__FILE__)));
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
spl_autoload_register(function ($c) {
    @require_once preg_replace('#\\\|_(?!.*\\\)#', '/', $c) . '.php';
});
$errorControl = CoreFactory::getErrorControl();