<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringAlternateCallIndicatorList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringCallTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialableCallerIDCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $serviceProviderId           = null;
    protected $groupId                     = null;
    protected $name                        = null;
    protected $newName                     = null;
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

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $newName = null,
         $description = null,
         $prefixDigits = null,
         ReplacementCommunicationBarringCallTypeList $matchCallType = null,
         ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null,
         $matchLocalCategory = null,
         $matchNationalCategory = null,
         $matchInterlataCategory = null,
         $matchIntralataCategory = null,
         $matchInternationalCategory = null,
         $matchPrivateCategory = null,
         $matchEmergencyCategory = null,
         $matchOtherCategory = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setNewName($newName);
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

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Dialable Caller ID Criteria name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
    }

    /**
     * Dialable Caller ID Criteria name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Dialable Caller ID Criteria name.
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf DialableCallerIDCriteriaName)
             ? $newName
             : new DialableCallerIDCriteriaName($newName);
    }

    /**
     * Dialable Caller ID Criteria name.
     */
    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->getValue();
    }

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
     * A list of Communication Barring Call Types that replaces a previously
     *         configured list. By convention, an element of this type may be set 
     *         nill to clear the list.
     */
    public function setMatchCallType(ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
        $this->matchCallType = ReplacementCommunicationBarringCallTypeList $matchCallType;
    }

    /**
     * A list of Communication Barring Call Types that replaces a previously
     *         configured list. By convention, an element of this type may be set 
     *         nill to clear the list.
     */
    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->getValue();
    }

    /**
     * A list of Communication Barring Alternate Call Indicator that replaces
     *         a previously configured list. By convention, an element of this type
     *         may be set nill to clear the list.
     */
    public function setMatchAlternateCallIndicator(ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator;
    }

    /**
     * A list of Communication Barring Alternate Call Indicator that replaces
     *         a previously configured list. By convention, an element of this type
     *         may be set nill to clear the list.
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
