<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantAddMenu16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Auto Attendant instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAutoAttendantAddInstanceRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupAutoAttendantAddInstanceRequest16';
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $serviceUserId          = null;
    protected $serviceInstanceProfile = null;
    protected $enableVideo            = null;
    protected $businessHours          = null;
    protected $holidayScheduleName    = null;
    protected $extensionDialingScope  = null;
    protected $nameDialingScope       = null;
    protected $nameDialingEntries     = null;
    protected $businessHoursMenu      = null;
    protected $afterHoursMenu         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         $enableVideo,
         $businessHours = null,
         $holidayScheduleName = null,
         $extensionDialingScope,
         $nameDialingScope,
         $nameDialingEntries,
         AutoAttendantAddMenu16 $businessHoursMenu = null,
         AutoAttendantAddMenu16 $afterHoursMenu = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setEnableVideo($enableVideo);
        $this->setBusinessHours($businessHours);
        $this->setHolidayScheduleName($holidayScheduleName);
        $this->setExtensionDialingScope($extensionDialingScope);
        $this->setNameDialingScope($nameDialingScope);
        $this->setNameDialingEntries($nameDialingEntries);
        $this->setBusinessHoursMenu($businessHoursMenu);
        $this->setAfterHoursMenu($afterHoursMenu);
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
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
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        if (!$enableVideo) return $this;
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return $this->enableVideo->getValue();
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        if (!$businessHours) return $this;
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return $this->businessHours->getValue();
    }

    /**
     * 
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        if (!$holidayScheduleName) return $this;
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName->getValue();
    }

    /**
     * 
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        if (!$extensionDialingScope) return $this;
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $extensionDialingScope
     */
    public function getExtensionDialingScope()
    {
        return $this->extensionDialingScope->getValue();
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        if (!$nameDialingScope) return $this;
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $nameDialingScope
     */
    public function getNameDialingScope()
    {
        return $this->nameDialingScope->getValue();
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        if (!$nameDialingEntries) return $this;
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry $nameDialingEntries
     */
    public function getNameDialingEntries()
    {
        return $this->nameDialingEntries->getValue();
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantAddMenu16 $businessHoursMenu = null)
    {
        if (!$businessHoursMenu) return $this;
        $this->businessHoursMenu = $businessHoursMenu;
        $this->businessHoursMenu->setName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantAddMenu16 $businessHoursMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantAddMenu16 $afterHoursMenu = null)
    {
        if (!$afterHoursMenu) return $this;
        $this->afterHoursMenu = $afterHoursMenu;
        $this->afterHoursMenu->setName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantAddMenu16 $afterHoursMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}
