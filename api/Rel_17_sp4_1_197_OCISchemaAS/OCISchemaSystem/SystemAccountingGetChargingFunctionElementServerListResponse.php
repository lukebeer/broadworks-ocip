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
 * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name                               = 'SystemAccountingGetChargingFunctionElementServerListResponse';
    protected $chargingFunctionElementServerTable = null;

    /**
     * @return SystemAccountingGetChargingFunctionElementServerListResponse
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
        if (!$chargingFunctionElementServerTable) return $this;
        $this->chargingFunctionElementServerTable = $chargingFunctionElementServerTable;
        $this->chargingFunctionElementServerTable->setName('chargingFunctionElementServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getChargingFunctionElementServerTable()
    {
        return $this->chargingFunctionElementServerTable->getValue();
    }
}
