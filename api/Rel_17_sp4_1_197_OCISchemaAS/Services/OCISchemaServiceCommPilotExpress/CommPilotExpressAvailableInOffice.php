<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Available In Office Settings.
 */
class CommPilotExpressAvailableInOffice extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressAvailableInOffice';
    protected $additionalPhoneNumberToRing;
    protected $busySetting;
    protected $noAnswerSetting;

    public function __construct(
         $additionalPhoneNumberToRing = null,
         $busySetting = '',
         $noAnswerSetting = ''
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
