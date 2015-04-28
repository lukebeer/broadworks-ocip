<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service provider, and group levels.
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse14 or
 *         ErrorResponse.
 */
class GroupAccessDeviceGetAvailableDetailListRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14';
    public    $elementName = 'GroupAccessDeviceGetAvailableDetailListRequest14';
    protected $serviceProviderId;
    protected $groupId;
    protected $isMusicOnHold;
    protected $onlyVideoCapable;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $isMusicOnHold = '',
         $onlyVideoCapable = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsMusicOnHold($isMusicOnHold);
        $this->setOnlyVideoCapable($onlyVideoCapable);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14 $response
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
    public function setIsMusicOnHold($isMusicOnHold = null)
    {
        $this->isMusicOnHold = new PrimitiveType($isMusicOnHold);
        $this->isMusicOnHold->setElementName('isMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $isMusicOnHold
     */
    public function getIsMusicOnHold()
    {
        return ($this->isMusicOnHold)
            ? $this->isMusicOnHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        $this->onlyVideoCapable = new PrimitiveType($onlyVideoCapable);
        $this->onlyVideoCapable->setElementName('onlyVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyVideoCapable
     */
    public function getOnlyVideoCapable()
    {
        return ($this->onlyVideoCapable)
            ? $this->onlyVideoCapable->getElementValue()
            : null;
    }
}
