<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EndpointType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular endpoint type.
 */
class SearchCriteriaExactEndpointType extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $endpointType
    ) {
        $this->endpointType = new EndpointType($endpointType);
        $this->args         = func_get_args();
    }

    public function setEndpointType($endpointType)
    {
        $endpointType and $this->endpointType = new EndpointType($endpointType);
    }

    public function getEndpointType()
    {
        return (!$this->endpointType) ?: $this->endpointType->value();
    }
}
