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
 * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 */
class SystemAccountingGetRadiusServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemAccountingGetRadiusServerListResponse';
    protected $radiusServerTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetRadiusServerListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRadiusServerTable(TableType $radiusServerTable = null)
    {
        if (!$radiusServerTable) return $this;
        $this->radiusServerTable = $radiusServerTable;
        $this->radiusServerTable->setName('radiusServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRadiusServerTable()
    {
        return $this->radiusServerTable;
    }
}
