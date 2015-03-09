<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDomainGetAssignedServiceProviderListRequest.
 *         The table columns are: "Service Provider Id", "Service Provider Name" and "Is Enterprise".
 */
class SystemDomainGetAssignedServiceProviderListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderTable = null;

    /**
     * @return SystemDomainGetAssignedServiceProviderListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderTable(core:OCITable $serviceProviderTable = null)
    {
        $this->serviceProviderTable =  $serviceProviderTable;
    }

    /**
     * 
     */
    public function getServiceProviderTable()
    {
        return (!$this->serviceProviderTable) ?: $this->serviceProviderTable->getValue();
    }
}
