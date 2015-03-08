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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the list of Voice VPN locations.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseVoiceVPNGetPolicyListResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNGetPolicyListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse';
    public    $name                               = __CLASS__;
    protected $serviceProviderId                  = null;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaGroupLocationCode    = null;
    protected $searchCriteriaExactPolicySelection = null;

    public function __construct(
         $serviceProviderId,
         $responseSizeLimit = null,
          $searchCriteriaGroupLocationCode = null,
          $searchCriteriaExactPolicySelection = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExactPolicySelection($searchCriteriaExactPolicySelection);
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
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for a group location dialing code.
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode =  $searchCriteriaGroupLocationCode;
    }

    /**
     * Criteria for searching for a group location dialing code.
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->getValue();
    }

    /**
     * Criteria for searching for a particular Voice VPN policy selection.
     */
    public function setSearchCriteriaExactPolicySelection(SearchCriteriaExactPolicySelection $searchCriteriaExactPolicySelection = null)
    {
        $this->searchCriteriaExactPolicySelection =  $searchCriteriaExactPolicySelection;
    }

    /**
     * Criteria for searching for a particular Voice VPN policy selection.
     */
    public function getSearchCriteriaExactPolicySelection()
    {
        return (!$this->searchCriteriaExactPolicySelection) ?: $this->searchCriteriaExactPolicySelection->getValue();
    }
}
