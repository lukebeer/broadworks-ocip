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
 * Response to SystemFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Get","Allow Delete","Allow Put" in a row for each file repository user.
 */
class SystemFileRepositoryDeviceUserGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFileRepositoryDeviceUserGetListResponse';
    protected $fileRepositoryUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileRepositoryUserTable(TableType $fileRepositoryUserTable = null)
    {
        $this->fileRepositoryUserTable = $fileRepositoryUserTable;
        $this->fileRepositoryUserTable->setElementName('fileRepositoryUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getFileRepositoryUserTable()
    {
        return $this->fileRepositoryUserTable;
    }
}
