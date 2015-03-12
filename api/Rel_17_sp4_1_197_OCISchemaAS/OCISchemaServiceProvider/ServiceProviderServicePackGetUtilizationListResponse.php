<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackGetUtilizationListRequest.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The utilization table column headings are "Group", "Total Packs" and "Assigned".
 */
class ServiceProviderServicePackGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'ServiceProviderServicePackGetUtilizationListResponse';
    protected $servicePackName         = null;
    protected $serviceUtilizationTable = null;

    /**
     * @return ServiceProviderServicePackGetUtilizationListResponse
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
        if (!$servicePackName) return $this;
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setServiceUtilizationTable(TableType $serviceUtilizationTable = null)
    {
        if (!$serviceUtilizationTable) return $this;
        $this->serviceUtilizationTable = $serviceUtilizationTable;
        $this->serviceUtilizationTable->setName('serviceUtilizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceUtilizationTable()
    {
        return $this->serviceUtilizationTable->getValue();
    }
}
