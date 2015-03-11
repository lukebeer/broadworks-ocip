<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierNameModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * User can either use it's group's preferred carrier or use it's own.
 *         You can use the group's preferred carrier without clearing the user carrier name --
 *         in this case, the user carrier name is retained.
 */
class UserPreferredCarrierNameModify extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierNameModify';
    public    $name                     = 'UserPreferredCarrierNameModify';
    protected $useGroupPreferredCarrier = null;
    protected $carrier                  = null;

    public function __construct(
         $useGroupPreferredCarrier,
         $carrier = null
    ) {
        $this->setUseGroupPreferredCarrier($useGroupPreferredCarrier);
        $this->setCarrier($carrier);
    }

    /**
     * @return UserPreferredCarrierNameModify
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
        if (!$useGroupPreferredCarrier) return $this;
        $this->useGroupPreferredCarrier = new SimpleContent($useGroupPreferredCarrier);
        $this->useGroupPreferredCarrier->setName('useGroupPreferredCarrier');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUseGroupPreferredCarrier()
    {
        return $this->useGroupPreferredCarrier->getValue();
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
     * @return SimpleContent
     */
    public function getCarrier()
    {
        return $this->carrier->getValue();
    }
}
