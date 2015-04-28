<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 */
class UserAccessDeviceTagsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAccessDeviceTagsGetResponse';
    protected $deviceTagsTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAccessDeviceTagsGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTagsTable(TableType $deviceTagsTable = null)
    {
        $this->deviceTagsTable = $deviceTagsTable;
        $this->deviceTagsTable->setElementName('deviceTagsTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceTagsTable()
    {
        return $this->deviceTagsTable;
    }
}
