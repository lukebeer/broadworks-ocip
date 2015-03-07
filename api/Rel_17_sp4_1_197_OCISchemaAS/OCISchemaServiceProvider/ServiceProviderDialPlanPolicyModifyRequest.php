<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Service Provider level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialPlanPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $serviceProviderId                          = null;
    protected $requiresAccessCodeForPublicCalls           = null;
    protected $allowE164PublicCalls                       = null;
    protected $preferE164NumberFormatForCallbackServices  = null;
    protected $publicDigitMap                             = null;
    protected $privateDigitMap                            = null;

    public function __construct(
         $serviceProviderId,
         $requiresAccessCodeForPublicCalls = null,
         $allowE164PublicCalls = null,
         $preferE164NumberFormatForCallbackServices = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls);
        $this->setAllowE164PublicCalls($allowE164PublicCalls);
        $this->setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
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

    public function setPreferE164NumberFormatForCallbackServices(xs:boolean $preferE164NumberFormatForCallbackServices = null)
    {
    }

    public function getPreferE164NumberFormatForCallbackServices()
    {
        return (!$this->preferE164NumberFormatForCallbackServices) ?: $this->preferE164NumberFormatForCallbackServices->value();
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
