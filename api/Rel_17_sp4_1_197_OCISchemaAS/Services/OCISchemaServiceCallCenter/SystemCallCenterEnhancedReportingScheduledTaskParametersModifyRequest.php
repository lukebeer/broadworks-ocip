<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterScheduledReportSearchIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterDaysAfterScheduledReportCompletion;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterMaximumScheduledReportsPerInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system settings for the call center enhanced reporting scheduling tasks.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = 'SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest';
    protected $scheduledReportSearchIntervalMinutes     = null;
    protected $maximumScheduledReportsPerInterval       = null;
    protected $deleteScheduledReportDaysAfterCompletion = null;

    public function __construct(
         $scheduledReportSearchIntervalMinutes = null,
         $maximumScheduledReportsPerInterval = null,
         $deleteScheduledReportDaysAfterCompletion = null
    ) {
        $this->setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
        $this->setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
        $this->setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion);
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
    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes = null)
    {
        if (!$scheduledReportSearchIntervalMinutes) return $this;
        $this->scheduledReportSearchIntervalMinutes = ($scheduledReportSearchIntervalMinutes InstanceOf CallCenterScheduledReportSearchIntervalMinutes)
             ? $scheduledReportSearchIntervalMinutes
             : new CallCenterScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes);
        $this->scheduledReportSearchIntervalMinutes->setName('scheduledReportSearchIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterScheduledReportSearchIntervalMinutes $scheduledReportSearchIntervalMinutes
     */
    public function getScheduledReportSearchIntervalMinutes()
    {
        return $this->scheduledReportSearchIntervalMinutes->getValue();
    }

    /**
     * 
     */
    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval = null)
    {
        if (!$maximumScheduledReportsPerInterval) return $this;
        $this->maximumScheduledReportsPerInterval = ($maximumScheduledReportsPerInterval InstanceOf CallCenterMaximumScheduledReportsPerInterval)
             ? $maximumScheduledReportsPerInterval
             : new CallCenterMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval);
        $this->maximumScheduledReportsPerInterval->setName('maximumScheduledReportsPerInterval');
        return $this;
    }

    /**
     * 
     * @return CallCenterMaximumScheduledReportsPerInterval $maximumScheduledReportsPerInterval
     */
    public function getMaximumScheduledReportsPerInterval()
    {
        return $this->maximumScheduledReportsPerInterval->getValue();
    }

    /**
     * 
     */
    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion = null)
    {
        if (!$deleteScheduledReportDaysAfterCompletion) return $this;
        $this->deleteScheduledReportDaysAfterCompletion = ($deleteScheduledReportDaysAfterCompletion InstanceOf CallCenterDaysAfterScheduledReportCompletion)
             ? $deleteScheduledReportDaysAfterCompletion
             : new CallCenterDaysAfterScheduledReportCompletion($deleteScheduledReportDaysAfterCompletion);
        $this->deleteScheduledReportDaysAfterCompletion->setName('deleteScheduledReportDaysAfterCompletion');
        return $this;
    }

    /**
     * 
     * @return CallCenterDaysAfterScheduledReportCompletion $deleteScheduledReportDaysAfterCompletion
     */
    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return $this->deleteScheduledReportDaysAfterCompletion->getValue();
    }
}
