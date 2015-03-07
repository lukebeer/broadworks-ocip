<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBusyLampField; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserBusyLampFieldGetRequest16sp2.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserBusyLampFieldGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $listURI                     = null;
    protected $enableCallParkNotification  = null;
    protected $monitoredUserTable          = null;


    public function setListURI($listURI = null)
    {
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
    }

    public function getListURI()
    {
        return (!$this->listURI) ?: $this->listURI->value();
    }

    public function setEnableCallParkNotification(xs:boolean $enableCallParkNotification = null)
    {
    }

    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->value();
    }

    public function setMonitoredUserTable(core:OCITable $monitoredUserTable = null)
    {
    }

    public function getMonitoredUserTable()
    {
        return (!$this->monitoredUserTable) ?: $this->monitoredUserTable->value();
    }
}
