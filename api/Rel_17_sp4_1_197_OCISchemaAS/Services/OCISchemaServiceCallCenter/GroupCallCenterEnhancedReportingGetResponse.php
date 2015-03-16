<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportWebStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServerChoice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallCenterEnhancedReportingGetRequest.
 */
class GroupCallCenterEnhancedReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterEnhancedReportingGetResponse';
    protected $reportingServer;
    protected $webStatisticSource;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportingServer($reportingServer = null)
    {
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
        return ($this->reportingServer) ? $this->reportingServer->getValue() : null;
    }

    /**
     * 
     */
    public function setWebStatisticSource($webStatisticSource = null)
    {
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
        return ($this->webStatisticSource) ? $this->webStatisticSource->getValue() : null;
    }
}
