<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingDeleteChargingFunctionElementServerResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a ChargingFunctionElementServer from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingDeleteChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $address = null;

    public function __construct(
         $address
    ) {
        $this->setAddress($address);
    }

    /**
     * @return SystemAccountingDeleteChargingFunctionElementServerResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * This is a net address or can contain a string that includes additional items
     *         such as protocols and transports.
     */
    public function setAddress($address = null)
    {
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
    }

    /**
     * This is a net address or can contain a string that includes additional items
     *         such as protocols and transports.
     */
    public function getAddress()
    {
        return (!$this->address) ?: $this->address->getValue();
    }
}
