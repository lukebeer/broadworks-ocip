<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDialPlanPolicySettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupDialPlanPolicyGetRequest
 * 
 *         Replaced by: GroupDialPlanPolicyGetResponse17
 */
class GroupDialPlanPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $useSetting                        = null;
    protected $requiresAccessCodeForPublicCalls  = null;
    protected $allowE164PublicCalls              = null;
    protected $publicDigitMap                    = null;
    protected $privateDigitMap                   = null;


    public function setUseSetting($useSetting = null)
    {
        $this->useSetting = ($useSetting InstanceOf GroupDialPlanPolicySettingLevel)
             ? $useSetting
             : new GroupDialPlanPolicySettingLevel($useSetting);
    }

    public function getUseSetting()
    {
        return (!$this->useSetting) ?: $this->useSetting->value();
    }

    public function setRequiresAccessCodeForPublicCalls(xs:boolean $requiresAccessCodeForPublicCalls = null)
    {
    }

    public function getRequiresAccessCodeForPublicCalls()
    {
        return (!$this->requiresAccessCodeForPublicCalls) ?: $this->requiresAccessCodeForPublicCalls->value();
    }

    public function setAllowE164PublicCalls(xs:boolean $allowE164PublicCalls = null)
    {
    }

    public function getAllowE164PublicCalls()
    {
        return (!$this->allowE164PublicCalls) ?: $this->allowE164PublicCalls->value();
    }

    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
    }

    public function getPublicDigitMap()
    {
        return (!$this->publicDigitMap) ?: $this->publicDigitMap->value();
    }

    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
    }

    public function getPrivateDigitMap()
    {
        return (!$this->privateDigitMap) ?: $this->privateDigitMap->value();
    }
}
