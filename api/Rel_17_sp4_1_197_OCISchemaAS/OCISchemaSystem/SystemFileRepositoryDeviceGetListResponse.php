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
 * Response to SystemFileRepositoryDeviceGetListRequest.
 *         Contains a table with column headings : "Name","Protocol", "Root Directory" in a row for each file repository.
 */
class SystemFileRepositoryDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemFileRepositoryDeviceGetListResponse';
    protected $fileRepositoryTable = null;

    /**
     * @return SystemFileRepositoryDeviceGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileRepositoryTable(TableType $fileRepositoryTable = null)
    {
        if (!$fileRepositoryTable) return $this;
        $this->fileRepositoryTable = $fileRepositoryTable;
        $this->fileRepositoryTable->setName('fileRepositoryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getFileRepositoryTable()
    {
        return $this->fileRepositoryTable;
    }
}
