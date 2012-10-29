<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

define('OCI_PATH', realpath(dirname(__FILE__)));
define("OCI_URL", "http://example.com/webservice/services/ProvisioningService");
define("OCI_USER", "username");
define("OCI_PASS", "password");

require_once(OCI_PATH . "/corefactory.php");

// Include the schemas required for construction of OCIClient
CoreFactory::getOCISchemaLogin();
CoreFactory::getOCISchemaUser();

$errorControl = &CoreFactory::getErrorControl();
$OCIClient    = CoreFactory::getOCIClient();