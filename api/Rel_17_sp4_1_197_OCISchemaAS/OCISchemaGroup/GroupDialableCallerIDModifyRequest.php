<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the groups Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useGroupCriteria=null,
             $nsScreeningFailurePolicy=null,
             DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder=null
    ) {
        $this->serviceProviderId        = new ServiceProviderId($serviceProviderId);
        $this->groupId                  = new GroupId($groupId);
        $this->useGroupCriteria         = $useGroupCriteria;
        $this->nsScreeningFailurePolicy = new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->criteriaPriorityOrder    = $criteriaPriorityOrder;
        $this->args                     = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseGroupCriteria($useGroupCriteria)
    {
        $useGroupCriteria and $this->useGroupCriteria = new xs:boolean($useGroupCriteria);
    }

    public function getUseGroupCriteria()
    {
        return (!$this->useGroupCriteria) ?: $this->useGroupCriteria->value();
    }

    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy)
    {
        $nsScreeningFailurePolicy and $this->nsScreeningFailurePolicy = new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
    }

    public function getNsScreeningFailurePolicy()
    {
        return (!$this->nsScreeningFailurePolicy) ?: $this->nsScreeningFailurePolicy->value();
    }

    public function setCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $criteriaPriorityOrder and $this->criteriaPriorityOrder = new DialableCallerIDCriteriaPriorityOrder($criteriaPriorityOrder);
    }

    public function getCriteriaPriorityOrder()
    {
        return (!$this->criteriaPriorityOrder) ?: $this->criteriaPriorityOrder->value();
    }
}
