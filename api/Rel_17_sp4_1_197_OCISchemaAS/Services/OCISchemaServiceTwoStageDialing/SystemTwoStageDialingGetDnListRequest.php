<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSystemServiceDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a list of Two Stage Dialing dns defined in the system.
 *           The response is either a SystemTwoStageDialingGetDnListResponse
 *           or an ErrorResponse.
 */
class SystemTwoStageDialingGetDnListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse';
    public    $name                          = 'SystemTwoStageDialingGetDnListRequest';
    protected $responseSizeLimit             = null;
    protected $searchCriteriaSystemServiceDn = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
    }

    /**
     * @return SystemTwoStageDialingGetDnListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaSystemServiceDn(SearchCriteriaSystemServiceDn $searchCriteriaSystemServiceDn = null)
    {
        if (!$searchCriteriaSystemServiceDn) return $this;
        $this->searchCriteriaSystemServiceDn = ($searchCriteriaSystemServiceDn InstanceOf SearchCriteriaSystemServiceDn)
             ? $searchCriteriaSystemServiceDn
             : new SearchCriteriaSystemServiceDn($searchCriteriaSystemServiceDn);
        $this->searchCriteriaSystemServiceDn->setName('searchCriteriaSystemServiceDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaSystemServiceDn
     */
    public function getSearchCriteriaSystemServiceDn()
    {
        return $this->searchCriteriaSystemServiceDn;
    }
}
