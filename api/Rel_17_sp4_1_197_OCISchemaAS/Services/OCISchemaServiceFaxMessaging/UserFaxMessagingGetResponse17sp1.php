<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceFaxMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserFaxMessagingGetRequest17sp1.
 */
class UserFaxMessagingGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $isActive     = null;
    protected $phoneNumber  = null;
    protected $extension    = null;
    protected $alias        = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->value();
    }

    public function setAlias($alias = null)
    {
        $this->alias = ($alias InstanceOf SIPURI)
             ? $alias
             : new SIPURI($alias);
    }

    public function getAlias()
    {
        return (!$this->alias) ?: $this->alias->value();
    }
}
