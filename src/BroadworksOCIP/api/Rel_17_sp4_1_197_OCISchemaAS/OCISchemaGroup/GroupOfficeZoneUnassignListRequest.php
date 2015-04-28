<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Unassign a list of OfficeZones from a group.  Note: a new default must be provided if unassigning the current default.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOfficeZoneUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOfficeZoneUnassignListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $officeZoneName;
    protected $defaultOfficeZoneName;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $officeZoneName = null,
         $defaultOfficeZoneName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setOfficeZoneName($officeZoneName);
        $this->setDefaultOfficeZoneName($defaultOfficeZoneName);
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
    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setElementName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $officeZoneName
     */
    public function getOfficeZoneName()
    {
        return ($this->officeZoneName)
            ? $this->officeZoneName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName = null)
    {
        $this->defaultOfficeZoneName = ($defaultOfficeZoneName InstanceOf OfficeZoneName)
             ? $defaultOfficeZoneName
             : new OfficeZoneName($defaultOfficeZoneName);
        $this->defaultOfficeZoneName->setElementName('defaultOfficeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $defaultOfficeZoneName
     */
    public function getDefaultOfficeZoneName()
    {
        return ($this->defaultOfficeZoneName)
            ? $this->defaultOfficeZoneName->getElementValue()
            : null;
    }
}
