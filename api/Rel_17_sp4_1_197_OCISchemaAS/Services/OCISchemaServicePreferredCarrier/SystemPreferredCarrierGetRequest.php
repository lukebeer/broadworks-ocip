<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the attributes of carrier.
 *         The response is either a SystemPreferreredCarrierGetResponse or an ErrorResponse.
 */
class SystemPreferredCarrierGetRequest extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $carrier  = null;

    public function __construct(
         $carrier
    ) {
        $this->setCarrier($carrier);
    }

    public function setCarrier($carrier = null)
    {
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
    }

    public function getCarrier()
    {
        return (!$this->carrier) ?: $this->carrier->value();
    }
}
