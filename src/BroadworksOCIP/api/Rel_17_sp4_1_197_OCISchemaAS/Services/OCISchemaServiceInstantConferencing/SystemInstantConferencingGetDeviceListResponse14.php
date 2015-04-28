<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemInstantConferencingGetDeviceListRequest14. The table column headings are: "Device Name",
 *         "Device Type", "Integrated" and "Cluster Net Address".
 */
class SystemInstantConferencingGetDeviceListResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInstantConferencingGetDeviceListResponse14';
    protected $instantConferencingDeviceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetDeviceListResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantConferencingDeviceTable(TableType $instantConferencingDeviceTable = null)
    {
        $this->instantConferencingDeviceTable = $instantConferencingDeviceTable;
        $this->instantConferencingDeviceTable->setElementName('instantConferencingDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInstantConferencingDeviceTable()
    {
        return $this->instantConferencingDeviceTable;
    }
}
