<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests a list of groups within a service provider that have a given domain assigned.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ServiceProviderDomainGetAssignedGroupListResponse or an ErrorResponse.
 */
class ServiceProviderDomainGetAssignedGroupListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedGroupListResponse';
    public    $name = 'ServiceProviderDomainGetAssignedGroupListRequest';
    protected $serviceProviderId;
    protected $domain;
    protected $responseSizeLimit;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaGroupName;

    public function __construct(
         $serviceProviderId = '',
         $domain = '',
         $responseSizeLimit = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaGroupName $searchCriteriaGroupName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDomain($domain);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaGroupName($searchCriteriaGroupName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setDomain($domain = null)
    {
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
        $this->domain->setName('domain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $domain
     */
    public function getDomain()
    {
        return ($this->domain) ? $this->domain->getValue() : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit) ? $this->responseSizeLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupName(SearchCriteriaGroupName $searchCriteriaGroupName = null)
    {
        $this->searchCriteriaGroupName = ($searchCriteriaGroupName InstanceOf SearchCriteriaGroupName)
             ? $searchCriteriaGroupName
             : new SearchCriteriaGroupName($searchCriteriaGroupName);
        $this->searchCriteriaGroupName->setName('searchCriteriaGroupName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupName $searchCriteriaGroupName
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName;
    }
}
