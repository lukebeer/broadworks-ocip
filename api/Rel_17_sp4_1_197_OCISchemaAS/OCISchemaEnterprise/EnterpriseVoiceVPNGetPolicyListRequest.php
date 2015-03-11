<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse';
    public    $name                               = 'EnterpriseVoiceVPNGetPolicyListRequest';
    protected $serviceProviderId                  = null;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaGroupLocationCode    = null;
    protected $searchCriteriaExactPolicySelection = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
         SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null,
         SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
    }

    /**
     * @return EnterpriseVoiceVPNGetPolicyListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        if (!$searchCriteriaGroupLocationCode) return $this;
        $this->searchCriteriaGroupLocationCode = ($searchCriteriaGroupLocationCode InstanceOf SearchCriteriaGroupLocationCode)
             ? $searchCriteriaGroupLocationCode
             : new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->searchCriteriaGroupLocationCode->setName('searchCriteriaGroupLocationCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupLocationCode
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactPolicySelection(SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection = null)
    {
        if (!$searchCriteriaExactPolicySelection) return $this;
        $this->searchCriteriaExactPolicySelection = ($searchCriteriaExactPolicySelection InstanceOf SearchCriteriaExactPolicySelection)
             ? $searchCriteriaExactPolicySelection
             : new SearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
        $this->searchCriteriaExactPolicySelection->setName('searchCriteriaExactPolicySelection');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactPolicySelection
     */
    public function getSearchCriteriaExactPolicySelection()
    {
        return $this->searchCriteriaExactPolicySelection;
    }
}
