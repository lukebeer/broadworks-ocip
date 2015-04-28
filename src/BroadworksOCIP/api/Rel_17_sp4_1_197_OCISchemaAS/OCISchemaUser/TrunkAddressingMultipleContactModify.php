<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Trunk group endpoint that can have multiple contacts.
 */
class TrunkAddressingMultipleContactModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TrunkAddressingMultipleContactModify';
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
