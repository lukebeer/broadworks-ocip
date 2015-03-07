<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeTimeBetweenCallWaitingTonesMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeOffHookWarningTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeRingPeriodMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeMaxCallWaitingTones;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the attributes of a country code.
 *         If becomeDefaultCountryCode is true, the country code
 *         in this request becomes the default country code for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $countryCode                              = null;
    protected $ringPeriodMilliseconds                   = null;
    protected $offHookWarningTimerSeconds               = null;
    protected $enableNationalPrefix                     = null;
    protected $nationalPrefix                           = null;
    protected $becomeDefaultCountryCode                 = null;
    protected $maxCallWaitingTones                      = null;
    protected $timeBetweenCallWaitingTonesMilliseconds  = null;

    public function __construct(
         $countryCode,
         $ringPeriodMilliseconds = null,
         $offHookWarningTimerSeconds = null,
         $enableNationalPrefix = null,
         $nationalPrefix = null,
         $becomeDefaultCountryCode = null,
         $maxCallWaitingTones = null,
         $timeBetweenCallWaitingTonesMilliseconds = null
    ) {
        $this->setCountryCode($countryCode);
        $this->setRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->setOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->setEnableNationalPrefix($enableNationalPrefix);
        $this->setNationalPrefix($nationalPrefix);
        $this->setBecomeDefaultCountryCode($becomeDefaultCountryCode);
        $this->setMaxCallWaitingTones($maxCallWaitingTones);
        $this->setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
    }

    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
    }

    public function getRingPeriodMilliseconds()
    {
        return (!$this->ringPeriodMilliseconds) ?: $this->ringPeriodMilliseconds->value();
    }

    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
    }

    public function getOffHookWarningTimerSeconds()
    {
        return (!$this->offHookWarningTimerSeconds) ?: $this->offHookWarningTimerSeconds->value();
    }

    public function setEnableNationalPrefix(xs:boolean $enableNationalPrefix = null)
    {
    }

    public function getEnableNationalPrefix()
    {
        return (!$this->enableNationalPrefix) ?: $this->enableNationalPrefix->value();
    }

    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
    }

    public function getNationalPrefix()
    {
        return (!$this->nationalPrefix) ?: $this->nationalPrefix->value();
    }

    public function setBecomeDefaultCountryCode(xs:boolean $becomeDefaultCountryCode = null)
    {
    }

    public function getBecomeDefaultCountryCode()
    {
        return (!$this->becomeDefaultCountryCode) ?: $this->becomeDefaultCountryCode->value();
    }

    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
    }

    public function getMaxCallWaitingTones()
    {
        return (!$this->maxCallWaitingTones) ?: $this->maxCallWaitingTones->value();
    }

    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
    }

    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return (!$this->timeBetweenCallWaitingTonesMilliseconds) ?: $this->timeBetweenCallWaitingTonesMilliseconds->value();
    }
}
