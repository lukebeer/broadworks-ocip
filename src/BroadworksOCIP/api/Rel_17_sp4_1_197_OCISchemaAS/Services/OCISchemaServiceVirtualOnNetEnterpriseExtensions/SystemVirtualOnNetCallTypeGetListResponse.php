<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemVirtualOnNetCallTypeGetListRequest.
 *         Contains a table with column headings: 
 *         "Virtual On-Net Call Type Name", "Virtual On-Net Call Type CDR Value" 
 *         in a row for each Virtual On-Net Call Type.
 */
class SystemVirtualOnNetCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemVirtualOnNetCallTypeGetListResponse';
    protected $virtualOnNetCallTypeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\SystemVirtualOnNetCallTypeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeTable(TableType $virtualOnNetCallTypeTable = null)
    {
        $this->virtualOnNetCallTypeTable = $virtualOnNetCallTypeTable;
        $this->virtualOnNetCallTypeTable->setElementName('virtualOnNetCallTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getVirtualOnNetCallTypeTable()
    {
        return $this->virtualOnNetCallTypeTable;
    }
}
