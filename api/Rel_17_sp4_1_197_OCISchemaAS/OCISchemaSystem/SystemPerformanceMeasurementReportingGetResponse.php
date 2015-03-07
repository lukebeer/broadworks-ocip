<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\PerformanceMeasurementReportingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemPerformanceMeasurementReportingGetRequest.
 */
class SystemPerformanceMeasurementReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $isActive                          = null;
    protected $reportingInterval                 = null;
    protected $resetMeasurementsAfterEachReport  = null;
    protected $reportEnterprise                  = null;
    protected $reportServiceProvider             = null;
    protected $reportDevice                      = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setReportingInterval($reportingInterval = null)
    {
        $this->reportingInterval = ($reportingInterval InstanceOf PerformanceMeasurementReportingIntervalMinutes)
             ? $reportingInterval
             : new PerformanceMeasurementReportingIntervalMinutes($reportingInterval);
    }

    public function getReportingInterval()
    {
        return (!$this->reportingInterval) ?: $this->reportingInterval->value();
    }

    public function setResetMeasurementsAfterEachReport(xs:boolean $resetMeasurementsAfterEachReport = null)
    {
    }

    public function getResetMeasurementsAfterEachReport()
    {
        return (!$this->resetMeasurementsAfterEachReport) ?: $this->resetMeasurementsAfterEachReport->value();
    }

    public function setReportEnterprise(xs:boolean $reportEnterprise = null)
    {
    }

    public function getReportEnterprise()
    {
        return (!$this->reportEnterprise) ?: $this->reportEnterprise->value();
    }

    public function setReportServiceProvider(xs:boolean $reportServiceProvider = null)
    {
    }

    public function getReportServiceProvider()
    {
        return (!$this->reportServiceProvider) ?: $this->reportServiceProvider->value();
    }

    public function setReportDevice(xs:boolean $reportDevice = null)
    {
    }

    public function getReportDevice()
    {
        return (!$this->reportDevice) ?: $this->reportDevice->value();
    }
}
