<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify an existing Virtual On-Net user of a Group.
 *         The serviceProviderId, groupId and phoneNumber combination uniquely 
 *         identifies a Virtual On-Net User. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceProviderId        = null;
    protected $groupId                  = null;
    protected $phoneNumber              = null;
    protected $extension                = null;
    protected $firstName                = null;
    protected $lastName                 = null;
    protected $callingLineIdFirstName   = null;
    protected $callingLineIdLastName    = null;
    protected $virtualOnNetCallTypeName = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $phoneNumber,
         $extension = null,
         $firstName = null,
         $lastName = null,
         $callingLineIdFirstName = null,
         $callingLineIdLastName = null,
         $virtualOnNetCallTypeName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Extension.
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    /**
     * Extension.
     */
    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->getValue();
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->getValue();
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->getValue();
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = ($callingLineIdFirstName InstanceOf CallingLineIdFirstName)
             ? $callingLineIdFirstName
             : new CallingLineIdFirstName($callingLineIdFirstName);
    }

    /**
     * First Name for Calling Line Id Display.
     */
    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->getValue();
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = ($callingLineIdLastName InstanceOf CallingLineIdLastName)
             ? $callingLineIdLastName
             : new CallingLineIdLastName($callingLineIdLastName);
    }

    /**
     * Last Name for Calling Line Id Display.
     */
    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->getValue();
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = ($virtualOnNetCallTypeName InstanceOf VirtualOnNetCallTypeName)
             ? $virtualOnNetCallTypeName
             : new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->getValue();
    }
}
