<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityGroupSettingLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * The response to a GroupBroadWorksMobilityGetRequest.
 */
class GroupBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $useSettingLevel           = null;
    protected $enableLocationServices    = null;
    protected $enableMSRNLookup          = null;
    protected $enableMobileStateChecking = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;


    /**
     * BroadWorks Mobility setting for the group level.
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityGroupSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityGroupSettingLevel($useSettingLevel);
    }

    /**
     * BroadWorks Mobility setting for the group level.
     */
    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->getValue();
    }

    /**
     * 
     */
    public function setEnableLocationServices($enableLocationServices = null)
    {
        $this->enableLocationServices = (boolean) $enableLocationServices;
    }

    /**
     * 
     */
    public function getEnableLocationServices()
    {
        return (!$this->enableLocationServices) ?: $this->enableLocationServices->getValue();
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        $this->enableMSRNLookup = (boolean) $enableMSRNLookup;
    }

    /**
     * 
     */
    public function getEnableMSRNLookup()
    {
        return (!$this->enableMSRNLookup) ?: $this->enableMSRNLookup->getValue();
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        $this->enableMobileStateChecking = (boolean) $enableMobileStateChecking;
    }

    /**
     * 
     */
    public function getEnableMobileStateChecking()
    {
        return (!$this->enableMobileStateChecking) ?: $this->enableMobileStateChecking->getValue();
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = (boolean) $denyCallOriginations;
    }

    /**
     * 
     */
    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->getValue();
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = (boolean) $denyCallTerminations;
    }

    /**
     * 
     */
    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->getValue();
    }
}
