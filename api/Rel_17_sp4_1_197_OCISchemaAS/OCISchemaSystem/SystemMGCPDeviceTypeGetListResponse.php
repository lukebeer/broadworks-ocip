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
 * Response to SystemMGCPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 */
class SystemMGCPDeviceTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMGCPDeviceTypeGetListResponse';
    protected $deviceTypeTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMGCPDeviceTypeGetListResponse $response
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
