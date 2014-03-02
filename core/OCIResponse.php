<?php
class OCIResponse {
    private $response = false;

    public function __construct($response, $outputType) {
        $this->response = $response;
        if (preg_match('/SuccessResponse/', $this->response)) return $this->SuccessResponse();
        if (preg_match('/ErrorResponse/',   $this->response)) return $this->ErrorResponse();
        if (preg_match('/<command .*>(.*)<\/command>/', $this->response, $cmdResponse)) {
            $this->OCIResponse($cmdResponse[0], $outputType);
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

    private function OCIResponse($cmdResponse, $outputType) {
        switch ($outputType) {
            case OCIResponseOutput::STD:
                $this->response = (object) json_decode(json_encode((array) simplexml_load_string($cmdResponse)), 1);
                break;
            case OCIResponseOutput::XML:
                $this->response = $cmdResponse;
                break;
            case OCIResponseOutput::JSON:
                $this->response = json_encode(simplexml_load_string($cmdResponse), JSON_PRETTY_PRINT);
                break;
            case OCIResponseOutput::SIMPLEXML:
                $this->response = simplexml_load_string($cmdResponse);
                break;
        }
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