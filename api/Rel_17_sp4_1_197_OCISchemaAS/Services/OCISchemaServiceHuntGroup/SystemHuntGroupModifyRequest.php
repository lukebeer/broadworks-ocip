<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\HuntGroupUniformCallDistributionPolicyScope;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemHuntGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $anonymousInsteadOfPrivateCLID       = null;
    protected $removeHuntGroupNameFromCLID         = null;
    protected $uniformCallDistributionPolicyScope  = null;

    public function __construct(
         $anonymousInsteadOfPrivateCLID = null,
         $removeHuntGroupNameFromCLID = null,
         $uniformCallDistributionPolicyScope = null
    ) {
        $this->setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID);
        $this->setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID);
        $this->setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    public function setAnonymousInsteadOfPrivateCLID(xs:boolean $anonymousInsteadOfPrivateCLID = null)
    {
    }

    public function getAnonymousInsteadOfPrivateCLID()
    {
        return (!$this->anonymousInsteadOfPrivateCLID) ?: $this->anonymousInsteadOfPrivateCLID->value();
    }

    public function setRemoveHuntGroupNameFromCLID(xs:boolean $removeHuntGroupNameFromCLID = null)
    {
    }

    public function getRemoveHuntGroupNameFromCLID()
    {
        return (!$this->removeHuntGroupNameFromCLID) ?: $this->removeHuntGroupNameFromCLID->value();
    }

    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf HuntGroupUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new HuntGroupUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    public function getUniformCallDistributionPolicyScope()
    {
        return (!$this->uniformCallDistributionPolicyScope) ?: $this->uniformCallDistributionPolicyScope->value();
    }
}
