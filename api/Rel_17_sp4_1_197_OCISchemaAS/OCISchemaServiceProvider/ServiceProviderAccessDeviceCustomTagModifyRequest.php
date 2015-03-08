<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a static configuration tag for a service provider access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAccessDeviceCustomTagModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $deviceName        = null;
    protected $tagName           = null;
    protected $tagValue          = null;

    public function __construct(
         $serviceProviderId,
         $deviceName,
         $tagName,
         $tagValue = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeviceName($deviceName);
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
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
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
    }

    /**
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->getValue();
    }

    /**
     * A static tag value for access device files managed by the Device Management System on BroadWorks.
     */
    public function setTagValue($tagValue = null)
    {
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
    }

    /**
     * A static tag value for access device files managed by the Device Management System on BroadWorks.
     */
    public function getTagValue()
    {
        return (!$this->tagValue) ?: $this->tagValue->getValue();
    }
}
