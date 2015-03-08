<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the groups Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $useGroupCriteria         = null;
    protected $nsScreeningFailurePolicy = null;
    protected $criteriaPriorityOrder    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useGroupCriteria = null,
         $nsScreeningFailurePolicy = null,
          $criteriaPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseGroupCriteria($useGroupCriteria);
        $this->setNsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setUseGroupCriteria($useGroupCriteria = null)
    {
        $this->useGroupCriteria = (boolean) $useGroupCriteria;
    }

    /**
     * 
     */
    public function getUseGroupCriteria()
    {
        return (!$this->useGroupCriteria) ?: $this->useGroupCriteria->getValue();
    }

    /**
     * How the incomming caller ID should be displayed in the case of an NS screening failure
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
    }

    /**
     * How the incomming caller ID should be displayed in the case of an NS screening failure
     */
    public function getNsScreeningFailurePolicy()
    {
        return (!$this->nsScreeningFailurePolicy) ?: $this->nsScreeningFailurePolicy->getValue();
    }

    /**
     * Dialable Caller ID routing order
     */
    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
        $this->criteriaPriorityOrder =  $criteriaPriorityOrder;
    }

    /**
     * Dialable Caller ID routing order
     */
    public function getCriteriaPriorityOrder()
    {
        return (!$this->criteriaPriorityOrder) ?: $this->criteriaPriorityOrder->getValue();
    }
}
