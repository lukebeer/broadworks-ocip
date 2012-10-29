<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

define('OCI_PATH', realpath(dirname(__FILE__)));
define("OCI_USER", "username");
define("OCI_PASS", "password");
define("OCI_URL", "http://example.com/webservice/services/ProvisioningService");

require_once(OCI_PATH . "/corefactory.php");

CoreFactory::getOCISchemaLogin();
CoreFactory::getOCISchemaUser();

$errorControl = & CoreFactory::getErrorControl();
$OCIClient    = CoreFactory::getOCIClient();
$OCIBuilder   = CoreFactory::getOCIBuilder();