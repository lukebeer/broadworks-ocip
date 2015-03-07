<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserInstantConferencingGetAvailableConferenceOwnerListRequest.
 */
class UserInstantConferencingGetAvailableConferenceOwnerListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $bridge  = null;


    public function setBridge(InstantConferencingBridgeOwnerList $bridge = null)
    {
    }

    public function getBridge()
    {
        return (!$this->bridge) ?: $this->bridge->value();
    }
}
