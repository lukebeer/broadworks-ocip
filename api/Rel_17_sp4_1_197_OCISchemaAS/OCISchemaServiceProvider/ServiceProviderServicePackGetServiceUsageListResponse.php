<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackGetServiceUsageListRequest.
 *         The column headings are "Service Pack Name", "Total Packs" and "Allocated to Groups"
 */
class ServiceProviderServicePackGetServiceUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceUsageTable = null;

    /**
     * @return ServiceProviderServicePackGetServiceUsageListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUsageTable(core:OCITable $serviceUsageTable = null)
    {
        $this->serviceUsageTable =  $serviceUsageTable;
    }

    /**
     * 
     */
    public function getServiceUsageTable()
    {
        return (!$this->serviceUsageTable) ?: $this->serviceUsageTable->getValue();
    }
}
