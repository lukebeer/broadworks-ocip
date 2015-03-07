<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldSourceModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldModifyInstanceRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $serviceProviderId                   = null;
    protected $groupId                             = null;
    protected $department                          = null;
    protected $isActiveDuringCallHold              = null;
    protected $isActiveDuringCallPark              = null;
    protected $isActiveDuringBusyCampOn            = null;
    protected $source                              = null;
    protected $useAlternateSourceForInternalCalls  = null;
    protected $internalSource                      = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         DepartmentKey $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         MusicOnHoldSourceModify16 $source = null,
         $useAlternateSourceForInternalCalls = null,
         MusicOnHoldSourceModify16 $internalSource = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartment($department);
        $this->setIsActiveDuringCallHold($isActiveDuringCallHold);
        $this->setIsActiveDuringCallPark($isActiveDuringCallPark);
        $this->setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
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

    public function setDepartment(DepartmentKey $department = null)
    {
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setIsActiveDuringCallHold(xs:boolean $isActiveDuringCallHold = null)
    {
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark(xs:boolean $isActiveDuringCallPark = null)
    {
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setIsActiveDuringBusyCampOn(xs:boolean $isActiveDuringBusyCampOn = null)
    {
    }

    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->value();
    }

    public function setSource(MusicOnHoldSourceModify16 $source = null)
    {
    }

    public function getSource()
    {
        return (!$this->source) ?: $this->source->value();
    }

    public function setUseAlternateSourceForInternalCalls(xs:boolean $useAlternateSourceForInternalCalls = null)
    {
    }

    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->value();
    }

    public function setInternalSource(MusicOnHoldSourceModify16 $internalSource = null)
    {
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
