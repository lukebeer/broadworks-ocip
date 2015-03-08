<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaHomeMscAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the list of all Home Networks.
 *         The response is either a SystemHomeNetworkGetListResponse or an ErrorResponse.
 */
class SystemHomeNetworkGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemHomeNetworkGetListResponse';
    public    $name                         = __CLASS__;
    protected $responseSizeLimit            = null;
    protected $searchCriteriaHomeMscAddress = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaHomeMscAddress = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaHomeMscAddress($searchCriteriaHomeMscAddress);
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
     * Criteria for searching for a system Home Network Msc Address.
     */
    public function setSearchCriteriaHomeMscAddress(SearchCriteriaHomeMscAddress $searchCriteriaHomeMscAddress = null)
    {
        $this->searchCriteriaHomeMscAddress =  $searchCriteriaHomeMscAddress;
    }

    /**
     * Criteria for searching for a system Home Network Msc Address.
     */
    public function getSearchCriteriaHomeMscAddress()
    {
        return (!$this->searchCriteriaHomeMscAddress) ?: $this->searchCriteriaHomeMscAddress->getValue();
    }
}
