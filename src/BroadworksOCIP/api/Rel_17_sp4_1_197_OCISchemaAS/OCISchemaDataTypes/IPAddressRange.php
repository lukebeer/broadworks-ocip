<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * IP Address Range.
 */
class IPAddressRange extends ComplexType implements ComplexInterface
{
    public    $elementName = 'IPAddressRange';
    protected $minIpAddress;
    protected $maxIpAddress;

    public function __construct(
         $minIpAddress = '',
         $maxIpAddress = ''
    ) {
        $this->setMinIpAddress($minIpAddress);
        $this->setMaxIpAddress($maxIpAddress);
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
    public function setMinIpAddress($minIpAddress = null)
    {
        $this->minIpAddress = new SimpleContent($minIpAddress);
        $this->minIpAddress->setElementName('minIpAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minIpAddress
     */
    public function getMinIpAddress()
    {
        return ($this->minIpAddress)
            ? $this->minIpAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxIpAddress($maxIpAddress = null)
    {
        $this->maxIpAddress = new SimpleContent($maxIpAddress);
        $this->maxIpAddress->setElementName('maxIpAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxIpAddress
     */
    public function getMaxIpAddress()
    {
        return ($this->maxIpAddress)
            ? $this->maxIpAddress->getElementValue()
            : null;
    }
}
