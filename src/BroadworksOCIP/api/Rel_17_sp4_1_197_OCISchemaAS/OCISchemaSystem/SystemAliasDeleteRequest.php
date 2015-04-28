<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a system-level Application Server alias from the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAliasDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAliasDeleteRequest';
    protected $aliasNetAddress;

    public function __construct(
         $aliasNetAddress = ''
    ) {
        $this->setAliasNetAddress($aliasNetAddress);
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
    public function setAliasNetAddress($aliasNetAddress = null)
    {
        $this->aliasNetAddress = ($aliasNetAddress InstanceOf NetAddress)
             ? $aliasNetAddress
             : new NetAddress($aliasNetAddress);
        $this->aliasNetAddress->setElementName('aliasNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $aliasNetAddress
     */
    public function getAliasNetAddress()
    {
        return ($this->aliasNetAddress)
            ? $this->aliasNetAddress->getElementValue()
            : null;
    }
}
