<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 */
class UserAccessDeviceTagsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserAccessDeviceTagsGetResponse';
    protected $deviceTagsTable = null;

    /**
     * @return UserAccessDeviceTagsGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTagsTable(core:OCITable $deviceTagsTable = null)
    {
        if (!$deviceTagsTable) return $this;
        $this->deviceTagsTable->setName('deviceTagsTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDeviceTagsTable()
    {
        return $this->deviceTagsTable->getValue();
    }
}
