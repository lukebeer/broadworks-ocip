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
 * User can either use it's group's preferred carrier or use it's own.
 *         The user carrier name is exposed if it was previously configured.
 */
class UserPreferredCarrierName extends ComplexType implements ComplexInterface
{
    public    $name = 'UserPreferredCarrierName';
    protected $useGroupPreferredCarrier;
    protected $carrier;

    public function __construct(
         $useGroupPreferredCarrier = '',
         $carrier = null
    ) {
        $this->setUseGroupPreferredCarrier($useGroupPreferredCarrier);
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
    public function setUseGroupPreferredCarrier($useGroupPreferredCarrier = null)
    {
        $this->useGroupPreferredCarrier = new SimpleContent($useGroupPreferredCarrier);
        $this->useGroupPreferredCarrier->setName('useGroupPreferredCarrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useGroupPreferredCarrier
     */
    public function getUseGroupPreferredCarrier()
    {
        return ($this->useGroupPreferredCarrier) ? $this->useGroupPreferredCarrier->getValue() : null;
    }

    /**
     * 
     */
    public function setCarrier($carrier = null)
    {
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
        return ($this->carrier) ? $this->carrier->getValue() : null;
    }
}
