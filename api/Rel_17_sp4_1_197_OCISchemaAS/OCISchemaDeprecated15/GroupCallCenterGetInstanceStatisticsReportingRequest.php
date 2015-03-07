<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the call center statistics reporting settings.
 *         The response is either GroupCallCenterGetInstanceStatisticsReportingResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetInstanceStatisticsReportingRequest16
 */
class GroupCallCenterGetInstanceStatisticsReportingRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $serviceUserId  = null;

    public function __construct(
         $serviceUserId
    ) {
        $this->setServiceUserId($serviceUserId);
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
}
