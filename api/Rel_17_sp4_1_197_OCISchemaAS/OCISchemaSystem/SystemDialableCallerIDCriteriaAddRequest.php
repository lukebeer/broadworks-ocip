<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new Dialable Caller ID Criteria. Criteria are added at the bottom of the list with the lowest priority. The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialableCallerIDCriteriaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $name                         = null;
    protected $description                  = null;
    protected $prefixDigits                 = null;
    protected $matchCallType                = null;
    protected $matchAlternateCallIndicator  = null;
    protected $matchLocalCategory           = null;
    protected $matchNationalCategory        = null;
    protected $matchInterlataCategory       = null;
    protected $matchIntralataCategory       = null;
    protected $matchInternationalCategory   = null;
    protected $matchPrivateCategory         = null;
    protected $matchEmergencyCategory       = null;
    protected $matchOtherCategory           = null;

    public function __construct(
         $name,
         $description = null,
         $prefixDigits = null,
         $matchCallType = null,
         $matchAlternateCallIndicator = null,
         $matchLocalCategory,
         $matchNationalCategory,
         $matchInterlataCategory,
         $matchIntralataCategory,
         $matchInternationalCategory,
         $matchPrivateCategory,
         $matchEmergencyCategory,
         $matchOtherCategory
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setPrefixDigits($prefixDigits);
        $this->setMatchCallType($matchCallType);
        $this->setMatchAlternateCallIndicator($matchAlternateCallIndicator);
        $this->setMatchLocalCategory($matchLocalCategory);
        $this->setMatchNationalCategory($matchNationalCategory);
        $this->setMatchInterlataCategory($matchInterlataCategory);
        $this->setMatchIntralataCategory($matchIntralataCategory);
        $this->setMatchInternationalCategory($matchInternationalCategory);
        $this->setMatchPrivateCategory($matchPrivateCategory);
        $this->setMatchEmergencyCategory($matchEmergencyCategory);
        $this->setMatchOtherCategory($matchOtherCategory);
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialableCallerIDCriteriaDescription)
             ? $description
             : new DialableCallerIDCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf DialableCallerIDPrefixDigits)
             ? $prefixDigits
             : new DialableCallerIDPrefixDigits($prefixDigits);
    }

    public function getPrefixDigits()
    {
        return (!$this->prefixDigits) ?: $this->prefixDigits->value();
    }

    public function setMatchCallType($matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
    }

    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->value();
    }

    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
    }

    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->value();
    }

    public function setMatchLocalCategory(xs:boolean $matchLocalCategory = null)
    {
    }

    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->value();
    }

    public function setMatchNationalCategory(xs:boolean $matchNationalCategory = null)
    {
    }

    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->value();
    }

    public function setMatchInterlataCategory(xs:boolean $matchInterlataCategory = null)
    {
    }

    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->value();
    }

    public function setMatchIntralataCategory(xs:boolean $matchIntralataCategory = null)
    {
    }

    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->value();
    }

    public function setMatchInternationalCategory(xs:boolean $matchInternationalCategory = null)
    {
    }

    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->value();
    }

    public function setMatchPrivateCategory(xs:boolean $matchPrivateCategory = null)
    {
    }

    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->value();
    }

    public function setMatchEmergencyCategory(xs:boolean $matchEmergencyCategory = null)
    {
    }

    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->value();
    }

    public function setMatchOtherCategory(xs:boolean $matchOtherCategory = null)
    {
    }

    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->value();
    }
}
