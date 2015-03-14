<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemCommunicationBarringDigitPatternCriteriaAddRequest';
    protected $name              = null;
    protected $description       = null;
    protected $matchDigitPattern = null;

    public function __construct(
         $name,
         $description = null,
         $matchDigitPattern = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setMatchDigitPattern($matchDigitPattern);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return $this->name->getValue();
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
     * @return DigitPatternCriteriaDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setMatchDigitPattern($matchDigitPattern = null)
    {
        if (!$matchDigitPattern) return $this;
        $this->matchDigitPattern = ($matchDigitPattern InstanceOf DigitPattern)
             ? $matchDigitPattern
             : new DigitPattern($matchDigitPattern);
        $this->matchDigitPattern->setName('matchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $matchDigitPattern
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern->getValue();
    }
}
