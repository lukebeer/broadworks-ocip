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
        static $instance;
        if (!is_object($instance)) {
            $instance = new OCIBuilder($sessionId);
        }
        return $instance;
    }

    public static function getOCIClient($url, $user, $pass) {
        require_once(OCI_PATH . "/core/OCIClient.php");
        $instance = new OCIClient($url, $user, $pass, 4);
        return $instance;
    }

    public static function &getOCISession($url, $userId) {
        require_once(OCI_PATH . "/core/OCISession.php");
        static $instance;
        if (!is_object($instance)) {
            $instance = new OCISession($url, $userId);
        }
        return $instance;
    }
}