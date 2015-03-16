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
 * Add a system-level Application Server alias to the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAliasAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAliasAddRequest';
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
        $this->aliasNetAddress->setName('aliasNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $aliasNetAddress
     */
    public function getAliasNetAddress()
    {
        return ($this->aliasNetAddress) ? $this->aliasNetAddress->getValue() : null;
    }
}
