<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldSourceModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupMusicOnHoldModifyInstanceRequest16
 */
class GroupMusicOnHoldModifyInstanceRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMusicOnHoldModifyInstanceRequest14sp6';
    protected $serviceProviderId;
    protected $groupId;
    protected $department;
    protected $isActiveDuringCallHold;
    protected $isActiveDuringCallPark;
    protected $isActiveDuringBusyCampOn;
    protected $source;
    protected $useAlternateSourceForInternalCalls;
    protected $internalSource;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         $source = null,
         $useAlternateSourceForInternalCalls = null,
         $internalSource = null
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setElementName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        $this->isActiveDuringCallHold = new PrimitiveType($isActiveDuringCallHold);
        $this->isActiveDuringCallHold->setElementName('isActiveDuringCallHold');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallHold
     */
    public function getIsActiveDuringCallHold()
    {
        return ($this->isActiveDuringCallHold)
            ? $this->isActiveDuringCallHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        $this->isActiveDuringCallPark = new PrimitiveType($isActiveDuringCallPark);
        $this->isActiveDuringCallPark->setElementName('isActiveDuringCallPark');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallPark
     */
    public function getIsActiveDuringCallPark()
    {
        return ($this->isActiveDuringCallPark)
            ? $this->isActiveDuringCallPark->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        $this->isActiveDuringBusyCampOn = new PrimitiveType($isActiveDuringBusyCampOn);
        $this->isActiveDuringBusyCampOn->setElementName('isActiveDuringBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringBusyCampOn
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return ($this->isActiveDuringBusyCampOn)
            ? $this->isActiveDuringBusyCampOn->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldSourceModify $source = null)
    {
        $this->source = ($source InstanceOf MusicOnHoldSourceModify)
             ? $source
             : new MusicOnHoldSourceModify($source);
        $this->source->setElementName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldSourceModify $source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        $this->useAlternateSourceForInternalCalls = new PrimitiveType($useAlternateSourceForInternalCalls);
        $this->useAlternateSourceForInternalCalls->setElementName('useAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useAlternateSourceForInternalCalls
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return ($this->useAlternateSourceForInternalCalls)
            ? $this->useAlternateSourceForInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldSourceModify $internalSource = null)
    {
        $this->internalSource = ($internalSource InstanceOf MusicOnHoldSourceModify)
             ? $internalSource
             : new MusicOnHoldSourceModify($internalSource);
        $this->internalSource->setElementName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldSourceModify $internalSource
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}
