<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceModifyUserResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify attributes for line/ports assigned on the system device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $deviceName        = null;
    protected $linePort          = null;
    protected $isPrimaryLinePort = null;

    public function __construct(
         $deviceName,
         $linePort,
         $isPrimaryLinePort = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setLinePort($linePort);
        $this->setIsPrimaryLinePort($isPrimaryLinePort);
    }

    /**
     * @return SystemAccessDeviceModifyUserResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Access device name.
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    /**
     * Access device name.
     */
    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->getValue();
    }

    /**
     * Also known as address of record, the Line/Port identifies a device endpoint
     *         in standalone mode  or a SIPURI public identity in IMS mode.
     *         Line/port user@host or just the port.
     *         Validation:
     *         - don't allow sip:
     *         - allow a leading +
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - lineports for sip devices configured with Proxy Addressing must have a host portion
     *         - lineports for sip devices configured with Device Addressing must not have a host portion
     */
    public function setLinePort($linePort = null)
    {
        $this->linePort = ($linePort InstanceOf AccessDeviceEndpointLinePort)
             ? $linePort
             : new AccessDeviceEndpointLinePort($linePort);
    }

    /**
     * Also known as address of record, the Line/Port identifies a device endpoint
     *         in standalone mode  or a SIPURI public identity in IMS mode.
     *         Line/port user@host or just the port.
     *         Validation:
     *         - don't allow sip:
     *         - allow a leading +
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - lineports for sip devices configured with Proxy Addressing must have a host portion
     *         - lineports for sip devices configured with Device Addressing must not have a host portion
     */
    public function getLinePort()
    {
        return (!$this->linePort) ?: $this->linePort->getValue();
    }

    /**
     * 
     */
    public function setIsPrimaryLinePort($isPrimaryLinePort = null)
    {
        $this->isPrimaryLinePort = (boolean) $isPrimaryLinePort;
    }

    /**
     * 
     */
    public function getIsPrimaryLinePort()
    {
        return (!$this->isPrimaryLinePort) ?: $this->isPrimaryLinePort;
    }
}
