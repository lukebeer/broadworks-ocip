<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallRecordingGetPlatformUsageRequest.
 *         The response contains a table with columns headings "Service Provider Id", "Group Id".
 */
class SystemCallRecordingGetPlatformUsageResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallRecordingGetPlatformUsageResponse';
    protected $groupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\SystemCallRecordingGetPlatformUsageResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        $this->groupTable = $groupTable;
        $this->groupTable->setElementName('groupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }
}
