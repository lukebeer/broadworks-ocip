<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAccessDeviceTypeGetEnhancedConfigurableListRequest.
 *         Contains a table with columns: "Access Device Type", "Enhanced Configuration Type", "Supports Reset".
 *         The "Enhanced Configuration Type" column contains one of the AccessDeviceEnhancedConfigurationType14
 *         enumerated values.
 *         The "Supports Reset" column is a boolean flag indicating the device can be remotely reset.
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceTypeGetEnhancedConfigurableListResponse';
    protected $deviceTypeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceTypeGetEnhancedConfigurableListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeTable(TableType $deviceTypeTable = null)
    {
        $this->deviceTypeTable = $deviceTypeTable;
        $this->deviceTypeTable->setElementName('deviceTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable;
    }
}
