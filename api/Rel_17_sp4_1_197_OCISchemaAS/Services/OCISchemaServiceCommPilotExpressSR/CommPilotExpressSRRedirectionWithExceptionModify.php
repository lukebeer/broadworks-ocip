<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRRedirectionWithExceptionModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a modify.
 */
class CommPilotExpressSRRedirectionWithExceptionModify extends ComplexType implements ComplexInterface
{
    public    $responseType                              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRRedirectionWithExceptionModify';
    public    $name                                      = 'CommPilotExpressSRRedirectionWithExceptionModify';
    protected $sendCallsToVoiceMailExceptExcludedNumbers = null;
    protected $excludedPhoneNumber01                     = null;
    protected $excludedPhoneNumber02                     = null;
    protected $excludedPhoneNumber03                     = null;
    protected $forwardExcludedNumbersTo                  = null;

    public function __construct(
         $sendCallsToVoiceMailExceptExcludedNumbers = null,
         $excludedPhoneNumber01 = null,
         $excludedPhoneNumber02 = null,
         $excludedPhoneNumber03 = null,
         $forwardExcludedNumbersTo = null
    ) {
        $this->setSendCallsToVoiceMailExceptExcludedNumbers($sendCallsToVoiceMailExceptExcludedNumbers);
        $this->setExcludedPhoneNumber01($excludedPhoneNumber01);
        $this->setExcludedPhoneNumber02($excludedPhoneNumber02);
        $this->setExcludedPhoneNumber03($excludedPhoneNumber03);
        $this->setForwardExcludedNumbersTo($forwardExcludedNumbersTo);
    }

    /**
     * @return CommPilotExpressSRRedirectionWithExceptionModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSendCallsToVoiceMailExceptExcludedNumbers($sendCallsToVoiceMailExceptExcludedNumbers = null)
    {
        if (!$sendCallsToVoiceMailExceptExcludedNumbers) return $this;
        $this->sendCallsToVoiceMailExceptExcludedNumbers = new SimpleContent($sendCallsToVoiceMailExceptExcludedNumbers);
        $this->sendCallsToVoiceMailExceptExcludedNumbers->setName('sendCallsToVoiceMailExceptExcludedNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSendCallsToVoiceMailExceptExcludedNumbers()
    {
        return $this->sendCallsToVoiceMailExceptExcludedNumbers->getValue();
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber01($excludedPhoneNumber01 = null)
    {
        if (!$excludedPhoneNumber01) return $this;
        $this->excludedPhoneNumber01 = new SimpleContent($excludedPhoneNumber01);
        $this->excludedPhoneNumber01->setName('excludedPhoneNumber01');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExcludedPhoneNumber01()
    {
        return $this->excludedPhoneNumber01->getValue();
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber02($excludedPhoneNumber02 = null)
    {
        if (!$excludedPhoneNumber02) return $this;
        $this->excludedPhoneNumber02 = new SimpleContent($excludedPhoneNumber02);
        $this->excludedPhoneNumber02->setName('excludedPhoneNumber02');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExcludedPhoneNumber02()
    {
        return $this->excludedPhoneNumber02->getValue();
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber03($excludedPhoneNumber03 = null)
    {
        if (!$excludedPhoneNumber03) return $this;
        $this->excludedPhoneNumber03 = new SimpleContent($excludedPhoneNumber03);
        $this->excludedPhoneNumber03->setName('excludedPhoneNumber03');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExcludedPhoneNumber03()
    {
        return $this->excludedPhoneNumber03->getValue();
    }

    /**
     * 
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo = null)
    {
        if (!$forwardExcludedNumbersTo) return $this;
        $this->forwardExcludedNumbersTo = new SimpleContent($forwardExcludedNumbersTo);
        $this->forwardExcludedNumbersTo->setName('forwardExcludedNumbersTo');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getForwardExcludedNumbersTo()
    {
        return $this->forwardExcludedNumbersTo->getValue();
    }
}
