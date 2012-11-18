<?php
class OCIResponse {
    private $response = null;

    public function __construct($response) {
        $this->response = $response;
        if (preg_match('/SuccessResponse/', $this->response)) return $this->SuccessResponse();
        if (preg_match('/ErrorResponse/',   $this->response)) return $this->ErrorResponse();
        if (preg_match('/<command .*>(.*)<\/command>/', $this->response, $cmdResponse)) return $this->OCIResponse($cmdResponse[0]);
        return false;
    }

    private function SuccessResponse() {
        return true;
    }

    private function ErrorResponse() {
        preg_match('/<summaryEnglish>(.*)<\/summaryEnglish>/', $this->response, $summaryEnglish);
        preg_match('/<detail>(.*)/', $this->response, $detail);
        $errorControl = &CoreFactory::getErrorControl();
        $errorControl->addError($summaryEnglish[1]);
        $errorControl->addError($detail[1]);
        return false;
    }

    private function OCIResponse($cmdResponse) {
        $this->response = json_decode(json_encode((array) simplexml_load_string($cmdResponse)), 1);
    }

    public function UnknownResponse() {
        $errorControl = &CoreFactory::getErrorControl();
        $errorControl->addError("Unable to parse: {$this->response}");
        return null;
    }

    public function getResponse() {
        return $this->response;
    }
}