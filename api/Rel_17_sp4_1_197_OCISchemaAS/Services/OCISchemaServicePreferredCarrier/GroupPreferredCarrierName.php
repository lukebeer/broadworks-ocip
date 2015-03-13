<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
 *         The group carrier name is exposed if it was previously configured.
 */
class GroupPreferredCarrierName extends ComplexType implements ComplexInterface
{
    public    $name                               = 'GroupPreferredCarrierName';
    protected $useServiceProviderPreferredCarrier = null;
    protected $carrier                            = null;

    public function __construct(
         $useServiceProviderPreferredCarrier,
         $carrier = null
    ) {
        $this->setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier);
        $this->setCarrier($carrier);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseServiceProviderPreferredCarrier($useServiceProviderPreferredCarrier = null)
    {
        if (!$useServiceProviderPreferredCarrier) return $this;
        $this->useServiceProviderPreferredCarrier = new SimpleContent($useServiceProviderPreferredCarrier);
        $this->useServiceProviderPreferredCarrier->setName('useServiceProviderPreferredCarrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useServiceProviderPreferredCarrier
     */
    public function getUseServiceProviderPreferredCarrier()
    {
        return $this->useServiceProviderPreferredCarrier->getValue();
    }

    /**
     * 
     */
    public function setCarrier($carrier = null)
    {
        if (!$carrier) return $this;
        $this->carrier = new SimpleContent($carrier);
        $this->carrier->setName('carrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $carrier
     */
    public function getCarrier()
    {
        return $this->carrier->getValue();
    }
}
