<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceManagementTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System.
 *         The column headings are: "Tag Name", "Tag Value".
 */
class SystemDeviceManagementTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemDeviceManagementTagGetListResponse';
    protected $tagsTable = null;

    /**
     * @return SystemDeviceManagementTagGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTagsTable(core:OCITable $tagsTable = null)
    {
        if (!$tagsTable) return $this;
        $this->tagsTable->setName('tagsTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getTagsTable()
    {
        return $this->tagsTable->getValue();
    }
}
