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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInSystemResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of Service Instances in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetServiceInstanceListInSystemResponse or an ErrorResponse.
 */
class UserGetServiceInstanceListInSystemRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInSystemResponse';
    public    $name                               = __CLASS__;
    protected $responseSizeLimit                  = null;
    protected $searchCriteriaExactServiceType     = null;
    protected $searchCriteriaUserId               = null;
    protected $searchCriteriaUserLastName         = null;
    protected $searchCriteriaDn                   = null;
    protected $searchCriteriaExtension            = null;
    protected $searchCriteriaGroupId              = null;
    protected $searchCriteriaExactServiceProvider = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaExactServiceType = null,
          $searchCriteriaUserId = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaDn = null,
          $searchCriteriaExtension = null,
          $searchCriteriaGroupId = null,
          $searchCriteriaExactServiceProvider = null
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

    /**
     * @return UserGetServiceInstanceListInSystemResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Criteria for searching for a particular fully specified service type.
     */
    public function setSearchCriteriaExactServiceType(SearchCriteriaExactServiceType $searchCriteriaExactServiceType = null)
    {
        $this->searchCriteriaExactServiceType =  $searchCriteriaExactServiceType;
    }

    /**
     * Criteria for searching for a particular fully specified service type.
     */
    public function getSearchCriteriaExactServiceType()
    {
        return (!$this->searchCriteriaExactServiceType) ?: $this->searchCriteriaExactServiceType->getValue();
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId =  $searchCriteriaUserId;
    }

    /**
     * Criteria for searching for a user's userId.
     */
    public function getSearchCriteriaUserId()
    {
        return (!$this->searchCriteriaUserId) ?: $this->searchCriteriaUserId->getValue();
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName =  $searchCriteriaUserLastName;
    }

    /**
     * Criteria for searching for a user's last name.
     */
    public function getSearchCriteriaUserLastName()
    {
        return (!$this->searchCriteriaUserLastName) ?: $this->searchCriteriaUserLastName->getValue();
    }

    /**
     * Criteria for searching for a DN.
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn =  $searchCriteriaDn;
    }

    /**
     * Criteria for searching for a DN.
     */
    public function getSearchCriteriaDn()
    {
        return (!$this->searchCriteriaDn) ?: $this->searchCriteriaDn->getValue();
    }

    /**
     * Criteria for searching for an extension.
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension =  $searchCriteriaExtension;
    }

    /**
     * Criteria for searching for an extension.
     */
    public function getSearchCriteriaExtension()
    {
        return (!$this->searchCriteriaExtension) ?: $this->searchCriteriaExtension->getValue();
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
