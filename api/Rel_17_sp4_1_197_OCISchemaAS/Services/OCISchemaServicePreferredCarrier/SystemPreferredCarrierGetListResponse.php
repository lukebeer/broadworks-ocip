<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a SystemPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Carrier", "Country Code", "CIC", "Is Intra-Lata", "Is Inter-Lata", "Is International".
 *         The value in the "Is Intra-Lata", "Is Inter-Lata", and "Is International" columns is one of "true" or "false".
 */
class SystemPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $systemCarrierTable  = null;


    public function setSystemCarrierTable(core:OCITable $systemCarrierTable = null)
    {
    }

    public function getSystemCarrierTable()
    {
        return (!$this->systemCarrierTable) ?: $this->systemCarrierTable->value();
    }
}
