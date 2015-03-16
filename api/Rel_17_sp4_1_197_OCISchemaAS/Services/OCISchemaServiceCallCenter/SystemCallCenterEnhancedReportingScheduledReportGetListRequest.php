<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterScheduledReportServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterScheduledReportName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaCallCenterReportTemplateName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of all call center reporting scheduled reports in the system.
 *         The response is either an SystemCallCenterEnhancedReportingScheduledReportGetListResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetListResponse';
    public    $name = 'SystemCallCenterEnhancedReportingScheduledReportGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaCallCenterScheduledReportName;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaExactCallCenterScheduledReportServiceProvider;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    protected $searchCriteriaCallCenterReportTemplateName;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaCallCenterScheduledReportName = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaExactCallCenterScheduledReportServiceProvider = null,
         $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         $searchCriteriaCallCenterReportTemplateName = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetListResponse $response
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
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setName('searchCriteriaCallCenterScheduledReportName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
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
    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider(SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = ($searchCriteriaExactCallCenterScheduledReportServiceProvider InstanceOf SearchCriteriaExactCallCenterScheduledReportServiceProvider)
             ? $searchCriteriaExactCallCenterScheduledReportServiceProvider
             : new SearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->setName('searchCriteriaExactCallCenterScheduledReportServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider
     */
    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportServiceProvider;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = ($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor InstanceOf SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
             ? $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
             : new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * 
     */
    public function setSearchCriteriaCallCenterReportTemplateName(SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null)
    {
        $this->searchCriteriaCallCenterReportTemplateName = ($searchCriteriaCallCenterReportTemplateName InstanceOf SearchCriteriaCallCenterReportTemplateName)
             ? $searchCriteriaCallCenterReportTemplateName
             : new SearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
        $this->searchCriteriaCallCenterReportTemplateName->setName('searchCriteriaCallCenterReportTemplateName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return $this->searchCriteriaCallCenterReportTemplateName;
    }
}
