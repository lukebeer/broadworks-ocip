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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name = 'SystemCountryCodeAddRequest';
    protected $countryCode;
    protected $countryName;
    protected $ringPeriodMilliseconds;
    protected $offHookWarningTimerSeconds;
    protected $enableNationalPrefix;
    protected $nationalPrefix;
    protected $maxCallWaitingTones;
    protected $timeBetweenCallWaitingTonesMilliseconds;

    public function __construct(
         $countryCode = '',
         $countryName = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode) ? $this->countryCode->getValue() : null;
    }

    /**
     * 
     */
    public function setCountryName($countryName = null)
    {
        $this->countryName = ($countryName InstanceOf CountryName)
             ? $countryName
             : new CountryName($countryName);
        $this->countryName->setName('countryName');
        return $this;
    }

    /**
     * 
     * @return CountryName $countryName
     */
    public function getCountryName()
    {
        return ($this->countryName) ? $this->countryName->getValue() : null;
    }

    /**
     * 
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->ringPeriodMilliseconds->setName('ringPeriodMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeRingPeriodMilliseconds $ringPeriodMilliseconds
     */
    public function getRingPeriodMilliseconds()
    {
        return ($this->ringPeriodMilliseconds) ? $this->ringPeriodMilliseconds->getValue() : null;
    }

    /**
     * 
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->offHookWarningTimerSeconds->setName('offHookWarningTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeOffHookWarningTimerSeconds $offHookWarningTimerSeconds
     */
    public function getOffHookWarningTimerSeconds()
    {
        return ($this->offHookWarningTimerSeconds) ? $this->offHookWarningTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableNationalPrefix($enableNationalPrefix = null)
    {
        $this->enableNationalPrefix = new PrimitiveType($enableNationalPrefix);
        $this->enableNationalPrefix->setName('enableNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNationalPrefix
     */
    public function getEnableNationalPrefix()
    {
        return ($this->enableNationalPrefix) ? $this->enableNationalPrefix->getValue() : null;
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $nationalPrefix
     */
    public function getNationalPrefix()
    {
        return ($this->nationalPrefix) ? $this->nationalPrefix->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
        $this->maxCallWaitingTones->setName('maxCallWaitingTones');
        return $this;
    }

    /**
     * 
     * @return CountryCodeMaxCallWaitingTones $maxCallWaitingTones
     */
    public function getMaxCallWaitingTones()
    {
        return ($this->maxCallWaitingTones) ? $this->maxCallWaitingTones->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
        $this->timeBetweenCallWaitingTonesMilliseconds->setName('timeBetweenCallWaitingTonesMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeTimeBetweenCallWaitingTonesMilliseconds $timeBetweenCallWaitingTonesMilliseconds
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return ($this->timeBetweenCallWaitingTonesMilliseconds) ? $this->timeBetweenCallWaitingTonesMilliseconds->getValue() : null;
    }
}
