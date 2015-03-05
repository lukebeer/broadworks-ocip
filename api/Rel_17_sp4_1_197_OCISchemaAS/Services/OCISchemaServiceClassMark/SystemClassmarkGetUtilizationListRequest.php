<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Classmark;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of all users associated with a Class Mark in system. It is possible to search by various criteria.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a SystemClassmarkGetUtilizationListResponse or an ErrorResponse.
 */
class SystemClassmarkGetUtilizationListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $classmark,
             $responseSizeLimit=null,
             $searchCriteriaGroupId=null,
             $searchCriteriaExactServiceProviderId=null,
             $searchCriteriaUserFirstName=null,
             $searchCriteriaUserLastName=null,
             $searchCriteriaDn=null
    ) {
        $this->classmark                            = $classmark;
        $this->responseSizeLimit                    = $responseSizeLimit;
        $this->searchCriteriaGroupId                = $searchCriteriaGroupId;
        $this->searchCriteriaExactServiceProviderId = $searchCriteriaExactServiceProviderId;
        $this->searchCriteriaUserFirstName          = $searchCriteriaUserFirstName;
        $this->searchCriteriaUserLastName           = $searchCriteriaUserLastName;
        $this->searchCriteriaDn                     = $searchCriteriaDn;
        $this->args                                 = func_get_args();
    }

    public function setClassmark($classmark)
    {
        $classmark and $this->classmark = new Classmark($classmark);
    }

    public function getClassmark()
    {
        return (!$this->classmark) ?: $this->classmark->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $searchCriteriaGroupId and $this->searchCriteriaGroupId = new SearchCriteriaGroupId($searchCriteriaGroupId);
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactServiceProviderId($searchCriteriaExactServiceProviderId)
    {
        $searchCriteriaExactServiceProviderId and $this->searchCriteriaExactServiceProviderId = new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProviderId);
    }

    public function getSearchCriteriaExactServiceProviderId()
    {
        return (!$this->searchCriteriaExactServiceProviderId) ?: $this->searchCriteriaExactServiceProviderId->value();
    }

    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $searchCriteriaUserFirstName and $this->searchCriteriaUserFirstName = new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
    }

    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->value();
    }

    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $searchCriteriaUserLastName and $this->searchCriteriaUserLastName = new SearchCriteriaUserLastName($searchCriteriaUserLastName);
    }

    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->value();
    }

    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $searchCriteriaDn and $this->searchCriteriaDn = new SearchCriteriaDn($searchCriteriaDn);
    }

    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->value();
    }
}
