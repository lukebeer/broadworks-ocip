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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCountryCodeAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                                    = __CLASS__;
    protected $countryCode                             = null;
    protected $countryName                             = null;
    protected $ringPeriodMilliseconds                  = null;
    protected $offHookWarningTimerSeconds              = null;
    protected $enableNationalPrefix                    = null;
    protected $nationalPrefix                          = null;
    protected $maxCallWaitingTones                     = null;
    protected $timeBetweenCallWaitingTonesMilliseconds = null;

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

    /**
     * @return SystemCountryCodeAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * The name of a country.
     */
    public function setCountryName($countryName = null)
    {
        $this->countryName = ($countryName InstanceOf CountryName)
             ? $countryName
             : new CountryName($countryName);
    }

    /**
     * The name of a country.
     */
    public function getCountryName()
    {
        return (!$this->countryName) ?: $this->countryName->getValue();
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
        return (!$this->enableNationalPrefix) ?: $this->enableNationalPrefix;
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
