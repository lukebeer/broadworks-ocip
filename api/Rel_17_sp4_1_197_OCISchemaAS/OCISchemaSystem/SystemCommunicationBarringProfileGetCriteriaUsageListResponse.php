<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemCommunicationBarringProfileGetCriteriaUsageListRequest.
 *         The response contains a table of system Communication Barring Profiles that
 *         use the specific Communication Barring Criteria. The column headings 
 *         are "Name" and "Description"
 */
class SystemCommunicationBarringProfileGetCriteriaUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $profileTable  = null;


    public function setProfileTable(core:OCITable $profileTable = null)
    {
    }

    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->value();
    }
}
