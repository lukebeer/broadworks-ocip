<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $alertAllLocationsForClickToDialCalls  = null;
    protected $alertAllLocationsForGroupPagingCalls  = null;
    protected $phoneNumberTable                      = null;


    public function setAlertAllLocationsForClickToDialCalls(xs:boolean $alertAllLocationsForClickToDialCalls = null)
    {
    }

    public function getAlertAllLocationsForClickToDialCalls()
    {
        return (!$this->alertAllLocationsForClickToDialCalls) ?: $this->alertAllLocationsForClickToDialCalls->value();
    }

    public function setAlertAllLocationsForGroupPagingCalls(xs:boolean $alertAllLocationsForGroupPagingCalls = null)
    {
    }

    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return (!$this->alertAllLocationsForGroupPagingCalls) ?: $this->alertAllLocationsForGroupPagingCalls->value();
    }

    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
    }

    public function getPhoneNumberTable()
    {
        return (!$this->phoneNumberTable) ?: $this->phoneNumberTable->value();
    }
}
