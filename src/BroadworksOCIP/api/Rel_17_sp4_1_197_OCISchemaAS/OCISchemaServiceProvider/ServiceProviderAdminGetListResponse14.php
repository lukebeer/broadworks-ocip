<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderAdminGetListRequest14.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language".
 */
class ServiceProviderAdminGetListResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAdminGetListResponse14';
    protected $serviceProviderAdminTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAdminGetListResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderAdminTable(TableType $serviceProviderAdminTable = null)
    {
        $this->serviceProviderAdminTable = $serviceProviderAdminTable;
        $this->serviceProviderAdminTable->setElementName('serviceProviderAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceProviderAdminTable()
    {
        return $this->serviceProviderAdminTable;
    }
}
