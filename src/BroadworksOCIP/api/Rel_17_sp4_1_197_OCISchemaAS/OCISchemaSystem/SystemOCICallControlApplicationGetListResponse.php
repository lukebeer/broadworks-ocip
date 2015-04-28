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
 * Response to SystemOCICallControlApplicationGetListRequest. The table columns are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification Timeout Seconds" and "Max Event Channels Per Set".
 */
class SystemOCICallControlApplicationGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCICallControlApplicationGetListResponse';
    protected $appTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCICallControlApplicationGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAppTable(TableType $appTable = null)
    {
        $this->appTable = $appTable;
        $this->appTable->setElementName('appTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAppTable()
    {
        return $this->appTable;
    }
}
