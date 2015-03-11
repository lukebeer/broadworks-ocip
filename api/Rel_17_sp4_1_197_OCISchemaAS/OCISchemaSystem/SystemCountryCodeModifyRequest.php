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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the attributes of a country code.
 *         If becomeDefaultCountryCode is true, the country code
 *         in this request becomes the default country code for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                    = 'SystemCountryCodeModifyRequest';
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
     * @return 
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
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        if (!$ringPeriodMilliseconds) return $this;
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->ringPeriodMilliseconds->setName('ringPeriodMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeRingPeriodMilliseconds
     */
    public function getRingPeriodMilliseconds()
    {
        return $this->ringPeriodMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        if (!$offHookWarningTimerSeconds) return $this;
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->offHookWarningTimerSeconds->setName('offHookWarningTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeOffHookWarningTimerSeconds
     */
    public function getOffHookWarningTimerSeconds()
    {
        return $this->offHookWarningTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableNationalPrefix($enableNationalPrefix = null)
    {
        if (!$enableNationalPrefix) return $this;
        $this->enableNationalPrefix = new PrimitiveType($enableNationalPrefix);
        $this->enableNationalPrefix->setName('enableNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableNationalPrefix()
    {
        return $this->enableNationalPrefix->getValue();
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        if (!$nationalPrefix) return $this;
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix
     */
    public function getNationalPrefix()
    {
        return $this->nationalPrefix->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode = null)
    {
        if (!$becomeDefaultCountryCode) return $this;
        $this->becomeDefaultCountryCode = new PrimitiveType($becomeDefaultCountryCode);
        $this->becomeDefaultCountryCode->setName('becomeDefaultCountryCode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBecomeDefaultCountryCode()
    {
        return $this->becomeDefaultCountryCode->getValue();
    }

    /**
     * 
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        if (!$maxCallWaitingTones) return $this;
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
        $this->maxCallWaitingTones->setName('maxCallWaitingTones');
        return $this;
    }

    /**
     * 
     * @return CountryCodeMaxCallWaitingTones
     */
    public function getMaxCallWaitingTones()
    {
        return $this->maxCallWaitingTones->getValue();
    }

    /**
     * 
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        if (!$timeBetweenCallWaitingTonesMilliseconds) return $this;
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
        $this->timeBetweenCallWaitingTonesMilliseconds->setName('timeBetweenCallWaitingTonesMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeTimeBetweenCallWaitingTonesMilliseconds
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return $this->timeBetweenCallWaitingTonesMilliseconds->getValue();
    }
}
