<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportWebStatisticsSource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServerChoice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify group level call center enhanced reporting settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterEnhancedReportingModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $reportingServer;
    protected $webStatisticSource;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $reportingServer = null,
         $webStatisticSource = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setReportingServer($reportingServer);
        $this->setWebStatisticSource($webStatisticSource);
    }

    /**
     * @return mixed $response
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
    public function setReportingServer($reportingServer = null)
    {
        $this->reportingServer = ($reportingServer InstanceOf CallCenterReportServerChoice)
             ? $reportingServer
             : new CallCenterReportServerChoice($reportingServer);
        $this->reportingServer->setElementName('reportingServer');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServerChoice $reportingServer
     */
    public function getReportingServer()
    {
        return ($this->reportingServer)
            ? $this->reportingServer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebStatisticSource($webStatisticSource = null)
    {
        $this->webStatisticSource = ($webStatisticSource InstanceOf CallCenterReportWebStatisticsSource)
             ? $webStatisticSource
             : new CallCenterReportWebStatisticsSource($webStatisticSource);
        $this->webStatisticSource->setElementName('webStatisticSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportWebStatisticsSource $webStatisticSource
     */
    public function getWebStatisticSource()
    {
        return ($this->webStatisticSource)
            ? $this->webStatisticSource->getElementValue()
            : null;
    }
}
