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
    public    $name            = __CLASS__;
    protected $statisticsRange = null;
    protected $queueStatistics = null;
    protected $agentStatistics = null;


    /**
     * Statistics Range
     */
    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
        $this->statisticsRange =  $statisticsRange;
    }

    /**
     * Statistics Range
     */
    public function getStatisticsRange()
    {
        return (!$this->statisticsRange) ?: $this->statisticsRange->getValue();
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function setQueueStatistics(CallCenterQueueStatistics14sp9 $queueStatistics = null)
    {
        $this->queueStatistics =  $queueStatistics;
    }

    /**
     * Contains Call Center Queue statistics.
     */
    public function getQueueStatistics()
    {
        return (!$this->queueStatistics) ?: $this->queueStatistics->getValue();
    }

    /**
     * Contains Call Center statistics for a specified agent.
     */
    public function setAgentStatistics(CallCenterAgentStatistics14sp9 $agentStatistics = null)
    {
        $this->agentStatistics =  $agentStatistics;
    }

    /**
     * Contains Call Center statistics for a specified agent.
     */
    public function getAgentStatistics()
    {
        return (!$this->agentStatistics) ?: $this->agentStatistics->getValue();
    }
}
