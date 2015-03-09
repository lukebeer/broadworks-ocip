<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceGetListResponse;
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
    public    $name                = __CLASS__;
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
    public function setFileRepositoryTable(core:OCITable $fileRepositoryTable = null)
    {
        $this->fileRepositoryTable =  $fileRepositoryTable;
    }

    /**
     * 
     */
    public function getFileRepositoryTable()
    {
        return (!$this->fileRepositoryTable) ?: $this->fileRepositoryTable->getValue();
    }
}
