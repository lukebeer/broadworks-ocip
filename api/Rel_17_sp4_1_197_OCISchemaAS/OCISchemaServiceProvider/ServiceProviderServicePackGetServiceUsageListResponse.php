<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
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
    public    $elementName = 'ServiceProviderServicePackGetServiceUsageListResponse';
    protected $serviceUsageTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUsageTable(TableType $serviceUsageTable = null)
    {
        $this->serviceUsageTable = $serviceUsageTable;
        $this->serviceUsageTable->setElementName('serviceUsageTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceUsageTable()
    {
        return $this->serviceUsageTable;
    }
}
