<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringCallTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringAlternateCallIndicatorList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialableCallerIDCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $newName=null,
             $description=null,
             $prefixDigits=null,
             ReplacementCommunicationBarringCallTypeList $matchCallType=null,
             ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator=null,
             $matchLocalCategory=null,
             $matchNationalCategory=null,
             $matchInterlataCategory=null,
             $matchIntralataCategory=null,
             $matchInternationalCategory=null,
             $matchPrivateCategory=null,
             $matchEmergencyCategory=null,
             $matchOtherCategory=null
    ) {
        $this->name                        = new DialableCallerIDCriteriaName($name);
        $this->newName                     = new DialableCallerIDCriteriaName($newName);
        $this->description                 = new DialableCallerIDCriteriaDescription($description);
        $this->prefixDigits                = new DialableCallerIDPrefixDigits($prefixDigits);
        $this->matchCallType               = $matchCallType;
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
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

    public function setName($name)
    {
        $name and $this->name = new DialableCallerIDCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName)
    {
        $newName and $this->newName = new DialableCallerIDCriteriaName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
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
        $matchCallType and $this->matchCallType = new ReplacementCommunicationBarringCallTypeList($matchCallType);
    }

    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->value();
    }

    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $matchAlternateCallIndicator and $this->matchAlternateCallIndicator = new ReplacementCommunicationBarringAlternateCallIndicatorList($matchAlternateCallIndicator);
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
