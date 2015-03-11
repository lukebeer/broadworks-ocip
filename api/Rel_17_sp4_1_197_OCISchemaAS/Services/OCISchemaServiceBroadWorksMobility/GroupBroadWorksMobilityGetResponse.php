<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityGroupSettingLevel;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The response to a GroupBroadWorksMobilityGetRequest.
 */
class GroupBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = 'GroupBroadWorksMobilityGetResponse';
    protected $useSettingLevel           = null;
    protected $enableLocationServices    = null;
    protected $enableMSRNLookup          = null;
    protected $enableMobileStateChecking = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;

    /**
     * @return GroupBroadWorksMobilityGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        if (!$useSettingLevel) return $this;
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityGroupSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityGroupSettingLevel($useSettingLevel);
        $this->useSettingLevel->setName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityGroupSettingLevel
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations->getValue();
    }
}
