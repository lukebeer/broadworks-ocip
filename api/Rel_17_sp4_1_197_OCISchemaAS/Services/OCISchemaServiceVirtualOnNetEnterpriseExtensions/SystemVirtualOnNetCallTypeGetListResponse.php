<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemVirtualOnNetCallTypeGetListRequest.
 *         Contains a table with column headings: 
 *         "Virtual On-Net Call Type Name", "Virtual On-Net Call Type CDR Value" 
 *         in a row for each Virtual On-Net Call Type.
 */
class SystemVirtualOnNetCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = 'SystemVirtualOnNetCallTypeGetListResponse';
    protected $virtualOnNetCallTypeTable = null;

    /**
     * @return SystemVirtualOnNetCallTypeGetListResponse
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
        if (!$virtualOnNetCallTypeTable) return $this;
        $this->virtualOnNetCallTypeTable = $virtualOnNetCallTypeTable;
        $this->virtualOnNetCallTypeTable->setName('virtualOnNetCallTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getVirtualOnNetCallTypeTable()
    {
        return $this->virtualOnNetCallTypeTable->getValue();
    }
}
