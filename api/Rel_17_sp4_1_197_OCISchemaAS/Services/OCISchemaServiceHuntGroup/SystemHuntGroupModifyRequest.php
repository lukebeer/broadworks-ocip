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
    public    $name                               = __CLASS__;
    protected $anonymousInsteadOfPrivateCLID      = null;
    protected $removeHuntGroupNameFromCLID        = null;
    protected $uniformCallDistributionPolicyScope = null;

    public function __construct(
         $anonymousInsteadOfPrivateCLID = null,
         $removeHuntGroupNameFromCLID = null,
         $uniformCallDistributionPolicyScope = null
    ) {
        $this->setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID);
        $this->setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID);
        $this->setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    /**
     * 
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID = null)
    {
        $this->anonymousInsteadOfPrivateCLID = (boolean) $anonymousInsteadOfPrivateCLID;
    }

    /**
     * 
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return (!$this->anonymousInsteadOfPrivateCLID) ?: $this->anonymousInsteadOfPrivateCLID->getValue();
    }

    /**
     * 
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID = null)
    {
        $this->removeHuntGroupNameFromCLID = (boolean) $removeHuntGroupNameFromCLID;
    }

    /**
     * 
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return (!$this->removeHuntGroupNameFromCLID) ?: $this->removeHuntGroupNameFromCLID->getValue();
    }

    /**
     * Hunt group Uniform Call Distribution Policy Scope.
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf HuntGroupUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new HuntGroupUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    /**
     * Hunt group Uniform Call Distribution Policy Scope.
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return (!$this->uniformCallDistributionPolicyScope) ?: $this->uniformCallDistributionPolicyScope->getValue();
    }
}
