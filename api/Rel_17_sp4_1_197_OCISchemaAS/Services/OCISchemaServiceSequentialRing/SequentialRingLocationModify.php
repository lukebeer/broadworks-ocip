<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocationModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Sequential Ring Location.
 */
class SequentialRingLocationModify extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocationModify';
    public    $name                       = 'SequentialRingLocationModify';
    protected $phoneNumber                = null;
    protected $numberOfRings              = null;
    protected $answerConfirmationRequired = null;

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
     * @return SequentialRingLocationModify
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
     * @return SimpleContent
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setNumberOfRings($numberOfRings = null)
    {
        if (!$numberOfRings) return $this;
        $this->numberOfRings = new SimpleContent($numberOfRings);
        $this->numberOfRings->setName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings->getValue();
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
     * @return SimpleContent
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired->getValue();
    }
}
