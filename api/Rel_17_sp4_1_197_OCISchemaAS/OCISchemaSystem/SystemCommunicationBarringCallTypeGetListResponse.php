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
 * Response to a SystemCommunicationBarringCallTypeGetListRequest. Contains a table with one row per Communication Barring Call Type.  The table column headings are: "Call Type" and "Network Server Call Type".
 */
class SystemCommunicationBarringCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'SystemCommunicationBarringCallTypeGetListResponse';
    protected $callTypeTable = null;

    /**
     * @return SystemCommunicationBarringCallTypeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallTypeTable(core:OCITable $callTypeTable = null)
    {
        if (!$callTypeTable) return $this;
        $this->callTypeTable->setName('callTypeTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getCallTypeTable()
    {
        return $this->callTypeTable->getValue();
    }
}
