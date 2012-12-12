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

    public static function getOCIBuilder($sessionId) {
        require_once(OCI_PATH . "/core/OCIBuilder.php");
        $instance = new OCIBuilder($sessionId);
        return $instance;
    }

    public static function getOCIClient($url) {
        require_once(OCI_PATH . "/core/OCIClient.php");
        $instance = new OCIClient($url);
        return $instance;
    }

    public static function getOCISession($url, $userId) {
        require_once(OCI_PATH . "/core/OCISession.php");
        $instance = new OCISession($url, $userId);
        return $instance;
    }
}