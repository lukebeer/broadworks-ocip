<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express Available In Office Settings.
 */
class CommPilotExpressAvailableInOfficeModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressAvailableInOfficeModify';
    protected $additionalPhoneNumberToRing;
    protected $busySetting;
    protected $noAnswerSetting;

    public function __construct(
         $additionalPhoneNumberToRing = null,
         $busySetting = null,
         $noAnswerSetting = null
    ) {
        $this->setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing);
        $this->setBusySetting($busySetting);
        $this->setNoAnswerSetting($noAnswerSetting);
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
    public function setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing = null)
    {
        $this->additionalPhoneNumberToRing = new SimpleContent($additionalPhoneNumberToRing);
        $this->additionalPhoneNumberToRing->setElementName('additionalPhoneNumberToRing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $additionalPhoneNumberToRing
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return ($this->additionalPhoneNumberToRing)
            ? $this->additionalPhoneNumberToRing->getElementValue()
            : null;
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
}
