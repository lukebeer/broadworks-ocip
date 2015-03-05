<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the enterprise voice VPN level data associated with voice VPN.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $isActive=null,
             $defaultSelection=null,
             $e164Selection=null,
             $usePhoneContext=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->isActive          = $isActive;
        $this->defaultSelection  = $defaultSelection;
        $this->e164Selection     = $e164Selection;
        $this->usePhoneContext   = $usePhoneContext;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDefaultSelection($defaultSelection)
    {
        $defaultSelection and $this->defaultSelection = new EnterpriseVoiceVPNDefaultSelection($defaultSelection);
    }

    public function getDefaultSelection()
    {
        return (!$this->defaultSelection) ?: $this->defaultSelection->value();
    }

    public function setE164Selection($e164Selection)
    {
        $e164Selection and $this->e164Selection = new EnterpriseVoiceVPNNonMatchingE164NumberSelection($e164Selection);
    }

    public function getE164Selection()
    {
        return (!$this->e164Selection) ?: $this->e164Selection->value();
    }

    public function setUsePhoneContext($usePhoneContext)
    {
        $usePhoneContext and $this->usePhoneContext = new xs:boolean($usePhoneContext);
    }

    public function getUsePhoneContext()
    {
        return (!$this->usePhoneContext) ?: $this->usePhoneContext->value();
    }
}
