<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDialPlanPolicySettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the Group level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialPlanPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $serviceProviderId                         = null;
    protected $groupId                                   = null;
    protected $useSetting                                = null;
    protected $requiresAccessCodeForPublicCalls          = null;
    protected $allowE164PublicCalls                      = null;
    protected $preferE164NumberFormatForCallbackServices = null;
    protected $publicDigitMap                            = null;
    protected $privateDigitMap                           = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useSetting = null,
         $requiresAccessCodeForPublicCalls = null,
         $allowE164PublicCalls = null,
         $preferE164NumberFormatForCallbackServices = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseSetting($useSetting);
        $this->setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls);
        $this->setAllowE164PublicCalls($allowE164PublicCalls);
        $this->setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
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
     * Choices for the group Dial Plan Policy to decide which type of settings shall be used.
     *         Notes: Choice cannot be 'sp' or 'group' if Service Provider or group does not have
     *         public digit map set.
     */
    public function setUseSetting($useSetting = null)
    {
        $this->useSetting = ($useSetting InstanceOf GroupDialPlanPolicySettingLevel)
             ? $useSetting
             : new GroupDialPlanPolicySettingLevel($useSetting);
    }

    /**
     * Choices for the group Dial Plan Policy to decide which type of settings shall be used.
     *         Notes: Choice cannot be 'sp' or 'group' if Service Provider or group does not have
     *         public digit map set.
     */
    public function getUseSetting()
    {
        return (!$this->useSetting) ?: $this->useSetting->getValue();
    }

    /**
     * 
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls = null)
    {
        $this->requiresAccessCodeForPublicCalls = (boolean) $requiresAccessCodeForPublicCalls;
    }

    /**
     * 
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return (!$this->requiresAccessCodeForPublicCalls) ?: $this->requiresAccessCodeForPublicCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls = null)
    {
        $this->allowE164PublicCalls = (boolean) $allowE164PublicCalls;
    }

    /**
     * 
     */
    public function getAllowE164PublicCalls()
    {
        return (!$this->allowE164PublicCalls) ?: $this->allowE164PublicCalls->getValue();
    }

    /**
     * 
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices = null)
    {
        $this->preferE164NumberFormatForCallbackServices = (boolean) $preferE164NumberFormatForCallbackServices;
    }

    /**
     * 
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return (!$this->preferE164NumberFormatForCallbackServices) ?: $this->preferE164NumberFormatForCallbackServices->getValue();
    }

    /**
     * Digit Collection Digit Map.
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
    }

    /**
     * Digit Collection Digit Map.
     */
    public function getPublicDigitMap()
    {
        return (!$this->publicDigitMap) ?: $this->publicDigitMap->getValue();
    }

    /**
     * Digit Collection Digit Map.
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
    }

    /**
     * Digit Collection Digit Map.
     */
    public function getPrivateDigitMap()
    {
        return (!$this->privateDigitMap) ?: $this->privateDigitMap->getValue();
    }
}
