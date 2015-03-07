<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Call Center Call Disposition Code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterCallDispositionCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $code               = null;
    protected $isActive           = null;
    protected $description        = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $code,
         $isActive = null,
         $description = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCode($code);
        $this->setIsActive($isActive);
        $this->setDescription($description);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf CallDispositionCode)
             ? $code
             : new CallDispositionCode($code);
    }

    public function getCode()
    {
        return (!$this->code) ?: $this->code->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallDispositionCodeDescription)
             ? $description
             : new CallDispositionCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
