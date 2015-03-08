<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetChargingFunctionElementServerListResponse';
    public    $name                               = __CLASS__;
    protected $chargingFunctionElementServerTable = null;


    /**
     * 
     */
    public function setChargingFunctionElementServerTable(core:OCITable $chargingFunctionElementServerTable = null)
    {
        $this->chargingFunctionElementServerTable = core:OCITable $chargingFunctionElementServerTable;
    }

    /**
     * 
     */
    public function getChargingFunctionElementServerTable()
    {
        return (!$this->chargingFunctionElementServerTable) ?: $this->chargingFunctionElementServerTable->getValue();
    }
}
