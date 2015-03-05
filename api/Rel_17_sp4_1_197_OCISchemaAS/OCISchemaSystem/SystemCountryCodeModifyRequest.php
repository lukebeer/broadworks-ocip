<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCodeRingPeriodMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCodeOffHookWarningTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCodeMaxCallWaitingTones;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCodeTimeBetweenCallWaitingTonesMilliseconds;
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
    public    $name = __CLASS__;

    public function __construct(
             $countryCode,
             $ringPeriodMilliseconds=null,
             $offHookWarningTimerSeconds=null,
             $enableNationalPrefix=null,
             $nationalPrefix=null,
             $becomeDefaultCountryCode=null,
             $maxCallWaitingTones=null,
             $timeBetweenCallWaitingTonesMilliseconds=null
    ) {
        $this->countryCode                             = new CountryCode($countryCode);
        $this->ringPeriodMilliseconds                  = $ringPeriodMilliseconds;
        $this->offHookWarningTimerSeconds              = $offHookWarningTimerSeconds;
        $this->enableNationalPrefix                    = $enableNationalPrefix;
        $this->nationalPrefix                          = new NationalPrefix($nationalPrefix);
        $this->becomeDefaultCountryCode                = $becomeDefaultCountryCode;
        $this->maxCallWaitingTones                     = $maxCallWaitingTones;
        $this->timeBetweenCallWaitingTonesMilliseconds = $timeBetweenCallWaitingTonesMilliseconds;
        $this->args                                    = func_get_args();
    }

    public function setCountryCode($countryCode)
    {
        $countryCode and $this->countryCode = new CountryCode($countryCode);
    }

    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->value();
    }

    public function setRingPeriodMilliseconds($ringPeriodMilliseconds)
    {
        $ringPeriodMilliseconds and $this->ringPeriodMilliseconds = new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
    }

    public function getRingPeriodMilliseconds()
    {
        return (!$this->ringPeriodMilliseconds) ?: $this->ringPeriodMilliseconds->value();
    }

    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds)
    {
        $offHookWarningTimerSeconds and $this->offHookWarningTimerSeconds = new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
    }

    public function getOffHookWarningTimerSeconds()
    {
        return (!$this->offHookWarningTimerSeconds) ?: $this->offHookWarningTimerSeconds->value();
    }

    public function setEnableNationalPrefix($enableNationalPrefix)
    {
        $enableNationalPrefix and $this->enableNationalPrefix = new xs:boolean($enableNationalPrefix);
    }

    public function getEnableNationalPrefix()
    {
        return (!$this->enableNationalPrefix) ?: $this->enableNationalPrefix->value();
    }

    public function setNationalPrefix($nationalPrefix)
    {
        $nationalPrefix and $this->nationalPrefix = new NationalPrefix($nationalPrefix);
    }

    public function getNationalPrefix()
    {
        return (!$this->nationalPrefix) ?: $this->nationalPrefix->value();
    }

    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode)
    {
        $becomeDefaultCountryCode and $this->becomeDefaultCountryCode = new xs:boolean($becomeDefaultCountryCode);
    }

    public function getBecomeDefaultCountryCode()
    {
        return (!$this->becomeDefaultCountryCode) ?: $this->becomeDefaultCountryCode->value();
    }

    public function setMaxCallWaitingTones($maxCallWaitingTones)
    {
        $maxCallWaitingTones and $this->maxCallWaitingTones = new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
    }

    public function getMaxCallWaitingTones()
    {
        return (!$this->maxCallWaitingTones) ?: $this->maxCallWaitingTones->value();
    }

    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds)
    {
        $timeBetweenCallWaitingTonesMilliseconds and $this->timeBetweenCallWaitingTonesMilliseconds = new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
    }

    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return (!$this->timeBetweenCallWaitingTonesMilliseconds) ?: $this->timeBetweenCallWaitingTonesMilliseconds->value();
    }
}
