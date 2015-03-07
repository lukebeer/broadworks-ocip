<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the list of Service Instances in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetServiceInstanceListInSystemResponse or an ErrorResponse.
 */
class UserGetServiceInstanceListInSystemRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $responseSizeLimit                   = null;
    protected $searchCriteriaExactServiceType      = null;
    protected $searchCriteriaUserId                = null;
    protected $searchCriteriaUserLastName          = null;
    protected $searchCriteriaDn                    = null;
    protected $searchCriteriaExtension             = null;
    protected $searchCriteriaGroupId               = null;
    protected $searchCriteriaExactServiceProvider  = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaExactServiceType $searchCriteriaExactServiceType = null,
         SearchCriteriaUserId $searchCriteriaUserId = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaExactServiceType($searchCriteriaExactServiceType);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
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

    public function setSearchCriteriaExactServiceType(SearchCriteriaExactServiceType $searchCriteriaExactServiceType = null)
    {
    }

    public function getSearchCriteriaExactServiceType()
    {
        return (!$this->searchCriteriaExactServiceType) ?: $this->searchCriteriaExactServiceType->value();
    }

    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
    }

    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->value();
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

    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
    }

    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->value();
    }

    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
    }

    public function getSearchCriteriaGroupId()
    {
        return (!$this->searchCriteriaGroupId) ?: $this->searchCriteriaGroupId->value();
    }

    public function setSearchCriteriaExactServiceProvider(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null)
    {
    }

    public function getSearchCriteriaExactServiceProvider()
    {
        return (!$this->searchCriteriaExactServiceProvider) ?: $this->searchCriteriaExactServiceProvider->value();
    }
}
