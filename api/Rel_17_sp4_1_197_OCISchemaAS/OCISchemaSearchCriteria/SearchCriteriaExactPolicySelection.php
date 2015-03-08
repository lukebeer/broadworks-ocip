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
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactPolicySelection';
    public    $name            = __CLASS__;
    protected $policySelection = null;

    public function __construct(
         $policySelection
    ) {
        $this->setPolicySelection($policySelection);
    }

    /**
     * Enterprise Voice VPN Location Selection.
     */
    public function setPolicySelection($policySelection = null)
    {
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    /**
     * Enterprise Voice VPN Location Selection.
     */
    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->getValue();
    }
}
