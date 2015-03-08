<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Reorder the lines of a group device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the GroupAccessDeviceGetRequest14sp6 command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCPEConfigReorderDeviceLinePortsRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $groupId             = null;
    protected $deviceName          = null;
    protected $orderedLinePortList = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $deviceName,
         $orderedLinePortList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDeviceName($deviceName);
        $this->setOrderedLinePortList($orderedLinePortList);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
