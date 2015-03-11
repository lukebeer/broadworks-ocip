<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOfficeModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Available In Office Settings.
 */
class CommPilotExpressAvailableInOfficeModify extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableInOfficeModify';
    public    $name                        = 'CommPilotExpressAvailableInOfficeModify';
    protected $additionalPhoneNumberToRing = null;
    protected $busySetting                 = null;
    protected $noAnswerSetting             = null;

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
     * @return CommPilotExpressAvailableInOfficeModify
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
        if (!$additionalPhoneNumberToRing) return $this;
        $this->additionalPhoneNumberToRing = new SimpleContent($additionalPhoneNumberToRing);
        $this->additionalPhoneNumberToRing->setName('additionalPhoneNumberToRing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return $this->additionalPhoneNumberToRing->getValue();
    }

    /**
     * 
     */
    public function setBusySetting($busySetting = null)
    {
        if (!$busySetting) return $this;
        $this->busySetting = new SimpleContent($busySetting);
        $this->busySetting->setName('busySetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBusySetting()
    {
        return $this->busySetting->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerSetting($noAnswerSetting = null)
    {
        if (!$noAnswerSetting) return $this;
        $this->noAnswerSetting = new SimpleContent($noAnswerSetting);
        $this->noAnswerSetting->setName('noAnswerSetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting->getValue();
    }
}
