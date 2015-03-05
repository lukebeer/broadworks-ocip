<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueStatistics14sp9;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentStatistics14sp9;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains Call Center statistics.
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $statisticsRange,
             $queueStatistics,
             $agentStatistics=null
    ) {
        $this->statisticsRange = $statisticsRange;
        $this->queueStatistics = $queueStatistics;
        $this->agentStatistics = $agentStatistics;
        $this->args            = func_get_args();
    }

    public function setStatisticsRange($statisticsRange)
    {
        $statisticsRange and $this->statisticsRange = new CallCenterStatisticsRange($statisticsRange);
    }

    public function getStatisticsRange()
    {
        return (!$this->statisticsRange) ?: $this->statisticsRange->value();
    }

    public function setQueueStatistics($queueStatistics)
    {
        $queueStatistics and $this->queueStatistics = new CallCenterQueueStatistics14sp9($queueStatistics);
    }

    public function getQueueStatistics()
    {
        return (!$this->queueStatistics) ?: $this->queueStatistics->value();
    }

    public function setAgentStatistics($agentStatistics)
    {
        $agentStatistics and $this->agentStatistics = new CallCenterAgentStatistics14sp9($agentStatistics);
    }

    public function getAgentStatistics()
    {
        return (!$this->agentStatistics) ?: $this->agentStatistics->value();
    }
}
