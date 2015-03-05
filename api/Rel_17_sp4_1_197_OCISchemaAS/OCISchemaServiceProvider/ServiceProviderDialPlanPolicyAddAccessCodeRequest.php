<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a Service Provider level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDialPlanPolicyAddAccessCodeRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $accessCode,
             $includeCodeForNetworkTranslationsAndRouting,
             $includeCodeForScreeningServices,
             $enableSecondaryDialTone,
             $description=null
    ) {
        $this->serviceProviderId                           = new ServiceProviderId($serviceProviderId);
        $this->accessCode                                  = new DialPlanAccessCode($accessCode);
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        $this->includeCodeForScreeningServices             = $includeCodeForScreeningServices;
        $this->enableSecondaryDialTone                     = $enableSecondaryDialTone;
        $this->description                                 = new DialPlanAccessCodeDescription($description);
        $this->args                                        = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setAccessCode($accessCode)
    {
        $accessCode and $this->accessCode = new DialPlanAccessCode($accessCode);
    }

    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->value();
    }

    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $includeCodeForNetworkTranslationsAndRouting and $this->includeCodeForNetworkTranslationsAndRouting = new xs:boolean($includeCodeForNetworkTranslationsAndRouting);
    }

    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return (!$this->includeCodeForNetworkTranslationsAndRouting) ?: $this->includeCodeForNetworkTranslationsAndRouting->value();
    }

    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $includeCodeForScreeningServices and $this->includeCodeForScreeningServices = new xs:boolean($includeCodeForScreeningServices);
    }

    public function getIncludeCodeForScreeningServices()
    {
        return (!$this->includeCodeForScreeningServices) ?: $this->includeCodeForScreeningServices->value();
    }

    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $enableSecondaryDialTone and $this->enableSecondaryDialTone = new xs:boolean($enableSecondaryDialTone);
    }

    public function getEnableSecondaryDialTone()
    {
        return (!$this->enableSecondaryDialTone) ?: $this->enableSecondaryDialTone->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new DialPlanAccessCodeDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}
