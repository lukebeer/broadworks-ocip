<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Attributes of the WebDav protocol when the file repository interface is using WebDav.
 */
class FileRepositoryProtocolWebDAV extends ComplexType implements ComplexInterface
{
    public    $elementName = 'FileRepositoryProtocolWebDAV';
    protected $secure;
    protected $netAddress;

    public function __construct(
         $secure = '',
         $netAddress = ''
    ) {
        $this->setSecure($secure);
        $this->setNetAddress($netAddress);
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
    public function setSecure($secure = null)
    {
        $this->secure = new SimpleContent($secure);
        $this->secure->setElementName('secure');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $secure
     */
    public function getSecure()
    {
        return ($this->secure)
            ? $this->secure->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = new SimpleContent($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }
}
