<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The response to a SystemCommunicationBarringDigitPatternCriteriaGetRequest.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'SystemCommunicationBarringDigitPatternCriteriaGetResponse';
    protected $description  = null;
    protected $digitPattern = null;

    /**
     * @return SystemCommunicationBarringDigitPatternCriteriaGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setDigitPattern($digitPattern = null)
    {
        if (!$digitPattern) return $this;
        $this->digitPattern = ($digitPattern InstanceOf DigitPattern)
             ? $digitPattern
             : new DigitPattern($digitPattern);
        $this->digitPattern->setName('digitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern
     */
    public function getDigitPattern()
    {
        return $this->digitPattern->getValue();
    }
}
