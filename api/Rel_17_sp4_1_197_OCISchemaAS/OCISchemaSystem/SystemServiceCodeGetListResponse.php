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
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 */
class SystemServiceCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemServiceCodeGetListResponse';
    protected $serviceCodeTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceCodeTable(TableType $serviceCodeTable = null)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        $this->serviceCodeTable->setName('serviceCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable;
    }
}
