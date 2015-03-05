<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDialPlanPolicySettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Group level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDialPlanPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useSetting=null,
             $requiresAccessCodeForPublicCalls=null,
             $allowE164PublicCalls=null,
             $preferE164NumberFormatForCallbackServices=null,
             $publicDigitMap=null,
             $privateDigitMap=null
    ) {
        $this->serviceProviderId                         = new ServiceProviderId($serviceProviderId);
        $this->groupId                                   = new GroupId($groupId);
        $this->useSetting                                = new GroupDialPlanPolicySettingLevel($useSetting);
        $this->requiresAccessCodeForPublicCalls          = $requiresAccessCodeForPublicCalls;
        $this->allowE164PublicCalls                      = $allowE164PublicCalls;
        $this->preferE164NumberFormatForCallbackServices = $preferE164NumberFormatForCallbackServices;
        $this->publicDigitMap                            = new DigitMap($publicDigitMap);
        $this->privateDigitMap                           = new DigitMap($privateDigitMap);
        $this->args                                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseSetting($useSetting)
    {
        $useSetting and $this->useSetting = new GroupDialPlanPolicySettingLevel($useSetting);
    }

    public function getUseSetting()
    {
        return (!$this->useSetting) ?: $this->useSetting->value();
    }

    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls)
    {
        $requiresAccessCodeForPublicCalls and $this->requiresAccessCodeForPublicCalls = new xs:boolean($requiresAccessCodeForPublicCalls);
    }

    public function getRequiresAccessCodeForPublicCalls()
    {
        return (!$this->requiresAccessCodeForPublicCalls) ?: $this->requiresAccessCodeForPublicCalls->value();
    }

    public function setAllowE164PublicCalls($allowE164PublicCalls)
    {
        $allowE164PublicCalls and $this->allowE164PublicCalls = new xs:boolean($allowE164PublicCalls);
    }

    public function getAllowE164PublicCalls()
    {
        return (!$this->allowE164PublicCalls) ?: $this->allowE164PublicCalls->value();
    }

    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices)
    {
        $preferE164NumberFormatForCallbackServices and $this->preferE164NumberFormatForCallbackServices = new xs:boolean($preferE164NumberFormatForCallbackServices);
    }

    public function getPreferE164NumberFormatForCallbackServices()
    {
        return (!$this->preferE164NumberFormatForCallbackServices) ?: $this->preferE164NumberFormatForCallbackServices->value();
    }

    public function setPublicDigitMap($publicDigitMap)
    {
        $publicDigitMap and $this->publicDigitMap = new DigitMap($publicDigitMap);
    }

    public function getPublicDigitMap()
    {
        return (!$this->publicDigitMap) ?: $this->publicDigitMap->value();
    }

    public function setPrivateDigitMap($privateDigitMap)
    {
        $privateDigitMap and $this->privateDigitMap = new DigitMap($privateDigitMap);
    }

    public function getPrivateDigitMap()
    {
        return (!$this->privateDigitMap) ?: $this->privateDigitMap->value();
    }
}
