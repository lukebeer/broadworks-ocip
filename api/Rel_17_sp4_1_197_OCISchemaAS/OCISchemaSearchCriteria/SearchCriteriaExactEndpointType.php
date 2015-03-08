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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactEndpointType';
    public    $name         = __CLASS__;
    protected $endpointType = null;

    public function __construct(
         $endpointType
    ) {
        $this->setEndpointType($endpointType);
    }

    /**
     * Types of Endpoints in Broadworks.
     */
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
    }

    /**
     * Types of Endpoints in Broadworks.
     */
    public function getEndpointType()
    {
        return (!$this->endpointType) ?: $this->endpointType->getValue();
    }
}
