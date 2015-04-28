<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express SR Available In Office Settings used in the context of a get.
 */
class CommPilotExpressSRAvailableInOffice extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressSRAvailableInOffice';
    protected $busySetting;
    protected $noAnswerSetting;
    protected $incomingCallNotify;

    public function __construct(
         $busySetting = '',
         $noAnswerSetting = '',
         $incomingCallNotify = ''
    ) {
        $this->setBusySetting($busySetting);
        $this->setNoAnswerSetting($noAnswerSetting);
        $this->setIncomingCallNotify($incomingCallNotify);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBusySetting($busySetting = null)
    {
        $this->busySetting = new SimpleContent($busySetting);
        $this->busySetting->setElementName('busySetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $busySetting
     */
    public function getBusySetting()
    {
        return ($this->busySetting)
            ? $this->busySetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerSetting($noAnswerSetting = null)
    {
        $this->noAnswerSetting = new SimpleContent($noAnswerSetting);
        $this->noAnswerSetting->setElementName('noAnswerSetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $noAnswerSetting
     */
    public function getNoAnswerSetting()
    {
        return ($this->noAnswerSetting)
            ? $this->noAnswerSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
        $this->incomingCallNotify = new SimpleContent($incomingCallNotify);
        $this->incomingCallNotify->setElementName('incomingCallNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCallNotify
     */
    public function getIncomingCallNotify()
    {
        return ($this->incomingCallNotify)
            ? $this->incomingCallNotify->getElementValue()
            : null;
    }
}
