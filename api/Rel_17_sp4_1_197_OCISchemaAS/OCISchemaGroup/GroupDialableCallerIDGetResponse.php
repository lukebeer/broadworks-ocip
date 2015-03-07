<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupDialableCallerIDGetRequest.
 *         The criteria tables column headings are "Active", "Name", "Description", Prefix Digits, Priority.
 */
class GroupDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $useGroupCriteria          = null;
    protected $nsScreeningFailurePolicy  = null;
    protected $criteriaTable             = null;


    public function setUseGroupCriteria(xs:boolean $useGroupCriteria = null)
    {
    }

    public function getUseGroupCriteria()
    {
        return (!$this->useGroupCriteria) ?: $this->useGroupCriteria->value();
    }

    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
    }

    public function getNsScreeningFailurePolicy()
    {
        return (!$this->nsScreeningFailurePolicy) ?: $this->nsScreeningFailurePolicy->value();
    }

    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
