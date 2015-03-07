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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a country code to the system.
 *         If ringPeriodMilliseconds is not specified, a default of 6000 milliseconds is assumed.
 *         If offHookWarningTimerSeconds is not specified, a default of 30 seconds is assumed.
 *         If enableNationalPrefix is not specified, a default of false is assumed.
 *         If nationalPrefix is not specified, a default of null string is assumed.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $countryCode                              = null;
    protected $countryName                              = null;
    protected $ringPeriodMilliseconds                   = null;
    protected $offHookWarningTimerSeconds               = null;
    protected $enableNationalPrefix                     = null;
    protected $nationalPrefix                           = null;
    protected $maxCallWaitingTones                      = null;
    protected $timeBetweenCallWaitingTonesMilliseconds  = null;

    public function __construct(
         $countryCode,
         $countryName,
         $ringPeriodMilliseconds = null,
         $offHookWarningTimerSeconds = null,
         $enableNationalPrefix = null,
         $nationalPrefix = null,
         $maxCallWaitingTones = null,
         $timeBetweenCallWaitingTonesMilliseconds = null
    ) {
        $this->setCountryCode($countryCode);
        $this->setCountryName($countryName);
        $this->setRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->setOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->setEnableNationalPrefix($enableNationalPrefix);
        $this->setNationalPrefix($nationalPrefix);
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

    public function setCountryName($countryName = null)
    {
        $this->countryName = ($countryName InstanceOf CountryName)
             ? $countryName
             : new CountryName($countryName);
    }

    public function getCountryName()
    {
        return (!$this->countryName) ?: $this->countryName->value();
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
