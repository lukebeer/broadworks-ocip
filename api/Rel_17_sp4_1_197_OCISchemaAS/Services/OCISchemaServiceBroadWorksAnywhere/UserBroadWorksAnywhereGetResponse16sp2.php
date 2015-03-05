<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $alertAllLocationsForClickToDialCalls,
             $alertAllLocationsForGroupPagingCalls,
             $phoneNumberTable
    ) {
        $this->alertAllLocationsForClickToDialCalls = $alertAllLocationsForClickToDialCalls;
        $this->alertAllLocationsForGroupPagingCalls = $alertAllLocationsForGroupPagingCalls;
        $this->phoneNumberTable                     = $phoneNumberTable;
        $this->args                                 = func_get_args();
    }

    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls)
    {
        $alertAllLocationsForClickToDialCalls and $this->alertAllLocationsForClickToDialCalls = new xs:boolean($alertAllLocationsForClickToDialCalls);
    }

    public function getAlertAllLocationsForClickToDialCalls()
    {
        return (!$this->alertAllLocationsForClickToDialCalls) ?: $this->alertAllLocationsForClickToDialCalls->value();
    }

    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls)
    {
        $alertAllLocationsForGroupPagingCalls and $this->alertAllLocationsForGroupPagingCalls = new xs:boolean($alertAllLocationsForGroupPagingCalls);
    }

    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return (!$this->alertAllLocationsForGroupPagingCalls) ?: $this->alertAllLocationsForGroupPagingCalls->value();
    }

    public function setPhoneNumberTable($phoneNumberTable)
    {
        $phoneNumberTable and $this->phoneNumberTable = new core:OCITable($phoneNumberTable);
    }

    public function getPhoneNumberTable()
    {
        return (!$this->phoneNumberTable) ?: $this->phoneNumberTable->value();
    }
}
