<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a static configuration tag for a system access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccessDeviceCustomTagAddRequest extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemAccessDeviceCustomTagAddRequest';
    protected $deviceName = null;
    protected $tagName    = null;
    protected $tagValue   = null;

    public function __construct(
         $deviceName,
         $tagName,
         $tagValue = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }

    /**
     * 
     */
    public function setTagName($tagName = null)
    {
        if (!$tagName) return $this;
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
        $this->tagName->setName('tagName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagName
     */
    public function getTagName()
    {
        return $this->tagName->getValue();
    }

    /**
     * 
     */
    public function setTagValue($tagValue = null)
    {
        if (!$tagValue) return $this;
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
        $this->tagValue->setName('tagValue');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagValue
     */
    public function getTagValue()
    {
        return $this->tagValue->getValue();
    }
}
