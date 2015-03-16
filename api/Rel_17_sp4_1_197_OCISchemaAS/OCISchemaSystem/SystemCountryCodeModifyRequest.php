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
    public    $elementName = 'SystemCountryCodeModifyRequest';
    protected $countryCode;
    protected $ringPeriodMilliseconds;
    protected $offHookWarningTimerSeconds;
    protected $enableNationalPrefix;
    protected $nationalPrefix;
    protected $becomeDefaultCountryCode;
    protected $maxCallWaitingTones;
    protected $timeBetweenCallWaitingTonesMilliseconds;

    public function __construct(
         $countryCode = '',
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
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->ringPeriodMilliseconds->setElementName('ringPeriodMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeRingPeriodMilliseconds $ringPeriodMilliseconds
     */
    public function getRingPeriodMilliseconds()
    {
        return ($this->ringPeriodMilliseconds)
            ? $this->ringPeriodMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->offHookWarningTimerSeconds->setElementName('offHookWarningTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeOffHookWarningTimerSeconds $offHookWarningTimerSeconds
     */
    public function getOffHookWarningTimerSeconds()
    {
        return ($this->offHookWarningTimerSeconds)
            ? $this->offHookWarningTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableNationalPrefix($enableNationalPrefix = null)
    {
        $this->enableNationalPrefix = new PrimitiveType($enableNationalPrefix);
        $this->enableNationalPrefix->setElementName('enableNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNationalPrefix
     */
    public function getEnableNationalPrefix()
    {
        return ($this->enableNationalPrefix)
            ? $this->enableNationalPrefix->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setElementName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $nationalPrefix
     */
    public function getNationalPrefix()
    {
        return ($this->nationalPrefix)
            ? $this->nationalPrefix->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBecomeDefaultCountryCode($becomeDefaultCountryCode = null)
    {
        $this->becomeDefaultCountryCode = new PrimitiveType($becomeDefaultCountryCode);
        $this->becomeDefaultCountryCode->setElementName('becomeDefaultCountryCode');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultCountryCode
     */
    public function getBecomeDefaultCountryCode()
    {
        return ($this->becomeDefaultCountryCode)
            ? $this->becomeDefaultCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
        $this->maxCallWaitingTones->setElementName('maxCallWaitingTones');
        return $this;
    }

    /**
     * 
     * @return CountryCodeMaxCallWaitingTones $maxCallWaitingTones
     */
    public function getMaxCallWaitingTones()
    {
        return ($this->maxCallWaitingTones)
            ? $this->maxCallWaitingTones->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
        $this->timeBetweenCallWaitingTonesMilliseconds->setElementName('timeBetweenCallWaitingTonesMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeTimeBetweenCallWaitingTonesMilliseconds $timeBetweenCallWaitingTonesMilliseconds
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return ($this->timeBetweenCallWaitingTonesMilliseconds)
            ? $this->timeBetweenCallWaitingTonesMilliseconds->getElementValue()
            : null;
    }
}
