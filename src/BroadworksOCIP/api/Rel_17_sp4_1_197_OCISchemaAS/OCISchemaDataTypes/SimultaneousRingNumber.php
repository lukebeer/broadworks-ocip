<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Simultaneous Ring number entry.
 */
class SimultaneousRingNumber extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SimultaneousRingNumber';
    protected $phoneNumber;
    protected $answerConfirmationRequired;

    public function __construct(
         $phoneNumber = '',
         $answerConfirmationRequired = ''
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
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = new SimpleContent($answerConfirmationRequired);
        $this->answerConfirmationRequired->setElementName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return ($this->answerConfirmationRequired)
            ? $this->answerConfirmationRequired->getElementValue()
            : null;
    }
}
