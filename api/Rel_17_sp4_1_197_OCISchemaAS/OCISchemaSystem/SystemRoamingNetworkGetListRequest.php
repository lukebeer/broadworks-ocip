<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRoamingMscAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the list of all Roaming Networks.
 *         The response is either a SystemRoamingNetworkGetListResponse or an ErrorResponse.
 */
class SystemRoamingNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse';
    public    $name                            = __CLASS__;
    protected $responseSizeLimit               = null;
    protected $searchCriteriaRoamingMscAddress = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaRoamingMscAddress($searchCriteriaRoamingMscAddress);
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
     * Criteria for searching for a system Roaming Network Msc Address.
     */
    public function setSearchCriteriaRoamingMscAddress(SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress = null)
    {
        $this->searchCriteriaRoamingMscAddress = SearchCriteriaRoamingMscAddress $searchCriteriaRoamingMscAddress;
    }

    /**
     * Criteria for searching for a system Roaming Network Msc Address.
     */
    public function getSearchCriteriaRoamingMscAddress()
    {
        return (!$this->searchCriteriaRoamingMscAddress) ?: $this->searchCriteriaRoamingMscAddress->getValue();
    }
}