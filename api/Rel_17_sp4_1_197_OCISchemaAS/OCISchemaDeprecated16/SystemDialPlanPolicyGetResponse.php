<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemDialPlanPolicyGetRequest
 *         
 *         Replaced by: SystemDialPlanPolicyGetResponse17
 */
class SystemDialPlanPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $requiresAccessCodeForPublicCalls = null;
    protected $allowE164PublicCalls             = null;
    protected $publicDigitMap                   = null;
    protected $privateDigitMap                  = null;


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
