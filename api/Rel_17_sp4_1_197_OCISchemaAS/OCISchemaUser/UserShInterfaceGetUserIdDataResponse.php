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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserShInterfaceGetUserIdDataResponse';
    public    $name  = __CLASS__;
    protected $entry = null;


    /**
     * ShInterface User Id Data Entry.
     */
    public function setEntry(ShInterfaceUserIdDataEntry $entry = null)
    {
        $this->entry = ShInterfaceUserIdDataEntry $entry;
    }

    /**
     * ShInterface User Id Data Entry.
     */
    public function getEntry()
    {
        return (!$this->entry) ?: $this->entry->getValue();
    }
}
