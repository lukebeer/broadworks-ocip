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
    public    $name                                    = __CLASS__;
    protected $countryCode                             = null;
    protected $ringPeriodMilliseconds                  = null;
    protected $offHookWarningTimerSeconds              = null;
    protected $enableNationalPrefix                    = null;
    protected $nationalPrefix                          = null;
    protected $becomeDefaultCountryCode                = null;
    protected $maxCallWaitingTones                     = null;
    protected $timeBetweenCallWaitingTonesMilliseconds = null;

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

    /**
     * Country dialing code.
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
    }

    /**
     * Country dialing code.
     */
    public function getCountryCode()
    {
        return (!$this->countryCode) ?: $this->countryCode->getValue();
    }

    /**
     * Country code ring period milliseconds.
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
    }

    /**
     * Country code ring period milliseconds.
     */
    public function getRingPeriodMilliseconds()
    {
        return (!$this->ringPeriodMilliseconds) ?: $this->ringPeriodMilliseconds->getValue();
    }

    /**
     * Country code off hook warning timer seconds.
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
    }

    /**
     * Country code off hook warning timer seconds.
     */
    public function getOffHookWarningTimerSeconds()
    {
        return (!$this->offHookWarningTimerSeconds) ?: $this->offHookWarningTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableNationalPrefix($enableNationalPrefix = null)
    {
        $this->enableNationalPrefix = (boolean) $enableNationalPrefix;
    }

    /**
     * 
     */
    public function getEnableNationalPrefix()
    {
        return (!$this->enableNationalPrefix) ?: $this->enableNationalPrefix->getValue();
    }

    /**
     * The national prefix dialing digits.
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
    }

    /**
     * The national prefix dialing digits.
     */
    public function getNationalPrefix()
    {
        return (!$this->nationalPrefix) ?: $this->nationalPrefix->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode = null)
    {
        $this->becomeDefaultCountryCode = (boolean) $becomeDefaultCountryCode;
    }

    /**
     * 
     */
    public function getBecomeDefaultCountryCode()
    {
        return (!$this->becomeDefaultCountryCode) ?: $this->becomeDefaultCountryCode->getValue();
    }

    /**
     * The maximum number of call waiting tones per call.
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
    }

    /**
     * The maximum number of call waiting tones per call.
     */
    public function getMaxCallWaitingTones()
    {
        return (!$this->maxCallWaitingTones) ?: $this->maxCallWaitingTones->getValue();
    }

    /**
     * The amount of quiet time between call waiting tones.
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
    }

    /**
     * The amount of quiet time between call waiting tones.
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return (!$this->timeBetweenCallWaitingTonesMilliseconds) ?: $this->timeBetweenCallWaitingTonesMilliseconds->getValue();
    }
}
