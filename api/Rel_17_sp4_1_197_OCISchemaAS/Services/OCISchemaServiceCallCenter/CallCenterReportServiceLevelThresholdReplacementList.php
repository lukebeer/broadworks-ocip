<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of call center reporting service level threshold seconds that replaces a previously configured list.
 */
class CallCenterReportServiceLevelThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportServiceLevelThresholdReplacementList';
    protected $serviceLevelThresholdSeconds;

    public function __construct(
         $serviceLevelThresholdSeconds = null
    ) {
        $this->setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds);
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
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = new SimpleContent($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setElementName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceLevelThresholdSeconds
     */
    public function getServiceLevelThresholdSeconds()
    {
        return ($this->serviceLevelThresholdSeconds)
            ? $this->serviceLevelThresholdSeconds->getElementValue()
            : null;
    }
}
