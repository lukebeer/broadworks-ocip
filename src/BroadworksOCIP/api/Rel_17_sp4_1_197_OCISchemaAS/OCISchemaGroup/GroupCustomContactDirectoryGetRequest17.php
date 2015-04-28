<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaMobilePhoneNumber;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Gets a Custom Contact Directory in a group.
 *         The response is either GroupCustomContactDirectoryGetResponse17 or 
 *         ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class GroupCustomContactDirectoryGetRequest17 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCustomContactDirectoryGetResponse17';
    public    $elementName = 'GroupCustomContactDirectoryGetRequest17';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $responseSizeLimit;
    protected $searchCriteriaModeOr;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaExtension;
    protected $searchCriteriaMobilePhoneNumber;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
         $responseSizeLimit = null,
         $searchCriteriaModeOr = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaUserFirstName = null,
         $searchCriteriaDn = null,
         $searchCriteriaExtension = null,
         $searchCriteriaMobilePhoneNumber = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCustomContactDirectoryGetResponse17 $response
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CustomContactDirectoryName)
             ? $name
             : new CustomContactDirectoryName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setElementName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return boolean $searchCriteriaModeOr
     */
    public function getSearchCriteriaModeOr()
    {
        return ($this->searchCriteriaModeOr)
            ? $this->searchCriteriaModeOr->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setElementName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setElementName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setElementName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setElementName('searchCriteriaExtension');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExtension $searchCriteriaExtension
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * 
     */
    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
        $this->searchCriteriaMobilePhoneNumber = ($searchCriteriaMobilePhoneNumber InstanceOf SearchCriteriaMobilePhoneNumber)
             ? $searchCriteriaMobilePhoneNumber
             : new SearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->searchCriteriaMobilePhoneNumber->setElementName('searchCriteriaMobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return $this->searchCriteriaMobilePhoneNumber;
    }
}
