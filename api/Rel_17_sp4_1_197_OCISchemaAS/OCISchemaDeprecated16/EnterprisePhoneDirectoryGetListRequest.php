<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaYahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a table containing the phone directory for an enterprise.
 *          The directory includes all users in the enterprise and all entries in the enterprise common phone list.
 *          It is possible to search by various criteria to restrict the number of rows returned.
 *          Multiple search criteria are logically ANDed together.
 *          The response is either EnterprisePhoneDirectoryGetListResponse or ErrorResponse.
 * 
 *          Replace by: EnterprisePhoneDirectoryGetListRequest17
 */
class EnterprisePhoneDirectoryGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\EnterprisePhoneDirectoryGetListResponse';
    public    $name = 'EnterprisePhoneDirectoryGetListRequest';
    protected $enterpriseId;
    protected $isExtendedInfoRequested;
    protected $responseSizeLimit;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaGroupLocationCode;
    protected $searchCriteriaExtension;
    protected $searchCriteriaMobilePhoneNumber;
    protected $searchCriteriaEmailAddress;
    protected $searchCriteriaYahooId;
    protected $searchCriteriaExactUserGroup;
    protected $searchCriteriaExactUserDepartment;

    public function __construct(
         $enterpriseId = '',
         $isExtendedInfoRequested = '',
         $responseSizeLimit = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null,
         SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null,
         SearchCriteriaYahooId $searchCriteriaYahooId = null,
         SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setIsExtendedInfoRequested($isExtendedInfoRequested);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaYahooId($searchCriteriaYahooId);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\EnterprisePhoneDirectoryGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
        $this->enterpriseId->setName('enterpriseId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $enterpriseId
     */
    public function getEnterpriseId()
    {
        return ($this->enterpriseId) ? $this->enterpriseId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsExtendedInfoRequested($isExtendedInfoRequested = null)
    {
        $this->isExtendedInfoRequested = new PrimitiveType($isExtendedInfoRequested);
        $this->isExtendedInfoRequested->setName('isExtendedInfoRequested');
        return $this;
    }

    /**
     * 
     * @return boolean $isExtendedInfoRequested
     */
    public function getIsExtendedInfoRequested()
    {
        return ($this->isExtendedInfoRequested) ? $this->isExtendedInfoRequested->getValue() : null;
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
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
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
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
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
        $this->searchCriteriaDn->setName('searchCriteriaDn');
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
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode = ($searchCriteriaGroupLocationCode InstanceOf SearchCriteriaGroupLocationCode)
             ? $searchCriteriaGroupLocationCode
             : new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->searchCriteriaGroupLocationCode->setName('searchCriteriaGroupLocationCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setName('searchCriteriaExtension');
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
        $this->searchCriteriaMobilePhoneNumber->setName('searchCriteriaMobilePhoneNumber');
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

    /**
     * 
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        $this->searchCriteriaEmailAddress = ($searchCriteriaEmailAddress InstanceOf SearchCriteriaEmailAddress)
             ? $searchCriteriaEmailAddress
             : new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->searchCriteriaEmailAddress->setName('searchCriteriaEmailAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaYahooId(SearchCriteriaYahooId $searchCriteriaYahooId = null)
    {
        $this->searchCriteriaYahooId = ($searchCriteriaYahooId InstanceOf SearchCriteriaYahooId)
             ? $searchCriteriaYahooId
             : new SearchCriteriaYahooId($searchCriteriaYahooId);
        $this->searchCriteriaYahooId->setName('searchCriteriaYahooId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaYahooId $searchCriteriaYahooId
     */
    public function getSearchCriteriaYahooId()
    {
        return $this->searchCriteriaYahooId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        $this->searchCriteriaExactUserGroup = ($searchCriteriaExactUserGroup InstanceOf SearchCriteriaExactUserGroup)
             ? $searchCriteriaExactUserGroup
             : new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->searchCriteriaExactUserGroup->setName('searchCriteriaExactUserGroup');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        $this->searchCriteriaExactUserDepartment = ($searchCriteriaExactUserDepartment InstanceOf SearchCriteriaExactUserDepartment)
             ? $searchCriteriaExactUserDepartment
             : new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->searchCriteriaExactUserDepartment->setName('searchCriteriaExactUserDepartment');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }
}
