<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportServerChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportWebStatisticsSource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterEnhancedReportingGetRequest.
 */
class GroupCallCenterEnhancedReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $reportingServer,
             $webStatisticSource
    ) {
        $this->reportingServer    = $reportingServer;
        $this->webStatisticSource = $webStatisticSource;
        $this->args               = func_get_args();
    }

    public function setReportingServer($reportingServer)
    {
        $reportingServer and $this->reportingServer = new CallCenterReportServerChoice($reportingServer);
    }

    public function getReportingServer()
    {
        return (!$this->reportingServer) ?: $this->reportingServer->value();
    }

    public function setWebStatisticSource($webStatisticSource)
    {
        $webStatisticSource and $this->webStatisticSource = new CallCenterReportWebStatisticsSource($webStatisticSource);
    }

    public function getWebStatisticSource()
    {
        return (!$this->webStatisticSource) ?: $this->webStatisticSource->value();
    }
}
