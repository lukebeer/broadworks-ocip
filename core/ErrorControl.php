<?php
class ErrorControl {
    var $errors = null;
    var $lastErrors = null;

    public function addError($error) {
        $this->errors[] = $error;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getLastError() {
        return $this->lastErrors;
    }

    public function clearLastError() {
        $this->lastErrors = null;
    }

    public function getErrorList($tabWidth) {
        if ($this->errors == null) return false;
        $html = "$tabWidth\t<ul>\n" .
            "$tabWidth\t\t<li>" .
            implode("</li>\n$tabWidth\t\t<li>", $this->errors) .
            "</li>\n$tabWidth\t</ul>\n";
        return $html;
    }

    public function hasErrors() {
        return ($this->errors != null);
    }

    public function getErrorHtml($tabWidthCount) {
        $tabWidth = (is_numeric($tabWidthCount)) ? str_repeat("\t", $tabWidthCount) : "";
        if ($this->errors != null) {
            $html  = "$tabWidth<div id=\"exceptions\">\n";
            $html .= "$tabWidth\t<h3>:: EXCEPTIONS ::</h3>\n";
            $html .= $this->getErrorList($tabWidth);
            $html .= "$tabWidth</div>\n";
            return $html;
        } else {
            return false;
        }
    }
}