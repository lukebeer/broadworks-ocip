<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceTypeGetEnhancedConfigurableListRequest.
 *         Contains a table with columns: "Access Device Type", "Enhanced Configuration Type", "Supports Reset".
 *         The "Enhanced Configuration Type" column contains one of the AccessDeviceEnhancedConfigurationType14
 *         enumerated values.
 *         The "Supports Reset" column is a boolean flag indicating the device can be remotely reset.
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemAccessDeviceTypeGetEnhancedConfigurableListResponse';
    protected $deviceTypeTable = null;

    /**
     * @return SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
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
        if (!$deviceTypeTable) return $this;
        $this->deviceTypeTable = $deviceTypeTable;
        $this->deviceTypeTable->setName('deviceTypeTable');
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
