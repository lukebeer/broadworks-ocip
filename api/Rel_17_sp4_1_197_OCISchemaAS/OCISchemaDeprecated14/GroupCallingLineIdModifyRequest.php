<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the calling line id settings for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallingLineIdModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupCallingLineIdModifyRequest';
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $useGroupNumber           = null;
    protected $useGroupName             = null;
    protected $callingLineIdPhoneNumber = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useGroupNumber = null,
         $useGroupName = null,
         $callingLineIdPhoneNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseGroupNumber($useGroupNumber);
        $this->setUseGroupName($useGroupName);
        $this->setCallingLineIdPhoneNumber($callingLineIdPhoneNumber);
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
    public function setUseGroupNumber($useGroupNumber = null)
    {
        if (!$useGroupNumber) return $this;
        $this->useGroupNumber = new PrimitiveType($useGroupNumber);
        $this->useGroupNumber->setName('useGroupNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupNumber
     */
    public function getUseGroupNumber()
    {
        return $this->useGroupNumber->getValue();
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        if (!$useGroupName) return $this;
        $this->useGroupName = new PrimitiveType($useGroupName);
        $this->useGroupName->setName('useGroupName');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupName
     */
    public function getUseGroupName()
    {
        return $this->useGroupName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if (!$callingLineIdPhoneNumber) return $this;
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber->getValue();
    }
}
