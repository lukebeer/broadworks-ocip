<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldSourceAdd16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Music on Hold Instance to a department.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldAddInstanceRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             DepartmentKey $department,
             $isActiveDuringCallHold,
             $isActiveDuringCallPark,
             $isActiveDuringBusyCampOn,
             $source,
             $useAlternateSourceForInternalCalls,
             $internalSource=null
    ) {
        $this->serviceProviderId                  = new ServiceProviderId($serviceProviderId);
        $this->groupId                            = new GroupId($groupId);
        $this->department                         = $department;
        $this->isActiveDuringCallHold             = $isActiveDuringCallHold;
        $this->isActiveDuringCallPark             = $isActiveDuringCallPark;
        $this->isActiveDuringBusyCampOn           = $isActiveDuringBusyCampOn;
        $this->source                             = $source;
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        $this->internalSource                     = $internalSource;
        $this->args                               = func_get_args();
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

    public function setDepartment($department)
    {
        $department and $this->department = new DepartmentKey($department);
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $isActiveDuringCallHold and $this->isActiveDuringCallHold = new xs:boolean($isActiveDuringCallHold);
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $isActiveDuringCallPark and $this->isActiveDuringCallPark = new xs:boolean($isActiveDuringCallPark);
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $isActiveDuringBusyCampOn and $this->isActiveDuringBusyCampOn = new xs:boolean($isActiveDuringBusyCampOn);
    }

    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->value();
    }

    public function setSource($source)
    {
        $source and $this->source = new MusicOnHoldSourceAdd16($source);
    }

    public function getSource()
    {
        return (!$this->source) ?: $this->source->value();
    }

    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $useAlternateSourceForInternalCalls and $this->useAlternateSourceForInternalCalls = new xs:boolean($useAlternateSourceForInternalCalls);
    }

    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->value();
    }

    public function setInternalSource($internalSource)
    {
        $internalSource and $this->internalSource = new MusicOnHoldSourceAdd16($internalSource);
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
