<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupDialableCallerIDGetRequest.
 *         The criteria tables column headings are "Active", "Name", "Description", Prefix Digits, Priority.
 */
class GroupDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useGroupCriteria,
             $nsScreeningFailurePolicy,
             $criteriaTable
    ) {
        $this->useGroupCriteria         = $useGroupCriteria;
        $this->nsScreeningFailurePolicy = new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->criteriaTable            = $criteriaTable;
        $this->args                     = func_get_args();
    }

    public function setUseGroupCriteria($useGroupCriteria)
    {
        $useGroupCriteria and $this->useGroupCriteria = new xs:boolean($useGroupCriteria);
    }

    public function getUseGroupCriteria()
    {
        return (!$this->useGroupCriteria) ?: $this->useGroupCriteria->value();
    }

    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy)
    {
        $nsScreeningFailurePolicy and $this->nsScreeningFailurePolicy = new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
    }

    public function getNsScreeningFailurePolicy()
    {
        return (!$this->nsScreeningFailurePolicy) ?: $this->nsScreeningFailurePolicy->value();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
