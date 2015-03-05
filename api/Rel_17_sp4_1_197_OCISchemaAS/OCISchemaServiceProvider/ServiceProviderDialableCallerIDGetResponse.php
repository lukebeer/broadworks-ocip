<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderDialableCallerIDGetRequest.
 *         The criteria table?s column headings are ?Active?, "Name", "Description", ?Prefix Digits?, and ?Priority?.
 */
class ServiceProviderDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useServiceProviderCriteria,
             $nsScreeningFailurePolicy,
             $criteriaTable
    ) {
        $this->useServiceProviderCriteria = $useServiceProviderCriteria;
        $this->nsScreeningFailurePolicy   = new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->criteriaTable              = $criteriaTable;
        $this->args                       = func_get_args();
    }

    public function setUseServiceProviderCriteria($useServiceProviderCriteria)
    {
        $useServiceProviderCriteria and $this->useServiceProviderCriteria = new xs:boolean($useServiceProviderCriteria);
    }

    public function getUseServiceProviderCriteria()
    {
        return (!$this->useServiceProviderCriteria) ?: $this->useServiceProviderCriteria->value();
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
