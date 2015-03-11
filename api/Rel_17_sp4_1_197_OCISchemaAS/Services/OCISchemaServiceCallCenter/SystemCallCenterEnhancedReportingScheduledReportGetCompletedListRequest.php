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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of all completed call center reporting scheduled reports in the system.
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse';
    public    $name                                                            = 'SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest';
    protected $responseSizeLimit                                               = null;
    protected $searchCriteriaCallCenterScheduledReportName                     = null;
    protected $searchCriteriaGroupId                                           = null;
    protected $searchCriteriaExactCallCenterScheduledReportServiceProvider     = null;
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;
    protected $searchCriteriaCallCenterReportTemplateName                      = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null,
         SearchCriteriaGroupId $searchCriteriaGroupId = null,
         SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider = null,
         SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null,
         SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
    }

    /**
     * @return SystemCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
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
    public function setSearchCriteriaCallCenterScheduledReportName(SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName = null)
    {
        if (!$searchCriteriaCallCenterScheduledReportName) return $this;
        $this->searchCriteriaCallCenterScheduledReportName = ($searchCriteriaCallCenterScheduledReportName InstanceOf SearchCriteriaCallCenterScheduledReportName)
             ? $searchCriteriaCallCenterScheduledReportName
             : new SearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName);
        $this->searchCriteriaCallCenterScheduledReportName->setName('searchCriteriaCallCenterScheduledReportName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterScheduledReportName
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
        if (!$searchCriteriaGroupId) return $this;
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId
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
        if (!$searchCriteriaExactCallCenterScheduledReportServiceProvider) return $this;
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = ($searchCriteriaExactCallCenterScheduledReportServiceProvider InstanceOf SearchCriteriaExactCallCenterScheduledReportServiceProvider)
             ? $searchCriteriaExactCallCenterScheduledReportServiceProvider
             : new SearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider);
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider->setName('searchCriteriaExactCallCenterScheduledReportServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportServiceProvider
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
        if (!$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor) return $this;
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = ($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor InstanceOf SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
             ? $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
             : new SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor);
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor->setName('searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
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
        if (!$searchCriteriaCallCenterReportTemplateName) return $this;
        $this->searchCriteriaCallCenterReportTemplateName = ($searchCriteriaCallCenterReportTemplateName InstanceOf SearchCriteriaCallCenterReportTemplateName)
             ? $searchCriteriaCallCenterReportTemplateName
             : new SearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName);
        $this->searchCriteriaCallCenterReportTemplateName->setName('searchCriteriaCallCenterReportTemplateName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaCallCenterReportTemplateName
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return $this->searchCriteriaCallCenterReportTemplateName;
    }
}
