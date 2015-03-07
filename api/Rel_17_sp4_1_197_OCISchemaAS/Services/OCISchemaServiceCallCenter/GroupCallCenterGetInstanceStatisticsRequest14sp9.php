<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse14sp9 or ErrorResponse.
 */
class GroupCallCenterGetInstanceStatisticsRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $serviceUserId    = null;
    protected $statisticsRange  = null;

    public function __construct(
         $serviceUserId,
         CallCenterStatisticsRange $statisticsRange
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setStatisticsRange($statisticsRange);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
    }

    public function getStatisticsRange()
    {
        return (!$this->statisticsRange) ?: $this->statisticsRange->value();
    }
}
