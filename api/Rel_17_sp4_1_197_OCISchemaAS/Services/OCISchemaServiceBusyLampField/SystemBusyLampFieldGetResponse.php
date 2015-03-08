<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBusyLampField; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemBusyLampFieldGetRequest.
 */
class SystemBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $displayLocalUserIdentityLastNameFirst = null;


    /**
     * 
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst = null)
    {
        $this->displayLocalUserIdentityLastNameFirst = (boolean) $displayLocalUserIdentityLastNameFirst;
    }

    /**
     * 
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return (!$this->displayLocalUserIdentityLastNameFirst) ?: $this->displayLocalUserIdentityLastNameFirst->getValue();
    }
}
