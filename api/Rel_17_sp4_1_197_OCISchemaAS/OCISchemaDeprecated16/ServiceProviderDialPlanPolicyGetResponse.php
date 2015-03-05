<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderDialPlanPolicyGetRequest
 *         
 *         Replaced by: ServiceProviderDialPlanPolicyGetResponse17
 */
class ServiceProviderDialPlanPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $requiresAccessCodeForPublicCalls,
             $allowE164PublicCalls,
             $publicDigitMap=null,
             $privateDigitMap=null
    ) {
        $this->requiresAccessCodeForPublicCalls = $requiresAccessCodeForPublicCalls;
        $this->allowE164PublicCalls             = $allowE164PublicCalls;
        $this->publicDigitMap                   = new DigitMap($publicDigitMap);
        $this->privateDigitMap                  = new DigitMap($privateDigitMap);
        $this->args                             = func_get_args();
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
