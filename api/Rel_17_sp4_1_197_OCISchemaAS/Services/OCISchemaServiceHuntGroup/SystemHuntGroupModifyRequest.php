<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntGroupUniformCallDistributionPolicyScope;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemHuntGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $anonymousInsteadOfPrivateCLID=null,
             $removeHuntGroupNameFromCLID=null,
             $uniformCallDistributionPolicyScope=null
    ) {
        $this->anonymousInsteadOfPrivateCLID      = $anonymousInsteadOfPrivateCLID;
        $this->removeHuntGroupNameFromCLID        = $removeHuntGroupNameFromCLID;
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        $this->args                               = func_get_args();
    }

    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID)
    {
        $anonymousInsteadOfPrivateCLID and $this->anonymousInsteadOfPrivateCLID = new xs:boolean($anonymousInsteadOfPrivateCLID);
    }

    public function getAnonymousInsteadOfPrivateCLID()
    {
        return (!$this->anonymousInsteadOfPrivateCLID) ?: $this->anonymousInsteadOfPrivateCLID->value();
    }

    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID)
    {
        $removeHuntGroupNameFromCLID and $this->removeHuntGroupNameFromCLID = new xs:boolean($removeHuntGroupNameFromCLID);
    }

    public function getRemoveHuntGroupNameFromCLID()
    {
        return (!$this->removeHuntGroupNameFromCLID) ?: $this->removeHuntGroupNameFromCLID->value();
    }

    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope)
    {
        $uniformCallDistributionPolicyScope and $this->uniformCallDistributionPolicyScope = new HuntGroupUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    public function getUniformCallDistributionPolicyScope()
    {
        return (!$this->uniformCallDistributionPolicyScope) ?: $this->uniformCallDistributionPolicyScope->value();
    }
}
