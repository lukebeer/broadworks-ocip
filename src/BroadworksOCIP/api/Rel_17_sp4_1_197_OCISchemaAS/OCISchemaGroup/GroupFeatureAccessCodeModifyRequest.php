<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify group FAC code level and the list of feature access codes for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: choice element is only valid when useFeatureAccessCodeLevel is set to "Group", otherwise an ErrorResponse will be returned.
 */
class GroupFeatureAccessCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupFeatureAccessCodeModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $useFeatureAccessCodeLevel;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $useFeatureAccessCodeLevel = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel = null)
    {
        $this->useFeatureAccessCodeLevel = ($useFeatureAccessCodeLevel InstanceOf GroupFeatureAccessCodeLevel)
             ? $useFeatureAccessCodeLevel
             : new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
        $this->useFeatureAccessCodeLevel->setElementName('useFeatureAccessCodeLevel');
        return $this;
    }

    /**
     * 
     * @return GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return ($this->useFeatureAccessCodeLevel)
            ? $this->useFeatureAccessCodeLevel->getElementValue()
            : null;
    }
}
