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
 * Response to SystemCPEConfigGetFileServerListRequest14sp6. The table columns are:
 *         "Device Type", "File Repository Name", "Directory".
 */
class SystemCPEConfigGetFileServerListResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigGetFileServerListResponse14sp6';
    protected $fileServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigGetFileServerListResponse14sp6 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileServerTable(TableType $fileServerTable = null)
    {
        $this->fileServerTable = $fileServerTable;
        $this->fileServerTable->setElementName('fileServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getFileServerTable()
    {
        return $this->fileServerTable;
    }
}
