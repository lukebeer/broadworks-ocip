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
     * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 */
class ServiceProviderPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetListResponse';
    public    $name                        = __CLASS__;
    protected $serviceProviderCarrierTable = null;


    /**
     * 
     */
    public function setServiceProviderCarrierTable(core:OCITable $serviceProviderCarrierTable = null)
    {
        $this->serviceProviderCarrierTable = core:OCITable $serviceProviderCarrierTable;
    }

    /**
     * 
     */
    public function getServiceProviderCarrierTable()
    {
        return (!$this->serviceProviderCarrierTable) ?: $this->serviceProviderCarrierTable->getValue();
    }
}
