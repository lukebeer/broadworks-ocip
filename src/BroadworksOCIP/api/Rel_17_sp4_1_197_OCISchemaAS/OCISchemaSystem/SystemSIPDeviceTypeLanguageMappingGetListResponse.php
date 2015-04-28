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
 * Response to SystemSIPDeviceTypeLanguageMappingGetListRequest.
 *         Contains a table of device type languages mapped to equivalent BroadWorks languages.
 *         The column headings are: "BroadWorks Language", "Device Language".
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeLanguageMappingGetListResponse';
    protected $deviceTypeLanguagesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeLanguageMappingGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeLanguagesTable(TableType $deviceTypeLanguagesTable = null)
    {
        $this->deviceTypeLanguagesTable = $deviceTypeLanguagesTable;
        $this->deviceTypeLanguagesTable->setElementName('deviceTypeLanguagesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceTypeLanguagesTable()
    {
        return $this->deviceTypeLanguagesTable;
    }
}
