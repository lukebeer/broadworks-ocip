<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEnterpriseCommonPhoneListName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaEnterpriseCommonPhoneListNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an enterprise's common phone list.
 *         The response is either a EnterpriseCommonPhoneListGetListResponse or an ErrorResponse.
 *         The search can be done using multiple criterion.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. 
 *         Otherwise, only results matching all the search criterion are included in the results. 
 *         If no search criteria is specified, all results are returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 */
class EnterpriseCommonPhoneListGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $responseSizeLimit=null,
             $searchCriteriaModeOr=null,
             $searchCriteriaEnterpriseCommonPhoneListName=null,
             $searchCriteriaEnterpriseCommonPhoneListNumber=null
    ) {
        $this->serviceProviderId                             = new ServiceProviderId($serviceProviderId);
        $this->responseSizeLimit                             = $responseSizeLimit;
        $this->searchCriteriaModeOr                          = $searchCriteriaModeOr;
        $this->searchCriteriaEnterpriseCommonPhoneListName   = $searchCriteriaEnterpriseCommonPhoneListName;
        $this->searchCriteriaEnterpriseCommonPhoneListNumber = $searchCriteriaEnterpriseCommonPhoneListNumber;
        $this->args                                          = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $searchCriteriaModeOr and $this->searchCriteriaModeOr = new xs:boolean($searchCriteriaModeOr);
    }

    public function getSearchCriteriaModeOr()
    {
        return (!$this->searchCriteriaModeOr) ?: $this->searchCriteriaModeOr->value();
    }

    public function setSearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName)
    {
        $searchCriteriaEnterpriseCommonPhoneListName and $this->searchCriteriaEnterpriseCommonPhoneListName = new SearchCriteriaEnterpriseCommonPhoneListName($searchCriteriaEnterpriseCommonPhoneListName);
    }

    public function getSearchCriteriaEnterpriseCommonPhoneListName()
    {
        return (!$this->searchCriteriaEnterpriseCommonPhoneListName) ?: $this->searchCriteriaEnterpriseCommonPhoneListName->value();
    }

    public function setSearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber)
    {
        $searchCriteriaEnterpriseCommonPhoneListNumber and $this->searchCriteriaEnterpriseCommonPhoneListNumber = new SearchCriteriaEnterpriseCommonPhoneListNumber($searchCriteriaEnterpriseCommonPhoneListNumber);
    }

    public function getSearchCriteriaEnterpriseCommonPhoneListNumber()
    {
        return (!$this->searchCriteriaEnterpriseCommonPhoneListNumber) ?: $this->searchCriteriaEnterpriseCommonPhoneListNumber->value();
    }
}
