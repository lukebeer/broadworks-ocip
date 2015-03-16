<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an entry in a group's common phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommonPhoneListModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCommonPhoneListModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $entryName;
    protected $newEntryName;
    protected $phoneNumber;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $entryName = '',
         $newEntryName = null,
         $phoneNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setEntryName($entryName);
        $this->setNewEntryName($newEntryName);
        $this->setPhoneNumber($phoneNumber);
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf PhoneListEntryName)
             ? $entryName
             : new PhoneListEntryName($entryName);
        $this->entryName->setName('entryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName $entryName
     */
    public function getEntryName()
    {
        return ($this->entryName) ? $this->entryName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewEntryName($newEntryName = null)
    {
        $this->newEntryName = ($newEntryName InstanceOf PhoneListEntryName)
             ? $newEntryName
             : new PhoneListEntryName($newEntryName);
        $this->newEntryName->setName('newEntryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName $newEntryName
     */
    public function getNewEntryName()
    {
        return ($this->newEntryName) ? $this->newEntryName->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDN)
             ? $phoneNumber
             : new OutgoingDN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }
}
