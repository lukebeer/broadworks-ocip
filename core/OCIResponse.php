<?php
class OCIResponse {
    private $response = false;

    public function __construct($response) {
        $this->response = $response;
        if (preg_match('/SuccessResponse/', $this->response)) return $this->SuccessResponse();
        if (preg_match('/ErrorResponse/',   $this->response)) return $this->ErrorResponse();
        if (preg_match('/<command .*>(.*)<\/command>/', $this->response, $cmdResponse)) {
            $this->OCIResponse($cmdResponse[0]);
            return true;
        }
        return false;
    }

    private function SuccessResponse() {
        $this->response = true;
        return true;
    }

    private function ErrorResponse() {
        $errorControl = &CoreFactory::getErrorControl();
        if (preg_match('/<summaryEnglish>(.*)<\/summaryEnglish>/', $this->response, $summaryEnglish)) {
            $errorControl->addError($summaryEnglish[1]);
        }
        if (preg_match('/<detail>(.*)/', $this->response, $detail)) {
            $errorControl->addError($detail[1]);
        }
        $this->response = false;
        return false;
    }

    private function OCIResponse($cmdResponse) {
        $this->response = (object) json_decode(json_encode((array) simplexml_load_string($cmdResponse)), 1);
    }

    public function UnknownResponse() {
        $errorControl = &CoreFactory::getErrorControl();
        $errorControl->addError("Unable to parse: {$this->response}");
        $this->response = false;
        return null;
    }

    public function getResponse() {
        return $this->response;
    }
}