<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular Voice VPN policy selection.
 */
class SearchCriteriaExactPolicySelection extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $policySelection
    ) {
        $this->policySelection = new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->args            = func_get_args();
    }

    public function setPolicySelection($policySelection)
    {
        $policySelection and $this->policySelection = new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->value();
    }
}
