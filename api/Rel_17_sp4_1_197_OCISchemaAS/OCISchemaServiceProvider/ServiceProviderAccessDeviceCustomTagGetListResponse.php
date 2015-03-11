<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "Tag Name", "Tag Value"
 */
class ServiceProviderAccessDeviceCustomTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'ServiceProviderAccessDeviceCustomTagGetListResponse';
    protected $deviceCustomTagsTable = null;

    /**
     * @return ServiceProviderAccessDeviceCustomTagGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceCustomTagsTable(core:OCITable $deviceCustomTagsTable = null)
    {
        if (!$deviceCustomTagsTable) return $this;
        $this->deviceCustomTagsTable->setName('deviceCustomTagsTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDeviceCustomTagsTable()
    {
        return $this->deviceCustomTagsTable->getValue();
    }
}
