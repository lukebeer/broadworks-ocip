<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportSearchIntervalMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterDaysAfterScheduledReportCompletion;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterMaximumScheduledReportsPerInterval;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse';
    protected $scheduledReportSearchIntervalMinutes;
    protected $maximumScheduledReportsPerInterval;
    protected $deleteScheduledReportDaysAfterCompletion;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes = null)
    {
        $this->scheduledReportSearchIntervalMinutes = ($scheduledReportSearchIntervalMinutes InstanceOf CallCenterScheduledReportSearchIntervalMinutes)
             ? $scheduledReportSearchIntervalMinutes
             : new CallCenterScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
        $this->scheduledReportSearchIntervalMinutes->setElementName('scheduledReportSearchIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportSearchIntervalMinutes $scheduledReportSearchIntervalMinutes
     */
    public function getScheduledReportSearchIntervalMinutes()
    {
        return ($this->scheduledReportSearchIntervalMinutes)
            ? $this->scheduledReportSearchIntervalMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval = null)
    {
        $this->maximumScheduledReportsPerInterval = ($maximumScheduledReportsPerInterval InstanceOf CallCenterMaximumScheduledReportsPerInterval)
             ? $maximumScheduledReportsPerInterval
             : new CallCenterMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
        $this->maximumScheduledReportsPerInterval->setElementName('maximumScheduledReportsPerInterval');
        return $this;
    }

    /**
     * 
     * @return CallCenterMaximumScheduledReportsPerInterval $maximumScheduledReportsPerInterval
     */
    public function getMaximumScheduledReportsPerInterval()
    {
        return ($this->maximumScheduledReportsPerInterval)
            ? $this->maximumScheduledReportsPerInterval->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion = null)
    {
        $this->deleteScheduledReportDaysAfterCompletion = ($deleteScheduledReportDaysAfterCompletion InstanceOf CallCenterDaysAfterScheduledReportCompletion)
             ? $deleteScheduledReportDaysAfterCompletion
             : new CallCenterDaysAfterScheduledReportCompletion($deleteScheduledReportDaysAfterCompletion);
        $this->deleteScheduledReportDaysAfterCompletion->setElementName('deleteScheduledReportDaysAfterCompletion');
        return $this;
    }

    /**
     * 
     * @return CallCenterDaysAfterScheduledReportCompletion $deleteScheduledReportDaysAfterCompletion
     */
    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return ($this->deleteScheduledReportDaysAfterCompletion)
            ? $this->deleteScheduledReportDaysAfterCompletion->getElementValue()
            : null;
    }
}
