<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Simultaneous Ring number entry.
 */
class SimultaneousRingNumber extends ComplexType implements ComplexInterface
{
    public    $name                       = 'SimultaneousRingNumber';
    protected $phoneNumber                = null;
    protected $answerConfirmationRequired = null;

    public function __construct(
         $phoneNumber,
         $answerConfirmationRequired
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setAnswerConfirmationRequired($answerConfirmationRequired);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        if (!$answerConfirmationRequired) return $this;
        $this->answerConfirmationRequired = new SimpleContent($answerConfirmationRequired);
        $this->answerConfirmationRequired->setName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired->getValue();
    }
}
