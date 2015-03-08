<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request a table containing the phone directory for an enterprise.
 *         The directory includes all users in the enterprise and all entries in the enterprise common phone list.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either EnterprisePhoneDirectoryGetListResponse17 or ErrorResponse.
 */
class EnterprisePhoneDirectoryGetListRequest17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterprisePhoneDirectoryGetListResponse17';
    public    $name                              = __CLASS__;
    protected $enterpriseId                      = null;
    protected $isExtendedInfoRequested           = null;
    protected $responseSizeLimit                 = null;
    protected $searchCriteriaUserLastName        = null;
    protected $searchCriteriaUserFirstName       = null;
    protected $searchCriteriaDn                  = null;
    protected $searchCriteriaGroupLocationCode   = null;
    protected $searchCriteriaExtension           = null;
    protected $searchCriteriaMobilePhoneNumber   = null;
    protected $searchCriteriaEmailAddress        = null;
    protected $searchCriteriaYahooId             = null;
    protected $searchCriteriaExactUserGroup      = null;
    protected $searchCriteriaExactUserDepartment = null;

    public function __construct(
         $enterpriseId,
         $isExtendedInfoRequested,
         $responseSizeLimit = null,
          $searchCriteriaUserLastName = null,
          $searchCriteriaUserFirstName = null,
          $searchCriteriaDn = null,
          $searchCriteriaGroupLocationCode = null,
          $searchCriteriaExtension = null,
          $searchCriteriaMobilePhoneNumber = null,
          $searchCriteriaEmailAddress = null,
          $searchCriteriaYahooId = null,
          $searchCriteriaExactUserGroup = null,
          $searchCriteriaExactUserDepartment = null
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
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getEnterpriseId()
    {
        return (!$this->enterpriseId) ?: $this->enterpriseId->getValue();
    }

    /**
     * 
     */
    public function setIsExtendedInfoRequested($isExtendedInfoRequested = null)
    {
        $this->isExtendedInfoRequested = (boolean) $isExtendedInfoRequested;
    }

    /**
     * 
     */
    public function getIsExtendedInfoRequested()
    {
        return (!$this->isExtendedInfoRequested) ?: $this->isExtendedInfoRequested->getValue();
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
     * Criteria for searching for a user's first name.
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName =  $searchCriteriaUserFirstName;
    }

    /**
     * Criteria for searching for a user's first name.
     */
    public function getSearchCriteriaUserFirstName()
    {
        return (!$this->searchCriteriaUserFirstName) ?: $this->searchCriteriaUserFirstName->getValue();
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
     * Criteria for searching for a group location dialing code.
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode =  $searchCriteriaGroupLocationCode;
    }

    /**
     * Criteria for searching for a group location dialing code.
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return (!$this->searchCriteriaGroupLocationCode) ?: $this->searchCriteriaGroupLocationCode->getValue();
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
     * Criteria for searching for a user's mobile phone number.
     */
    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
        $this->searchCriteriaMobilePhoneNumber =  $searchCriteriaMobilePhoneNumber;
    }

    /**
     * Criteria for searching for a user's mobile phone number.
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return (!$this->searchCriteriaMobilePhoneNumber) ?: $this->searchCriteriaMobilePhoneNumber->getValue();
    }

    /**
     * Criteria for searching for a email address.
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        $this->searchCriteriaEmailAddress =  $searchCriteriaEmailAddress;
    }

    /**
     * Criteria for searching for a email address.
     */
    public function getSearchCriteriaEmailAddress()
    {
        return (!$this->searchCriteriaEmailAddress) ?: $this->searchCriteriaEmailAddress->getValue();
    }

    /**
     * Criteria for searching for a user's yahoo id.
     */
    public function setSearchCriteriaYahooId(SearchCriteriaYahooId $searchCriteriaYahooId = null)
    {
        $this->searchCriteriaYahooId =  $searchCriteriaYahooId;
    }

    /**
     * Criteria for searching for a user's yahoo id.
     */
    public function getSearchCriteriaYahooId()
    {
        return (!$this->searchCriteriaYahooId) ?: $this->searchCriteriaYahooId->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        $this->searchCriteriaExactUserGroup =  $searchCriteriaExactUserGroup;
    }

    /**
     * Criteria for searching for a particular fully specified user's group.
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return (!$this->searchCriteriaExactUserGroup) ?: $this->searchCriteriaExactUserGroup->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        $this->searchCriteriaExactUserDepartment =  $searchCriteriaExactUserDepartment;
    }

    /**
     * Criteria for searching for a particular fully specified user's department.
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return (!$this->searchCriteriaExactUserDepartment) ?: $this->searchCriteriaExactUserDepartment->getValue();
    }
}
