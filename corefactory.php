<?php
class CoreFactory {
    public static function &getErrorControl() {
        require_once(OCI_PATH . "/core/ErrorControl.php");
        static $instance;
        if (!is_object($instance)) {
            $instance = new ErrorControl();
        }
        return $instance;
    }

    public static function getOCIBuilder() {
        require_once(OCI_PATH . "/core/OCIBuilder.php");
        $instance = new OCIBuilder();
        return $instance;
    }

    public static function getOCIClient() {
        require_once(OCI_PATH . "/core/OCIClient.php");
        $instance = new OCIClient(OCI_URL, OCI_USER, OCI_PASS, CoreFactory::getErrorControl());
        return $instance;
    }

    public static function getOCISession($url, $userId) {
        require_once(OCI_PATH . "/core/OCISession.php");
        $instance = new OCISession($url, $userId);
        return $instance;
    }

    public static function getOCISchemaLogin() {
        require_once(OCI_PATH . "/api/OCISchemaAS/OCISchemaLogin.php");
    }

    public static function getOCISchemaUser() {
        require_once(OCI_PATH . "/api/OCISchemaAS/OCISchemaUser.php");
    }
}