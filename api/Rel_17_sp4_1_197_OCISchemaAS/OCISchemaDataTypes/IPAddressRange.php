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
 * IP Address Range.
 */
class IPAddressRange extends ComplexType implements ComplexInterface
{
    public    $name         = 'IPAddressRange';
    protected $minIpAddress = null;
    protected $maxIpAddress = null;

    public function __construct(
         $minIpAddress,
         $maxIpAddress
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
        if (!$minIpAddress) return $this;
        $this->minIpAddress = new SimpleContent($minIpAddress);
        $this->minIpAddress->setName('minIpAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minIpAddress
     */
    public function getMinIpAddress()
    {
        return $this->minIpAddress->getValue();
    }

    /**
     * 
     */
    public function setMaxIpAddress($maxIpAddress = null)
    {
        if (!$maxIpAddress) return $this;
        $this->maxIpAddress = new SimpleContent($maxIpAddress);
        $this->maxIpAddress->setName('maxIpAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxIpAddress
     */
    public function getMaxIpAddress()
    {
        return $this->maxIpAddress->getValue();
    }
}
