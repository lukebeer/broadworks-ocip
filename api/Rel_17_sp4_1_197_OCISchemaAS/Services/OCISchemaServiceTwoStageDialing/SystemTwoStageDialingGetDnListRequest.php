<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaSystemServiceDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a list of Two Stage Dialing dns defined in the system.
 *           The response is either a SystemTwoStageDialingGetDnListResponse
 *           or an ErrorResponse.
 */
class SystemTwoStageDialingGetDnListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaSystemServiceDn=null
    ) {
        $this->responseSizeLimit             = $responseSizeLimit;
        $this->searchCriteriaSystemServiceDn = $searchCriteriaSystemServiceDn;
        $this->args                          = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn)
    {
        $searchCriteriaSystemServiceDn and $this->searchCriteriaSystemServiceDn = new SearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
    }

    public function getSearchCriteriaSystemServiceDn()
    {
        return (!$this->searchCriteriaSystemServiceDn) ?: $this->searchCriteriaSystemServiceDn->value();
    }
}
