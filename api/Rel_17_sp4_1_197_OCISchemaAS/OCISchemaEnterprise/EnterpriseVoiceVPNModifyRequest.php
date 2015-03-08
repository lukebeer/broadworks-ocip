<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the enterprise voice VPN level data associated with voice VPN.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $isActive          = null;
    protected $defaultSelection  = null;
    protected $e164Selection     = null;
    protected $usePhoneContext   = null;

    public function __construct(
         $serviceProviderId,
         $isActive = null,
         $defaultSelection = null,
         $e164Selection = null,
         $usePhoneContext = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsActive($isActive);
        $this->setDefaultSelection($defaultSelection);
        $this->setE164Selection($e164Selection);
        $this->setUsePhoneContext($usePhoneContext);
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
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Enterprise Voice VPN Default Selector.
     */
    public function setDefaultSelection($defaultSelection = null)
    {
        $this->defaultSelection = ($defaultSelection InstanceOf EnterpriseVoiceVPNDefaultSelection)
             ? $defaultSelection
             : new EnterpriseVoiceVPNDefaultSelection($defaultSelection);
    }

    /**
     * Enterprise Voice VPN Default Selector.
     */
    public function getDefaultSelection()
    {
        return (!$this->defaultSelection) ?: $this->defaultSelection->getValue();
    }

    /**
     * Enterprise Voice VPN Selector for Non Matching E164 Number.
     */
    public function setE164Selection($e164Selection = null)
    {
        $this->e164Selection = ($e164Selection InstanceOf EnterpriseVoiceVPNNonMatchingE164NumberSelection)
             ? $e164Selection
             : new EnterpriseVoiceVPNNonMatchingE164NumberSelection($e164Selection);
    }

    /**
     * Enterprise Voice VPN Selector for Non Matching E164 Number.
     */
    public function getE164Selection()
    {
        return (!$this->e164Selection) ?: $this->e164Selection->getValue();
    }

    /**
     * 
     */
    public function setUsePhoneContext($usePhoneContext = null)
    {
        $this->usePhoneContext = (boolean) $usePhoneContext;
    }

    /**
     * 
     */
    public function getUsePhoneContext()
    {
        return (!$this->usePhoneContext) ?: $this->usePhoneContext->getValue();
    }
}
