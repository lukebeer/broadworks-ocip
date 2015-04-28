<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests information about the primary server for high-availability support.
 */
class PrimaryInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse';
    public    $elementName = 'PrimaryInfoGetRequest';
    protected $isPrivate;
    protected $isAddressInfoRequested;

    public function __construct(
         $isPrivate = '',
         $isAddressInfoRequested = ''
    ) {
        $this->setIsPrivate($isPrivate);
        $this->setIsAddressInfoRequested($isAddressInfoRequested);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Dual homed side is private?
     */
    public function setIsPrivate($isPrivate = null)
    {
        $this->isPrivate = new PrimitiveType($isPrivate);
        $this->isPrivate->setElementName('isPrivate');
        return $this;
    }

    /**
     * Dual homed side is private?
     * @return boolean $isPrivate
     */
    public function getIsPrivate()
    {
        return ($this->isPrivate)
            ? $this->isPrivate->getElementValue()
            : null;
    }

    /**
     * For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     */
    public function setIsAddressInfoRequested($isAddressInfoRequested = null)
    {
        $this->isAddressInfoRequested = new PrimitiveType($isAddressInfoRequested);
        $this->isAddressInfoRequested->setElementName('isAddressInfoRequested');
        return $this;
    }

    /**
     * For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     * @return boolean $isAddressInfoRequested
     */
    public function getIsAddressInfoRequested()
    {
        return ($this->isAddressInfoRequested)
            ? $this->isAddressInfoRequested->getElementValue()
            : null;
    }
}
