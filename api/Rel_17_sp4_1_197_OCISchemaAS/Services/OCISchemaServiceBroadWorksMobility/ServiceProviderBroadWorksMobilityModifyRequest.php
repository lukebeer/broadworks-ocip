<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityServiceProviderSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider level BroadWorks Mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'ServiceProviderBroadWorksMobilityModifyRequest';
    protected $serviceProviderId         = null;
    protected $useSettingLevel           = null;
    protected $enableLocationServices    = null;
    protected $enableMSRNLookup          = null;
    protected $enableMobileStateChecking = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;

    public function __construct(
         $serviceProviderId,
         $useSettingLevel = null,
         $enableLocationServices = null,
         $enableMSRNLookup = null,
         $enableMobileStateChecking = null,
         $denyCallOriginations = null,
         $denyCallTerminations = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setEnableLocationServices($enableLocationServices);
        $this->setEnableMSRNLookup($enableMSRNLookup);
        $this->setEnableMobileStateChecking($enableMobileStateChecking);
        $this->setDenyCallOriginations($denyCallOriginations);
        $this->setDenyCallTerminations($denyCallTerminations);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        if (!$useSettingLevel) return $this;
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityServiceProviderSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityServiceProviderSettingLevel($useSettingLevel);
        $this->useSettingLevel->setName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityServiceProviderSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel->getValue();
    }

    /**
     * 
     */
    public function setEnableLocationServices($enableLocationServices = null)
    {
        if (!$enableLocationServices) return $this;
        $this->enableLocationServices = new PrimitiveType($enableLocationServices);
        $this->enableLocationServices->setName('enableLocationServices');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLocationServices
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices->getValue();
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        if (!$enableMSRNLookup) return $this;
        $this->enableMSRNLookup = new PrimitiveType($enableMSRNLookup);
        $this->enableMSRNLookup->setName('enableMSRNLookup');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMSRNLookup
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup->getValue();
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        if (!$enableMobileStateChecking) return $this;
        $this->enableMobileStateChecking = new PrimitiveType($enableMobileStateChecking);
        $this->enableMobileStateChecking->setName('enableMobileStateChecking');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMobileStateChecking
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking->getValue();
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        if (!$denyCallOriginations) return $this;
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations->getValue();
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        if (!$denyCallTerminations) return $this;
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations->getValue();
    }
}
