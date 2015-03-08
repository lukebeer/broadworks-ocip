<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Requests a list of groups using the specified carrier.  It is possible to restrict the
 *         number of rows returned by specifying various search criteria. Multiple search criteria
 *         are logically ANDed together.
 *         The response is either a SystemPreferredCarrierGetGroupListResponse or an ErrorResponse.
 */
class SystemPreferredCarrierGetGroupListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse';
    public    $name                               = __CLASS__;
    protected $carrier                            = null;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaGroupId              = null;
    protected $searchCriteriaGroupName            = null;
    protected $searchCriteriaExactServiceProvider = null;

    public function __construct(
         $carrier,
         $responseSizeLimit = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaGroupName $searchCriteriaGroupName = null,
         SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null
    ) {
        $this->setCarrier($carrier);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaGroupName($searchCriteriaGroupName);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function setCarrier($carrier = null)
    {
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
    }

    /**
     * Uniquely identifies a carrier.
     */
    public function getCarrier()
    {
        return (!$this->carrier) ?: $this->carrier->getValue();
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
     * Criteria for searching for a group ID.
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = SearchCriteriaGroupId $searchCriteriaGroupId;
    }

    /**
     * Criteria for searching for a group ID.
     */
    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->getValue();
    }

    /**
     * Criteria for searching for a group name.
     */
    public function setSearchCriteriaGroupName(SearchCriteriaGroupName $searchCriteriaGroupName = null)
    {
        $this->searchCriteriaGroupName = SearchCriteriaGroupName $searchCriteriaGroupName;
    }

    /**
     * Criteria for searching for a group name.
     */
    public function getSearchCriteriaGroupName()
    {
        return (!$this->searchCriteriaGroupName) ?: $this->searchCriteriaGroupName->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified service provider.
     */
    public function setSearchCriteriaExactServiceProvider(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null)
    {
        $this->searchCriteriaExactServiceProvider = SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider;
    }

    /**
     * Criteria for searching for a particular fully specified service provider.
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return (!$this->searchCriteriaExactServiceProvider) ?: $this->searchCriteriaExactServiceProvider->getValue();
    }
}
