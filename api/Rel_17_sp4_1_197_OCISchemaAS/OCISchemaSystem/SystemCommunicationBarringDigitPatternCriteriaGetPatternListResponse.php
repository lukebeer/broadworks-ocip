<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    protected $matchDigitPattern = null;

    /**
     * @return SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return DigitPattern
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern->getValue();
    }
}
