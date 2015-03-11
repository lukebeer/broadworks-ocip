<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\TrunkAddressingMultipleContactRead;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Trunk group endpoint that can have multiple contacts.
 */
class TrunkAddressingMultipleContactRead extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\TrunkAddressingMultipleContactRead';
    public    $name                     = 'TrunkAddressingMultipleContactRead';
    protected $trunkGroupDeviceEndpoint = null;
    protected $enterpriseTrunkName      = null;
    protected $alternateTrunkIdentity   = null;

    public function __construct(
         $trunkGroupDeviceEndpoint = null,
         $enterpriseTrunkName = null,
         $alternateTrunkIdentity = null
    ) {
        $this->setTrunkGroupDeviceEndpoint($trunkGroupDeviceEndpoint);
        $this->setEnterpriseTrunkName($enterpriseTrunkName);
        $this->setAlternateTrunkIdentity($alternateTrunkIdentity);
    }

    /**
     * @return TrunkAddressingMultipleContactRead
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupDeviceEndpoint($trunkGroupDeviceEndpoint = null)
    {
        if (!$trunkGroupDeviceEndpoint) return $this;
        $this->trunkGroupDeviceEndpoint = new SimpleContent($trunkGroupDeviceEndpoint);
        $this->trunkGroupDeviceEndpoint->setName('trunkGroupDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return $this->trunkGroupDeviceEndpoint->getValue();
    }

    /**
     * 
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        if (!$enterpriseTrunkName) return $this;
        $this->enterpriseTrunkName = new SimpleContent($enterpriseTrunkName);
        $this->enterpriseTrunkName->setName('enterpriseTrunkName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName->getValue();
    }

    /**
     * 
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity = null)
    {
        if (!$alternateTrunkIdentity) return $this;
        $this->alternateTrunkIdentity = new SimpleContent($alternateTrunkIdentity);
        $this->alternateTrunkIdentity->setName('alternateTrunkIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAlternateTrunkIdentity()
    {
        return $this->alternateTrunkIdentity->getValue();
    }
}
