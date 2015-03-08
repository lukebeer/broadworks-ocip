<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserPersonalPhoneListGetListRequest.
 *         The response contains a user's personal phone list.
 */
class UserPersonalPhoneListGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPersonalPhoneListGetListResponse';
    public    $name  = __CLASS__;
    protected $entry = null;


    /**
     * Phone list entry.
     */
    public function setEntry(PhoneListEntry $entry = null)
    {
        $this->entry = PhoneListEntry $entry;
    }

    /**
     * Phone list entry.
     */
    public function getEntry()
    {
        return (!$this->entry) ?: $this->entry->getValue();
    }
}
