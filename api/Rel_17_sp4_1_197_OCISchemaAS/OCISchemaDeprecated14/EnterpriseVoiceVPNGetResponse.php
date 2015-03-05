<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseVoiceVPNGetRequest.
 *         Replaced By: EnterpriseVoiceVPNGetResponse14sp3
 */
class EnterpriseVoiceVPNGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $defaultSelection,
             $e164Selection
    ) {
        $this->isActive         = $isActive;
        $this->defaultSelection = $defaultSelection;
        $this->e164Selection    = $e164Selection;
        $this->args             = func_get_args();
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
}
