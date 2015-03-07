<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
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
    public    $name                                  = __CLASS__;
    protected $responseSizeLimit                     = null;
    protected $searchCriteriaServiceCode             = null;
    protected $searchCriteriaServiceCodeDescription  = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaServiceCode $searchCriteriaServiceCode = null,
         SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
    }

    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaServiceCode(SearchCriteriaServiceCode $searchCriteriaServiceCode = null)
    {
    }

    public function getSearchCriteriaServiceCode()
    {
        return (!$this->searchCriteriaServiceCode) ?: $this->searchCriteriaServiceCode->value();
    }

    public function setSearchCriteriaServiceCodeDescription(SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null)
    {
    }

    public function getSearchCriteriaServiceCodeDescription()
    {
        return (!$this->searchCriteriaServiceCodeDescription) ?: $this->searchCriteriaServiceCodeDescription->value();
    }
}
