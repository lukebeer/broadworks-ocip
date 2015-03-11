<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelThresholdReplacementList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of call center reporting service level threshold seconds that replaces a previously configured list.
 */
class CallCenterReportServiceLevelThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $responseType                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServiceLevelThresholdReplacementList';
    public    $name                         = 'CallCenterReportServiceLevelThresholdReplacementList';
    protected $serviceLevelThresholdSeconds = null;

    public function __construct(
         $serviceLevelThresholdSeconds = null
    ) {
        $this->setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds);
    }

    /**
     * @return CallCenterReportServiceLevelThresholdReplacementList
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
        if (!$serviceLevelThresholdSeconds) return $this;
        $this->serviceLevelThresholdSeconds = new SimpleContent($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceLevelThresholdSeconds()
    {
        return $this->serviceLevelThresholdSeconds->getValue();
    }
}
