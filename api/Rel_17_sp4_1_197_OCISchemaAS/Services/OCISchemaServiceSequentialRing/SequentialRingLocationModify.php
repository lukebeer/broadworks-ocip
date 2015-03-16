<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Sequential Ring Location.
 */
class SequentialRingLocationModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SequentialRingLocationModify';
    protected $phoneNumber;
    protected $numberOfRings;
    protected $answerConfirmationRequired;

    public function __construct(
         $phoneNumber = null,
         $numberOfRings = null,
         $answerConfirmationRequired = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setNumberOfRings($numberOfRings);
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
    public function setNumberOfRings($numberOfRings = null)
    {
        $this->numberOfRings = new SimpleContent($numberOfRings);
        $this->numberOfRings->setElementName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfRings
     */
    public function getNumberOfRings()
    {
        return ($this->numberOfRings)
            ? $this->numberOfRings->getElementValue()
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
