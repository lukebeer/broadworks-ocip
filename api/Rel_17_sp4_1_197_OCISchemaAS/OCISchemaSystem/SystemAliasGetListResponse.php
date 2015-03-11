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
    public    $name            = 'SystemAliasGetListResponse';
    protected $aliasNetAddress = null;

    /**
     * @return SystemAliasGetListResponse
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
        if (!$aliasNetAddress) return $this;
        $this->aliasNetAddress = ($aliasNetAddress InstanceOf NetAddress)
             ? $aliasNetAddress
             : new NetAddress($aliasNetAddress);
        $this->aliasNetAddress->setName('aliasNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getAliasNetAddress()
    {
        return $this->aliasNetAddress->getValue();
    }
}
