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
     * Response to a ServiceProviderPreferredCarrierGetRequest.
 *         Contains the currently configured carriers for a specified country code for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;


    /**
     * Uniquely identifies a carrier.
     */
    public function setIntraLataCarrier($intraLataCarrier = null)
    {
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf PreferredCarrierName)
             ? $intraLataCarrier
             : new PreferredCarrierName($intraLataCarrier);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function setInterLataCarrier($interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf PreferredCarrierName)
             ? $interLataCarrier
             : new PreferredCarrierName($interLataCarrier);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function setInternationalCarrier($internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf PreferredCarrierName)
             ? $internationalCarrier
             : new PreferredCarrierName($internationalCarrier);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
