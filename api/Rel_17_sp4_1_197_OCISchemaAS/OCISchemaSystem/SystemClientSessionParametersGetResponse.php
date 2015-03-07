<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ClientSessionTimeoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemClientSessionParametersGetRequest.
 *         Contains a list of system Client Session (web and CLI) parameters.
 */
class SystemClientSessionParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $enableInactivityTimeout   = null;
    protected $inactivityTimeoutMinutes  = null;


    public function setEnableInactivityTimeout(xs:boolean $enableInactivityTimeout = null)
    {
    }

    public function getEnableInactivityTimeout()
    {
        return (!$this->enableInactivityTimeout) ?: $this->enableInactivityTimeout->value();
    }

    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes = null)
    {
        $this->inactivityTimeoutMinutes = ($inactivityTimeoutMinutes InstanceOf ClientSessionTimeoutMinutes)
             ? $inactivityTimeoutMinutes
             : new ClientSessionTimeoutMinutes($inactivityTimeoutMinutes);
    }

    public function getInactivityTimeoutMinutes()
    {
        return (!$this->inactivityTimeoutMinutes) ?: $this->inactivityTimeoutMinutes->value();
    }
}
