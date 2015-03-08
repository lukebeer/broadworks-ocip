<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSelectiveCallAcceptance; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserSelectiveCallAcceptanceGetCriteriaRequest.
 *         The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserSelectiveCallAcceptanceGetCriteriaListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSelectiveCallAcceptance\UserSelectiveCallAcceptanceGetCriteriaListResponse';
    public    $name          = __CLASS__;
    protected $criteriaTable = null;


    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable = core:OCITable $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
