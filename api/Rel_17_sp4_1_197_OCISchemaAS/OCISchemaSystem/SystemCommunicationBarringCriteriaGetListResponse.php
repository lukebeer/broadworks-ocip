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
     * Response to the SystemCommunicationBarringCriteriaGetListRequest.
 *         The response contains a table of all Communication Barring Criteria
 *         in the system. The column headings are "Name" and "Description".
 */
class SystemCommunicationBarringCriteriaGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringCriteriaGetListResponse';
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
