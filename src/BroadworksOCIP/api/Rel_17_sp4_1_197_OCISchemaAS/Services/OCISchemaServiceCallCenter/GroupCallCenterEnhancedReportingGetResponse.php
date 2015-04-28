<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportWebStatisticsSource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServerChoice;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallCenterEnhancedReportingGetRequest.
 */
class GroupCallCenterEnhancedReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterEnhancedReportingGetResponse';
    protected $reportingServer;
    protected $webStatisticSource;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingGetResponse $response
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
