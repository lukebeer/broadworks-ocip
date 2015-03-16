<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAliasGetListRequest. Contains the list of all network alias' for
 *         the Application Server.
 */
class SystemAliasGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAliasGetListResponse';
    protected $aliasNetAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAliasGetListResponse $response
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
