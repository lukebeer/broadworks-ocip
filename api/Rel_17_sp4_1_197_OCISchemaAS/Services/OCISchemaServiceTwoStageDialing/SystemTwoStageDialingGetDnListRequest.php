<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSystemServiceDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get a list of Two Stage Dialing dns defined in the system.
 *           The response is either a SystemTwoStageDialingGetDnListResponse
 *           or an ErrorResponse.
 */
class SystemTwoStageDialingGetDnListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse';
    public    $name                          = __CLASS__;
    protected $responseSizeLimit             = null;
    protected $searchCriteriaSystemServiceDn = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaSystemServiceDn = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
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
     * Criteria for searching for a system service DN.
     */
    public function setSearchCriteriaSystemServiceDn(SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn = null)
    {
        $this->searchCriteriaSystemServiceDn =  $searchCriteriaSystemServiceDn;
    }

    /**
     * Criteria for searching for a system service DN.
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return (!$this->searchCriteriaSystemServiceDn) ?: $this->searchCriteriaSystemServiceDn->getValue();
    }
}
