<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\ShInterfaceUserIdDataEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserShInterfaceGetUserIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified userId.
 *         The data also includes a userType, publicUserIdentity and endpointType.
 */
class UserShInterfaceGetUserIdDataResponse extends ComplexType implements ComplexInterface
{
    public    $name   = __CLASS__;
    protected $entry  = null;


    public function setEntry(ShInterfaceUserIdDataEntry $entry = null)
    {
    }

    public function getEntry()
    {
        return (!$this->entry) ?: $this->entry->value();
    }
}
