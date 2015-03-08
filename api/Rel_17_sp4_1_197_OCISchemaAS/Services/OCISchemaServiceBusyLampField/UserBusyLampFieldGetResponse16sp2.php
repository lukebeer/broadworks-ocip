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
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBusyLampField\UserBusyLampFieldGetResponse16sp2';
    public    $name                       = __CLASS__;
    protected $listURI                    = null;
    protected $enableCallParkNotification = null;
    protected $monitoredUserTable         = null;


    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setListURI($listURI = null)
    {
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getListURI()
    {
        return (!$this->listURI) ?: $this->listURI->getValue();
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        $this->enableCallParkNotification = (boolean) $enableCallParkNotification;
    }

    /**
     * 
     */
    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->getValue();
    }

    /**
     * 
     */
    public function setMonitoredUserTable(core:OCITable $monitoredUserTable = null)
    {
        $this->monitoredUserTable = core:OCITable $monitoredUserTable;
    }

    /**
     * 
     */
    public function getMonitoredUserTable()
    {
        return (!$this->monitoredUserTable) ?: $this->monitoredUserTable->getValue();
    }
}
