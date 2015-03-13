<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemRoamingNetworkDeleteRequest';
    protected $mscAddress = null;

    public function __construct(
         $mscAddress
    ) {
        $this->setMscAddress($mscAddress);
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
    public function setMscAddress($mscAddress = null)
    {
        if (!$mscAddress) return $this;
        $this->mscAddress = ($mscAddress InstanceOf DN)
             ? $mscAddress
             : new DN($mscAddress);
        $this->mscAddress->setName('mscAddress');
        return $this;
    }

    /**
     * 
     * @return DN $mscAddress
     */
    public function getMscAddress()
    {
        return $this->mscAddress->getValue();
    }
}
