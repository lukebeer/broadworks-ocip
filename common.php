<?php
// Userconfig
define("OCI_URL", "http://example.com/webservice/services/ProvisioningService");
define("OCI_USER", "username");
define("OCI_PASS", "password");
// End ^

ini_set('display_errors', 0);
libxml_use_internal_errors(true);
error_reporting(E_ALL);
define('OCI_PATH', realpath(dirname(__FILE__)));
require_once(OCI_PATH . "/corefactory.php");
require_once(OCI_PATH . "/factory.php");
Factory::getOCISchemaLogin();
Factory::getOCISchemaUser();
$errorControl = &CoreFactory::getErrorControl();
$OCIClient    = CoreFactory::getOCIClient();