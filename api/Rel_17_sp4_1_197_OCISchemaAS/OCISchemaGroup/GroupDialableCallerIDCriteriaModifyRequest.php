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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialableCallerIDCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupDialableCallerIDCriteriaModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $newName;
    protected $description;
    protected $prefixDigits;
    protected $matchCallType;
    protected $matchAlternateCallIndicator;
    protected $matchLocalCategory;
    protected $matchNationalCategory;
    protected $matchInterlataCategory;
    protected $matchIntralataCategory;
    protected $matchInternationalCategory;
    protected $matchPrivateCategory;
    protected $matchEmergencyCategory;
    protected $matchOtherCategory;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf DialableCallerIDCriteriaName)
             ? $newName
             : new DialableCallerIDCriteriaName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaName $newName
     */
    public function getNewName()
    {
        return ($this->newName) ? $this->newName->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialableCallerIDCriteriaDescription)
             ? $description
             : new DialableCallerIDCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf DialableCallerIDPrefixDigits)
             ? $prefixDigits
             : new DialableCallerIDPrefixDigits($prefixDigits);
        $this->prefixDigits->setName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDPrefixDigits $prefixDigits
     */
    public function getPrefixDigits()
    {
        return ($this->prefixDigits) ? $this->prefixDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchCallType(ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf ReplacementCommunicationBarringCallTypeList)
             ? $matchCallType
             : new ReplacementCommunicationBarringCallTypeList($matchCallType);
        $this->matchCallType->setName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringCallTypeList $matchCallType
     */
    public function getMatchCallType()
    {
        return $this->matchCallType;
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator(ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf ReplacementCommunicationBarringAlternateCallIndicatorList)
             ? $matchAlternateCallIndicator
             : new ReplacementCommunicationBarringAlternateCallIndicatorList($matchAlternateCallIndicator);
        $this->matchAlternateCallIndicator->setName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator;
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        $this->matchLocalCategory = new PrimitiveType($matchLocalCategory);
        $this->matchLocalCategory->setName('matchLocalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchLocalCategory
     */
    public function getMatchLocalCategory()
    {
        return ($this->matchLocalCategory) ? $this->matchLocalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        $this->matchNationalCategory = new PrimitiveType($matchNationalCategory);
        $this->matchNationalCategory->setName('matchNationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNationalCategory
     */
    public function getMatchNationalCategory()
    {
        return ($this->matchNationalCategory) ? $this->matchNationalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        $this->matchInterlataCategory = new PrimitiveType($matchInterlataCategory);
        $this->matchInterlataCategory->setName('matchInterlataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterlataCategory
     */
    public function getMatchInterlataCategory()
    {
        return ($this->matchInterlataCategory) ? $this->matchInterlataCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        $this->matchIntralataCategory = new PrimitiveType($matchIntralataCategory);
        $this->matchIntralataCategory->setName('matchIntralataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchIntralataCategory
     */
    public function getMatchIntralataCategory()
    {
        return ($this->matchIntralataCategory) ? $this->matchIntralataCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        $this->matchInternationalCategory = new PrimitiveType($matchInternationalCategory);
        $this->matchInternationalCategory->setName('matchInternationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInternationalCategory
     */
    public function getMatchInternationalCategory()
    {
        return ($this->matchInternationalCategory) ? $this->matchInternationalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        $this->matchPrivateCategory = new PrimitiveType($matchPrivateCategory);
        $this->matchPrivateCategory->setName('matchPrivateCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchPrivateCategory
     */
    public function getMatchPrivateCategory()
    {
        return ($this->matchPrivateCategory) ? $this->matchPrivateCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        $this->matchEmergencyCategory = new PrimitiveType($matchEmergencyCategory);
        $this->matchEmergencyCategory->setName('matchEmergencyCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchEmergencyCategory
     */
    public function getMatchEmergencyCategory()
    {
        return ($this->matchEmergencyCategory) ? $this->matchEmergencyCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        $this->matchOtherCategory = new PrimitiveType($matchOtherCategory);
        $this->matchOtherCategory->setName('matchOtherCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchOtherCategory
     */
    public function getMatchOtherCategory()
    {
        return ($this->matchOtherCategory) ? $this->matchOtherCategory->getValue() : null;
    }
}
