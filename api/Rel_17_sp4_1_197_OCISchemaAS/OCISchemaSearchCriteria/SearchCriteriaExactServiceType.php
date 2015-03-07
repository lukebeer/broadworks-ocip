<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular fully specified service type.
 */
class SearchCriteriaExactServiceType extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $serviceType  = null;

    public function __construct(
         $serviceType
    ) {
        $this->setServiceType($serviceType);
    }

    public function setServiceType($serviceType = null)
    {
        $this->serviceType = ($serviceType InstanceOf ServiceType)
             ? $serviceType
             : new ServiceType($serviceType);
    }

    public function getServiceType()
    {
        return (!$this->serviceType) ?: $this->serviceType->value();
    }
}
