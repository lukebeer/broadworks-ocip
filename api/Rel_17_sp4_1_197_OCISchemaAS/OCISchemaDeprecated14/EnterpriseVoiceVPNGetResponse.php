<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseVoiceVPNGetRequest.
 *         Replaced By: EnterpriseVoiceVPNGetResponse14sp3
 */
class EnterpriseVoiceVPNGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnterpriseVoiceVPNGetResponse';
    public    $name             = __CLASS__;
    protected $isActive         = null;
    protected $defaultSelection = null;
    protected $e164Selection    = null;


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
}
