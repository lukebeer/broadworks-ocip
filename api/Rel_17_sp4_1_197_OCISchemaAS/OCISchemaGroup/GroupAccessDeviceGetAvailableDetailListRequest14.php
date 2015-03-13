<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service provider, and group levels.
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse14 or
 *         ErrorResponse.
 */
class GroupAccessDeviceGetAvailableDetailListRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14';
    public    $name              = 'GroupAccessDeviceGetAvailableDetailListRequest14';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $isMusicOnHold     = null;
    protected $onlyVideoCapable  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $isMusicOnHold,
         $onlyVideoCapable
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsMusicOnHold($isMusicOnHold);
        $this->setOnlyVideoCapable($onlyVideoCapable);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14 $response
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
    public function setIsMusicOnHold($isMusicOnHold = null)
    {
        if (!$isMusicOnHold) return $this;
        $this->isMusicOnHold = new PrimitiveType($isMusicOnHold);
        $this->isMusicOnHold->setName('isMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $isMusicOnHold
     */
    public function getIsMusicOnHold()
    {
        return $this->isMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        if (!$onlyVideoCapable) return $this;
        $this->onlyVideoCapable = new PrimitiveType($onlyVideoCapable);
        $this->onlyVideoCapable->setName('onlyVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyVideoCapable
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable->getValue();
    }
}
