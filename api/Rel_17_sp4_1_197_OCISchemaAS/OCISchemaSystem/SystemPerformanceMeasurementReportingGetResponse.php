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
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $reportingInterval                = null;
    protected $resetMeasurementsAfterEachReport = null;
    protected $reportEnterprise                 = null;
    protected $reportServiceProvider            = null;
    protected $reportDevice                     = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Performance Measurement Reporting Interval Minutes.
     */
    public function setReportingInterval($reportingInterval = null)
    {
        $this->reportingInterval = ($reportingInterval InstanceOf PerformanceMeasurementReportingIntervalMinutes)
             ? $reportingInterval
             : new PerformanceMeasurementReportingIntervalMinutes($reportingInterval);
    }

    /**
     * Performance Measurement Reporting Interval Minutes.
     */
    public function getReportingInterval()
    {
        return (!$this->reportingInterval) ?: $this->reportingInterval->getValue();
    }

    /**
     * 
     */
    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport = null)
    {
        $this->resetMeasurementsAfterEachReport = (boolean) $resetMeasurementsAfterEachReport;
    }

    /**
     * 
     */
    public function getResetMeasurementsAfterEachReport()
    {
        return (!$this->resetMeasurementsAfterEachReport) ?: $this->resetMeasurementsAfterEachReport->getValue();
    }

    /**
     * 
     */
    public function setReportEnterprise($reportEnterprise = null)
    {
        $this->reportEnterprise = (boolean) $reportEnterprise;
    }

    /**
     * 
     */
    public function getReportEnterprise()
    {
        return (!$this->reportEnterprise) ?: $this->reportEnterprise->getValue();
    }

    /**
     * 
     */
    public function setReportServiceProvider($reportServiceProvider = null)
    {
        $this->reportServiceProvider = (boolean) $reportServiceProvider;
    }

    /**
     * 
     */
    public function getReportServiceProvider()
    {
        return (!$this->reportServiceProvider) ?: $this->reportServiceProvider->getValue();
    }

    /**
     * 
     */
    public function setReportDevice($reportDevice = null)
    {
        $this->reportDevice = (boolean) $reportDevice;
    }

    /**
     * 
     */
    public function getReportDevice()
    {
        return (!$this->reportDevice) ?: $this->reportDevice->getValue();
    }
}
