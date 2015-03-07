<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of all users associated with a Class Mark in system. It is possible to search by various criteria.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a SystemClassmarkGetUtilizationListResponse or an ErrorResponse.
 */
class SystemClassmarkGetUtilizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $classmark                             = null;
    protected $responseSizeLimit                     = null;
    protected $searchCriteriaGroupId                 = null;
    protected $searchCriteriaExactServiceProviderId  = null;
    protected $searchCriteriaUserFirstName           = null;
    protected $searchCriteriaUserLastName            = null;
    protected $searchCriteriaDn                      = null;

    public function __construct(
         $classmark,
         $responseSizeLimit = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProviderId = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaDn $searchCriteriaDn = null
    ) {
        $this->setClassmark($classmark);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactServiceProviderId($searchCriteriaExactServiceProviderId);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
    }

    public function setClassmark($classmark = null)
    {
        $this->classmark = ($classmark InstanceOf Classmark)
             ? $classmark
             : new Classmark($classmark);
    }

    public function getClassmark()
    {
        return (!$this->classmark) ?: $this->classmark->value();
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

    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactServiceProviderId(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProviderId = null)
    {
    }

    public function getSearchCriteriaExactServiceProviderId()
    {
        return (!$this->searchCriteriaExactServiceProviderId) ?: $this->searchCriteriaExactServiceProviderId->value();
    }

    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }
}
