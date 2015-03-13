<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular Voice VPN policy selection.
 */
class SearchCriteriaExactPolicySelection extends ComplexType implements ComplexInterface
{
    public    $name            = 'SearchCriteriaExactPolicySelection';
    protected $policySelection = null;

    public function __construct(
         $policySelection
    ) {
        $this->setPolicySelection($policySelection);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPolicySelection($policySelection = null)
    {
        if (!$policySelection) return $this;
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->policySelection->setName('policySelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNPolicySelection $policySelection
     */
    public function getPolicySelection()
    {
        return $this->policySelection->getValue();
    }
}
