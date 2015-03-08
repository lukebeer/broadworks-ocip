<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the list of groups in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a GroupGetListInSystemResponse or an ErrorResponse.
 */
class GroupGetListInSystemRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupGetListInSystemResponse';
    public    $name                               = __CLASS__;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaGroupId              = null;
    protected $searchCriteriaGroupName            = null;
    protected $searchCriteriaExactServiceProvider = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaGroupId = null,
          $searchCriteriaGroupName = null,
          $searchCriteriaExactServiceProvider = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaGroupName($searchCriteriaGroupName);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
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
        $this->searchCriteriaGroupId =  $searchCriteriaGroupId;
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
        $this->searchCriteriaGroupName =  $searchCriteriaGroupName;
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
        $this->searchCriteriaExactServiceProvider =  $searchCriteriaExactServiceProvider;
    }

    /**
     * Criteria for searching for a particular fully specified service provider.
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return (!$this->searchCriteriaExactServiceProvider) ?: $this->searchCriteriaExactServiceProvider->getValue();
    }
}
