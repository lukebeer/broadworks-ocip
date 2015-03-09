<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAccessDeviceFileGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAccessDeviceFileGetListRequest.
 *         Contains a table of user modifiable Device Management files.
 *         The column headings are: "File Format", "Template URL".
 */
class UserAccessDeviceFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $deviceFilesTable = null;

    /**
     * @return UserAccessDeviceFileGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceFilesTable(core:OCITable $deviceFilesTable = null)
    {
        $this->deviceFilesTable =  $deviceFilesTable;
    }

    /**
     * 
     */
    public function getDeviceFilesTable()
    {
        return (!$this->deviceFilesTable) ?: $this->deviceFilesTable->getValue();
    }
}
