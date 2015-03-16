<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Trunk group endpoint.
 */
class TrunkAddressingAdd extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TrunkAddressingAdd';
    protected $trunkGroupDeviceEndpoint;
    protected $enterpriseTrunkName;
    protected $alternateTrunkIdentity;

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
     * @return mixed $response
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
        $this->trunkGroupDeviceEndpoint = new SimpleContent($trunkGroupDeviceEndpoint);
        $this->trunkGroupDeviceEndpoint->setElementName('trunkGroupDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroupDeviceEndpoint
     */
    public function getTrunkGroupDeviceEndpoint()
    {
        return ($this->trunkGroupDeviceEndpoint)
            ? $this->trunkGroupDeviceEndpoint->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        $this->enterpriseTrunkName = new SimpleContent($enterpriseTrunkName);
        $this->enterpriseTrunkName->setElementName('enterpriseTrunkName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enterpriseTrunkName
     */
    public function getEnterpriseTrunkName()
    {
        return ($this->enterpriseTrunkName)
            ? $this->enterpriseTrunkName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlternateTrunkIdentity($alternateTrunkIdentity = null)
    {
        $this->alternateTrunkIdentity = new SimpleContent($alternateTrunkIdentity);
        $this->alternateTrunkIdentity->setElementName('alternateTrunkIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateTrunkIdentity
     */
    public function getAlternateTrunkIdentity()
    {
        return ($this->alternateTrunkIdentity)
            ? $this->alternateTrunkIdentity->getElementValue()
            : null;
    }
}
