<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingGetChargingFunctionElementServerListResponse';
    protected $chargingFunctionElementServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetChargingFunctionElementServerListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setChargingFunctionElementServerTable(TableType $chargingFunctionElementServerTable = null)
    {
        $this->chargingFunctionElementServerTable = $chargingFunctionElementServerTable;
        $this->chargingFunctionElementServerTable->setElementName('chargingFunctionElementServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getChargingFunctionElementServerTable()
    {
        return $this->chargingFunctionElementServerTable;
    }
}
