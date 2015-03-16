<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an entry from the external authentication access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExternalAuthenticationModifyACLEntryRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemExternalAuthenticationModifyACLEntryRequest';
    protected $netAddress;
    protected $description;

    public function __construct(
         $netAddress = '',
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
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
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkACLEntryDescription)
             ? $description
             : new NetworkACLEntryDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkACLEntryDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
