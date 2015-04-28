<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUser;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupVirtualOnNetEnterpriseExtensionsAddUserRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $virtualOnNetUser;
    protected $virtualOnNetUserRange;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $virtualOnNetUser = null,
         $virtualOnNetUserRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVirtualOnNetUser($virtualOnNetUser);
        $this->setVirtualOnNetUserRange($virtualOnNetUserRange);
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
    public function setVirtualOnNetUser(VirtualOnNetUser $virtualOnNetUser = null)
    {
        $this->virtualOnNetUser = ($virtualOnNetUser InstanceOf VirtualOnNetUser)
             ? $virtualOnNetUser
             : new VirtualOnNetUser($virtualOnNetUser);
        $this->virtualOnNetUser->setElementName('virtualOnNetUser');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetUser $virtualOnNetUser
     */
    public function getVirtualOnNetUser()
    {
        return $this->virtualOnNetUser;
    }

    /**
     * 
     */
    public function setVirtualOnNetUserRange(VirtualOnNetUserRange $virtualOnNetUserRange = null)
    {
        $this->virtualOnNetUserRange = ($virtualOnNetUserRange InstanceOf VirtualOnNetUserRange)
             ? $virtualOnNetUserRange
             : new VirtualOnNetUserRange($virtualOnNetUserRange);
        $this->virtualOnNetUserRange->setElementName('virtualOnNetUserRange');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetUserRange $virtualOnNetUserRange
     */
    public function getVirtualOnNetUserRange()
    {
        return $this->virtualOnNetUserRange;
    }
}
