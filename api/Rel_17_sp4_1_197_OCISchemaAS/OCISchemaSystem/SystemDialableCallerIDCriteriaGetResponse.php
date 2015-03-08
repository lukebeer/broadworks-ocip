<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemDialableCallerIDCriteriaGetRequest.
 *         The response contains the Dialable Caller ID Criteria information.
 */
class SystemDialableCallerIDCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialableCallerIDCriteriaGetResponse';
    public    $name                        = __CLASS__;
    protected $description                 = null;
    protected $prefixDigits                = null;
    protected $matchCallType               = null;
    protected $matchAlternateCallIndicator = null;
    protected $matchLocalCategory          = null;
    protected $matchNationalCategory       = null;
    protected $matchInterlataCategory      = null;
    protected $matchIntralataCategory      = null;
    protected $matchInternationalCategory  = null;
    protected $matchPrivateCategory        = null;
    protected $matchEmergencyCategory      = null;
    protected $matchOtherCategory          = null;


    /**
     * Dialable Caller ID Criteria description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialableCallerIDCriteriaDescription)
             ? $description
             : new DialableCallerIDCriteriaDescription($description);
    }

    /**
     * Dialable Caller ID Criteria description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Digits that are prepended to the incoming Caller ID of public calls, so that the Caller ID is presented in dialable format.
     *         The digit pattern may contain digits 0-9, *, #.
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf DialableCallerIDPrefixDigits)
             ? $prefixDigits
             : new DialableCallerIDPrefixDigits($prefixDigits);
    }

    /**
     * Digits that are prepended to the incoming Caller ID of public calls, so that the Caller ID is presented in dialable format.
     *         The digit pattern may contain digits 0-9, *, #.
     */
    public function getPrefixDigits()
    {
        return (!$this->prefixDigits) ?: $this->prefixDigits->getValue();
    }

    /**
     * Communication Barring Call Type.
     */
    public function setMatchCallType($matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
    }

    /**
     * Communication Barring Call Type.
     */
    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->getValue();
    }

    /**
     * Communication Barring Alternate Call Indicator.
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
    }

    /**
     * Communication Barring Alternate Call Indicator.
     */
    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->getValue();
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        $this->matchLocalCategory = (boolean) $matchLocalCategory;
    }

    /**
     * 
     */
    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        $this->matchNationalCategory = (boolean) $matchNationalCategory;
    }

    /**
     * 
     */
    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        $this->matchInterlataCategory = (boolean) $matchInterlataCategory;
    }

    /**
     * 
     */
    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        $this->matchIntralataCategory = (boolean) $matchIntralataCategory;
    }

    /**
     * 
     */
    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        $this->matchInternationalCategory = (boolean) $matchInternationalCategory;
    }

    /**
     * 
     */
    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        $this->matchPrivateCategory = (boolean) $matchPrivateCategory;
    }

    /**
     * 
     */
    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        $this->matchEmergencyCategory = (boolean) $matchEmergencyCategory;
    }

    /**
     * 
     */
    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        $this->matchOtherCategory = (boolean) $matchOtherCategory;
    }

    /**
     * 
     */
    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->getValue();
    }
}
