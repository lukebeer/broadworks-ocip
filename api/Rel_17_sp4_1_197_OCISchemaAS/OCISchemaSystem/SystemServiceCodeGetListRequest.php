<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaServiceCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaServiceCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or ErrorResponse.
 */
class SystemServiceCodeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $responseSizeLimit=null,
             $searchCriteriaServiceCode=null,
             $searchCriteriaServiceCodeDescription=null
    ) {
        $this->responseSizeLimit                    = $responseSizeLimit;
        $this->searchCriteriaServiceCode            = $searchCriteriaServiceCode;
        $this->searchCriteriaServiceCodeDescription = $searchCriteriaServiceCodeDescription;
        $this->args                                 = func_get_args();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaServiceCode($searchCriteriaServiceCode)
    {
        $searchCriteriaServiceCode and $this->searchCriteriaServiceCode = new SearchCriteriaServiceCode($searchCriteriaServiceCode);
    }

    public function getSearchCriteriaServiceCode()
    {
        return (!$this->searchCriteriaServiceCode) ?: $this->searchCriteriaServiceCode->value();
    }

    public function setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription)
    {
        $searchCriteriaServiceCodeDescription and $this->searchCriteriaServiceCodeDescription = new SearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
    }

    public function getSearchCriteriaServiceCodeDescription()
    {
        return (!$this->searchCriteriaServiceCodeDescription) ?: $this->searchCriteriaServiceCodeDescription->value();
    }
}
