<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The response to a SystemCommunicationBarringDigitPatternCriteriaGetRequest.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringDigitPatternCriteriaGetResponse';
    protected $description;
    protected $digitPattern;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetResponse $response
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
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitPattern($digitPattern = null)
    {
        $this->digitPattern = ($digitPattern InstanceOf DigitPattern)
             ? $digitPattern
             : new DigitPattern($digitPattern);
        $this->digitPattern->setElementName('digitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $digitPattern
     */
    public function getDigitPattern()
    {
        return ($this->digitPattern)
            ? $this->digitPattern->getElementValue()
            : null;
    }
}
