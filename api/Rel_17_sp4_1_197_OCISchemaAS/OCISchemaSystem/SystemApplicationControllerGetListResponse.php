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
 * Response to the SystemApplicationControllerGetListRequest.
 *       Contains a table with column headings: "Name", "Subscriber Id", "Channel Set Id", "Status".
 *       The column values for "Status" can either be "ready" or "notReady".
 */
class SystemApplicationControllerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'SystemApplicationControllerGetListResponse';
    protected $applicationControllerTable = null;

    /**
     * @return SystemApplicationControllerGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationControllerTable(core:OCITable $applicationControllerTable = null)
    {
        if (!$applicationControllerTable) return $this;
        $this->applicationControllerTable->setName('applicationControllerTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getApplicationControllerTable()
    {
        return $this->applicationControllerTable->getValue();
    }
}
