<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 */
class ServiceProviderPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderCarrierTable
    ) {
        $this->serviceProviderCarrierTable = $serviceProviderCarrierTable;
        $this->args                        = func_get_args();
    }

    public function setServiceProviderCarrierTable($serviceProviderCarrierTable)
    {
        $serviceProviderCarrierTable and $this->serviceProviderCarrierTable = new core:OCITable($serviceProviderCarrierTable);
    }

    public function getServiceProviderCarrierTable()
    {
        return (!$this->serviceProviderCarrierTable) ?: $this->serviceProviderCarrierTable->value();
    }
}
