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
 * CommPilot Express type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a get.
 */
class CommPilotExpressRedirectionWithException extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressRedirectionWithException';
    protected $sendCallsToVoiceMailExceptExcludedNumbers;
    protected $excludedPhoneNumber01;
    protected $excludedPhoneNumber02;
    protected $excludedPhoneNumber03;
    protected $forwardExcludedNumbersTo;

    public function __construct(
         $sendCallsToVoiceMailExceptExcludedNumbers = '',
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
     * @return mixed $response
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
        $this->sendCallsToVoiceMailExceptExcludedNumbers = new SimpleContent($sendCallsToVoiceMailExceptExcludedNumbers);
        $this->sendCallsToVoiceMailExceptExcludedNumbers->setName('sendCallsToVoiceMailExceptExcludedNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sendCallsToVoiceMailExceptExcludedNumbers
     */
    public function getSendCallsToVoiceMailExceptExcludedNumbers()
    {
        return ($this->sendCallsToVoiceMailExceptExcludedNumbers) ? $this->sendCallsToVoiceMailExceptExcludedNumbers->getValue() : null;
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber01($excludedPhoneNumber01 = null)
    {
        $this->excludedPhoneNumber01 = new SimpleContent($excludedPhoneNumber01);
        $this->excludedPhoneNumber01->setName('excludedPhoneNumber01');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $excludedPhoneNumber01
     */
    public function getExcludedPhoneNumber01()
    {
        return ($this->excludedPhoneNumber01) ? $this->excludedPhoneNumber01->getValue() : null;
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber02($excludedPhoneNumber02 = null)
    {
        $this->excludedPhoneNumber02 = new SimpleContent($excludedPhoneNumber02);
        $this->excludedPhoneNumber02->setName('excludedPhoneNumber02');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $excludedPhoneNumber02
     */
    public function getExcludedPhoneNumber02()
    {
        return ($this->excludedPhoneNumber02) ? $this->excludedPhoneNumber02->getValue() : null;
    }

    /**
     * 
     */
    public function setExcludedPhoneNumber03($excludedPhoneNumber03 = null)
    {
        $this->excludedPhoneNumber03 = new SimpleContent($excludedPhoneNumber03);
        $this->excludedPhoneNumber03->setName('excludedPhoneNumber03');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $excludedPhoneNumber03
     */
    public function getExcludedPhoneNumber03()
    {
        return ($this->excludedPhoneNumber03) ? $this->excludedPhoneNumber03->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo = null)
    {
        $this->forwardExcludedNumbersTo = new SimpleContent($forwardExcludedNumbersTo);
        $this->forwardExcludedNumbersTo->setName('forwardExcludedNumbersTo');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $forwardExcludedNumbersTo
     */
    public function getForwardExcludedNumbersTo()
    {
        return ($this->forwardExcludedNumbersTo) ? $this->forwardExcludedNumbersTo->getValue() : null;
    }
}
