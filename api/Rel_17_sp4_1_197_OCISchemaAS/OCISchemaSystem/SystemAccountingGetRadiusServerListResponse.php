<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetRadiusServerListResponse;
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
    public    $name              = __CLASS__;
    protected $radiusServerTable = null;

    /**
     * @return SystemAccountingGetRadiusServerListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRadiusServerTable(core:OCITable $radiusServerTable = null)
    {
        $this->radiusServerTable =  $radiusServerTable;
    }

    /**
     * 
     */
    public function getRadiusServerTable()
    {
        return (!$this->radiusServerTable) ?: $this->radiusServerTable->getValue();
    }
}
