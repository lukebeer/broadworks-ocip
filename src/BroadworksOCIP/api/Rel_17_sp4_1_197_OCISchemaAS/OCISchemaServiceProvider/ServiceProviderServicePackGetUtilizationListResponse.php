<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderServicePackGetUtilizationListRequest.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The utilization table column headings are "Group", "Total Packs" and "Assigned".
 */
class ServiceProviderServicePackGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackGetUtilizationListResponse';
    protected $servicePackName;
    protected $serviceUtilizationTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetUtilizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceUtilizationTable(TableType $serviceUtilizationTable = null)
    {
        $this->serviceUtilizationTable = $serviceUtilizationTable;
        $this->serviceUtilizationTable->setElementName('serviceUtilizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceUtilizationTable()
    {
        return $this->serviceUtilizationTable;
    }
}
