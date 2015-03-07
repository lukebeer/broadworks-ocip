<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetListRequest.
 *         The response contains a table of all Digit Pattern Criteria defined for the service provider. The column headings are "Name" and "Description"
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $criteriaTable  = null;


    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
