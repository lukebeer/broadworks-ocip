<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaIMRN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of BroadWorks Mobility IMRN numbers defined in the system.
 *         The response is either a SystemBroadWorksMobilityIMRNGetListResponse
 *         or an ErrorResponse.
 */
class SystemBroadWorksMobilityGetIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $searchCriteriaIMRN  = null;

    public function __construct(
         SearchCriteriaIMRN $searchCriteriaIMRN = null
    ) {
        $this->setSearchCriteriaIMRN($searchCriteriaIMRN);
    }

    public function setSearchCriteriaIMRN(SearchCriteriaIMRN $searchCriteriaIMRN = null)
    {
    }

    public function getSearchCriteriaIMRN()
    {
        return (!$this->searchCriteriaIMRN) ?: $this->searchCriteriaIMRN->value();
    }
}
