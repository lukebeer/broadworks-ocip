<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallingLineIdGetRequest.
 *         The response contains the group's calling line id settings.
 */
class GroupCallingLineIdGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $useGroupNumber            = null;
    protected $useGroupName              = null;
    protected $callingLineIdPhoneNumber  = null;
    protected $callingLineIdName         = null;


    public function setUseGroupNumber(xs:boolean $useGroupNumber = null)
    {
    }

    public function getUseGroupNumber()
    {
        return (!$this->useGroupNumber) ?: $this->useGroupNumber->value();
    }

    public function setUseGroupName(xs:boolean $useGroupName = null)
    {
    }

    public function getUseGroupName()
    {
        return (!$this->useGroupName) ?: $this->useGroupName->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }

    public function setCallingLineIdName($callingLineIdName = null)
    {
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
    }

    public function getCallingLineIdName()
    {
        return (!$this->callingLineIdName) ?: $this->callingLineIdName->value();
    }
}
