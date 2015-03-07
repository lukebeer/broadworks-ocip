<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentStatistics14sp9;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueStatistics14sp9;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains Call Center statistics.
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $statisticsRange  = null;
    protected $queueStatistics  = null;
    protected $agentStatistics  = null;


    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
    }

    public function getStatisticsRange()
    {
        return (!$this->statisticsRange) ?: $this->statisticsRange->value();
    }

    public function setQueueStatistics(CallCenterQueueStatistics14sp9 $queueStatistics = null)
    {
    }

    public function getQueueStatistics()
    {
        return (!$this->queueStatistics) ?: $this->queueStatistics->value();
    }

    public function setAgentStatistics(CallCenterAgentStatistics14sp9 $agentStatistics = null)
    {
    }

    public function getAgentStatistics()
    {
        return (!$this->agentStatistics) ?: $this->agentStatistics->value();
    }
}
