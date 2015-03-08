<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCommonPhoneListGetListRequest.
 *         The response contains the group's common phone list.
 */
class GroupCommonPhoneListGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse';
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
