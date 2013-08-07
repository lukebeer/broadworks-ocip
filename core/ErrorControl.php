<?php
class ErrorControl {
    var $errors = null;
    var $lastError = null;

    public function addError($error) {
        $this->errors[] = $error;
        $this->lastError = $error;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getLastError() {
        return $this->lastError;
    }

    public function clearLastError() {
        $this->lastError= null;
    }

    public function hasErrors() {
        return ($this->errors != null);
    }
}