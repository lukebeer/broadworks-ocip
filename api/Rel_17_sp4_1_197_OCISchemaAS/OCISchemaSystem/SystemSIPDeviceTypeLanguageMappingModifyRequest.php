<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the device language name that is mapped to a BroadWorks language name. The request can be used to map many languages.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeLanguageMappingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSIPDeviceTypeLanguageMappingModifyRequest';
    protected $deviceType;
    protected $languageMapping;

    public function __construct(
         $deviceType = '',
         $languageMapping = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setLanguageMapping($languageMapping);
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
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType) ? $this->deviceType->getValue() : null;
    }

    /**
     * 
     */
    public function setLanguageMapping(DeviceManagementLanguageMapping $languageMapping = null)
    {
        $this->languageMapping = ($languageMapping InstanceOf DeviceManagementLanguageMapping)
             ? $languageMapping
             : new DeviceManagementLanguageMapping($languageMapping);
        $this->languageMapping->setName('languageMapping');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementLanguageMapping $languageMapping
     */
    public function getLanguageMapping()
    {
        return $this->languageMapping;
    }
}
