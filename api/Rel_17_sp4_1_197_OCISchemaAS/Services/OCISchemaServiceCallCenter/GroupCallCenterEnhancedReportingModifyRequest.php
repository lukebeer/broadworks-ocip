<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportWebStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServerChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify group level call center enhanced reporting settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterEnhancedReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupCallCenterEnhancedReportingModifyRequest';
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $reportingServer    = null;
    protected $webStatisticSource = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setReportingServer($reportingServer = null)
    {
        if (!$reportingServer) return $this;
        $this->reportingServer = ($reportingServer InstanceOf CallCenterReportServerChoice)
             ? $reportingServer
             : new CallCenterReportServerChoice($reportingServer);
        $this->reportingServer->setName('reportingServer');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportServerChoice $reportingServer
     */
    public function getReportingServer()
    {
        return $this->reportingServer->getValue();
    }

    /**
     * 
     */
    public function setWebStatisticSource($webStatisticSource = null)
    {
        if (!$webStatisticSource) return $this;
        $this->webStatisticSource = ($webStatisticSource InstanceOf CallCenterReportWebStatisticsSource)
             ? $webStatisticSource
             : new CallCenterReportWebStatisticsSource($webStatisticSource);
        $this->webStatisticSource->setName('webStatisticSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportWebStatisticsSource $webStatisticSource
     */
    public function getWebStatisticSource()
    {
        return $this->webStatisticSource->getValue();
    }
}
