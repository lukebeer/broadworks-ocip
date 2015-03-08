<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseBroadWorksMobileManagerGetRequest
 */
class EnterpriseBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetResponse';
    public    $name                         = __CLASS__;
    protected $mobileManagerId              = null;
    protected $name                         = null;
    protected $isActive                     = null;
    protected $localToCarrier               = null;
    protected $deactivationReason           = null;
    protected $maxTxPerSecondEnabled        = null;
    protected $maxTxPerSecond               = null;
    protected $tldnEnabled                  = null;
    protected $genericNumberEnabled         = null;
    protected $mobileStateCheckEnabled      = null;
    protected $locationBasedServicesEnabled = null;


    /**
     * Domain name.
     */
    public function setMobileManagerId($mobileManagerId = null)
    {
        $this->mobileManagerId = ($mobileManagerId InstanceOf BroadWorksMobileManagerDomainName)
             ? $mobileManagerId
             : new BroadWorksMobileManagerDomainName($mobileManagerId);
    }

    /**
     * Domain name.
     */
    public function getMobileManagerId()
    {
        return (!$this->mobileManagerId) ?: $this->mobileManagerId->getValue();
    }

    /**
     * BroadWorks Mobile Manager name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf BroadWorksMobileManagerName)
             ? $name
             : new BroadWorksMobileManagerName($name);
    }

    /**
     * BroadWorks Mobile Manager name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setLocalToCarrier($localToCarrier = null)
    {
        $this->localToCarrier = (boolean) $localToCarrier;
    }

    /**
     * 
     */
    public function getLocalToCarrier()
    {
        return (!$this->localToCarrier) ?: $this->localToCarrier->getValue();
    }

    /**
     * Deactivation reason.
     */
    public function setDeactivationReason($deactivationReason = null)
    {
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
    }

    /**
     * Deactivation reason.
     */
    public function getDeactivationReason()
    {
        return (!$this->deactivationReason) ?: $this->deactivationReason->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled = null)
    {
        $this->maxTxPerSecondEnabled = (boolean) $maxTxPerSecondEnabled;
    }

    /**
     * 
     */
    public function getMaxTxPerSecondEnabled()
    {
        return (!$this->maxTxPerSecondEnabled) ?: $this->maxTxPerSecondEnabled->getValue();
    }

    /**
     * Maximum number of simultaneous SS7 transactions allowed
     *         per second before throttling occurs.
     */
    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
    }

    /**
     * Maximum number of simultaneous SS7 transactions allowed
     *         per second before throttling occurs.
     */
    public function getMaxTxPerSecond()
    {
        return (!$this->maxTxPerSecond) ?: $this->maxTxPerSecond->getValue();
    }

    /**
     * 
     */
    public function setTldnEnabled($tldnEnabled = null)
    {
        $this->tldnEnabled = (boolean) $tldnEnabled;
    }

    /**
     * 
     */
    public function getTldnEnabled()
    {
        return (!$this->tldnEnabled) ?: $this->tldnEnabled->getValue();
    }

    /**
     * 
     */
    public function setGenericNumberEnabled($genericNumberEnabled = null)
    {
        $this->genericNumberEnabled = (boolean) $genericNumberEnabled;
    }

    /**
     * 
     */
    public function getGenericNumberEnabled()
    {
        return (!$this->genericNumberEnabled) ?: $this->genericNumberEnabled->getValue();
    }

    /**
     * 
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled = null)
    {
        $this->mobileStateCheckEnabled = (boolean) $mobileStateCheckEnabled;
    }

    /**
     * 
     */
    public function getMobileStateCheckEnabled()
    {
        return (!$this->mobileStateCheckEnabled) ?: $this->mobileStateCheckEnabled->getValue();
    }

    /**
     * 
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled = null)
    {
        $this->locationBasedServicesEnabled = (boolean) $locationBasedServicesEnabled;
    }

    /**
     * 
     */
    public function getLocationBasedServicesEnabled()
    {
        return (!$this->locationBasedServicesEnabled) ?: $this->locationBasedServicesEnabled->getValue();
    }
}
