<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupDialableCallerIDCriteriaGetRequest.
 *         The response contains the Dialable Caller ID Criteria information.
 */
class GroupDialableCallerIDCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $prefixDigits=null,
             $matchCallType=null,
             $matchAlternateCallIndicator=null,
             $matchLocalCategory,
             $matchNationalCategory,
             $matchInterlataCategory,
             $matchIntralataCategory,
             $matchInternationalCategory,
             $matchPrivateCategory,
             $matchEmergencyCategory,
             $matchOtherCategory
    ) {
        $this->description                 = new DialableCallerIDCriteriaDescription($description);
        $this->prefixDigits                = new DialableCallerIDPrefixDigits($prefixDigits);
        $this->matchCallType               = new CommunicationBarringCallType($matchCallType);
        $this->matchAlternateCallIndicator = new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
        $this->matchLocalCategory          = $matchLocalCategory;
        $this->matchNationalCategory       = $matchNationalCategory;
        $this->matchInterlataCategory      = $matchInterlataCategory;
        $this->matchIntralataCategory      = $matchIntralataCategory;
        $this->matchInternationalCategory  = $matchInternationalCategory;
        $this->matchPrivateCategory        = $matchPrivateCategory;
        $this->matchEmergencyCategory      = $matchEmergencyCategory;
        $this->matchOtherCategory          = $matchOtherCategory;
        $this->args                        = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new DialableCallerIDCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setPrefixDigits($prefixDigits)
    {
        $prefixDigits and $this->prefixDigits = new DialableCallerIDPrefixDigits($prefixDigits);
    }

    public function getPrefixDigits()
    {
        return (!$this->prefixDigits) ?: $this->prefixDigits->value();
    }

    public function setMatchCallType($matchCallType)
    {
        $matchCallType and $this->matchCallType = new CommunicationBarringCallType($matchCallType);
    }

    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->value();
    }

    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $matchAlternateCallIndicator and $this->matchAlternateCallIndicator = new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
    }

    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->value();
    }

    public function setMatchLocalCategory($matchLocalCategory)
    {
        $matchLocalCategory and $this->matchLocalCategory = new xs:boolean($matchLocalCategory);
    }

    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->value();
    }

    public function setMatchNationalCategory($matchNationalCategory)
    {
        $matchNationalCategory and $this->matchNationalCategory = new xs:boolean($matchNationalCategory);
    }

    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->value();
    }

    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $matchInterlataCategory and $this->matchInterlataCategory = new xs:boolean($matchInterlataCategory);
    }

    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->value();
    }

    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $matchIntralataCategory and $this->matchIntralataCategory = new xs:boolean($matchIntralataCategory);
    }

    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->value();
    }

    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $matchInternationalCategory and $this->matchInternationalCategory = new xs:boolean($matchInternationalCategory);
    }

    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->value();
    }

    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $matchPrivateCategory and $this->matchPrivateCategory = new xs:boolean($matchPrivateCategory);
    }

    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->value();
    }

    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $matchEmergencyCategory and $this->matchEmergencyCategory = new xs:boolean($matchEmergencyCategory);
    }

    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->value();
    }

    public function setMatchOtherCategory($matchOtherCategory)
    {
        $matchOtherCategory and $this->matchOtherCategory = new xs:boolean($matchOtherCategory);
    }

    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->value();
    }
}
