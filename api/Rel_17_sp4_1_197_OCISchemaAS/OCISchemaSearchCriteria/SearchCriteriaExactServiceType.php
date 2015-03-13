<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular fully specified service type.
 */
class SearchCriteriaExactServiceType extends ComplexType implements ComplexInterface
{
    public    $name        = 'SearchCriteriaExactServiceType';
    protected $serviceType = null;

    public function __construct(
         $serviceType
    ) {
        $this->setServiceType($serviceType);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceType($serviceType = null)
    {
        if (!$serviceType) return $this;
        $this->serviceType = ($serviceType InstanceOf ServiceType)
             ? $serviceType
             : new ServiceType($serviceType);
        $this->serviceType->setName('serviceType');
        return $this;
    }

    /**
     * 
     * @return ServiceType $serviceType
     */
    public function getServiceType()
    {
        return $this->serviceType->getValue();
    }
}
