<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigReorderDeviceLinePortsResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Reorder the lines of a System device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the SystemAccessDeviceGetRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigReorderDeviceLinePortsRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $deviceName          = null;
    protected $orderedLinePortList = null;

    public function __construct(
         $deviceName,
         $orderedLinePortList = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setOrderedLinePortList($orderedLinePortList);
    }

    /**
     * @return SystemCPEConfigReorderDeviceLinePortsResponse
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
    public function setOrderedLinePortList($orderedLinePortList = null)
    {
        $this->orderedLinePortList = ($orderedLinePortList InstanceOf AccessDeviceEndpointLinePort)
             ? $orderedLinePortList
             : new AccessDeviceEndpointLinePort($orderedLinePortList);
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
    public function getOrderedLinePortList()
    {
        return (!$this->orderedLinePortList) ?: $this->orderedLinePortList->getValue();
    }
}
