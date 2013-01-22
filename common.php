<?php
ini_set('display_errors', 0);
libxml_use_internal_errors(true);
error_reporting(E_ALL);
define('OCI_PATH', realpath(dirname(__FILE__)));
require_once(OCI_PATH . '/corefactory.php');
require_once(OCI_PATH . '/factory.php');
require_once(OCI_PATH . '/helpers/numbering.php');
$errorControl = &CoreFactory::getErrorControl();