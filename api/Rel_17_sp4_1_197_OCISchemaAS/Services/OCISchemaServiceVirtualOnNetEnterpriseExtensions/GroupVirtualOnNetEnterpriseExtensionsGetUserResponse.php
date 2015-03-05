<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingLineIdLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupVirtualOnNetEnterpriseExtensionsGetUserRequest.
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $extension,
             $firstName,
             $lastName,
             $callingLineIdFirstName,
             $callingLineIdLastName,
             $virtualOnNetCallTypeName
    ) {
        $this->extension                = new Extension17($extension);
        $this->firstName                = new FirstName($firstName);
        $this->lastName                 = new LastName($lastName);
        $this->callingLineIdFirstName   = new CallingLineIdFirstName($callingLineIdFirstName);
        $this->callingLineIdLastName    = new CallingLineIdLastName($callingLineIdLastName);
        $this->virtualOnNetCallTypeName = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->args                     = func_get_args();
    }

    public function setExtension($extension)
    {
        $extension and $this->extension = new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setFirstName($firstName)
    {
        $firstName and $this->firstName = new FirstName($firstName);
    }

    public function getFirstName()
    {
        return (!$this->firstName) ?: $this->firstName->value();
    }

    public function setLastName($lastName)
    {
        $lastName and $this->lastName = new LastName($lastName);
    }

    public function getLastName()
    {
        return (!$this->lastName) ?: $this->lastName->value();
    }

    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $callingLineIdFirstName and $this->callingLineIdFirstName = new CallingLineIdFirstName($callingLineIdFirstName);
    }

    public function getCallingLineIdFirstName()
    {
        return (!$this->callingLineIdFirstName) ?: $this->callingLineIdFirstName->value();
    }

    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $callingLineIdLastName and $this->callingLineIdLastName = new CallingLineIdLastName($callingLineIdLastName);
    }

    public function getCallingLineIdLastName()
    {
        return (!$this->callingLineIdLastName) ?: $this->callingLineIdLastName->value();
    }

    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $virtualOnNetCallTypeName and $this->virtualOnNetCallTypeName = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->value();
    }
}
