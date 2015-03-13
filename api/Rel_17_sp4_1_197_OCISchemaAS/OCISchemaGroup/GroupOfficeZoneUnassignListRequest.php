<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Unassign a list of OfficeZones from a group.  Note: a new default must be provided if unassigning the current default.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOfficeZoneUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupOfficeZoneUnassignListRequest';
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $officeZoneName        = null;
    protected $defaultOfficeZoneName = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        if (!$officeZoneName) return $this;
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $officeZoneName
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName->getValue();
    }

    /**
     * 
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName = null)
    {
        if (!$defaultOfficeZoneName) return $this;
        $this->defaultOfficeZoneName = ($defaultOfficeZoneName InstanceOf OfficeZoneName)
             ? $defaultOfficeZoneName
             : new OfficeZoneName($defaultOfficeZoneName);
        $this->defaultOfficeZoneName->setName('defaultOfficeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $defaultOfficeZoneName
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName->getValue();
    }
}
