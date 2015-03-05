<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PerformanceMeasurementReportingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the performance measurements reporting settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive=null,
             $reportingInterval=null,
             $resetMeasurementsAfterEachReport=null,
             $reportEnterprise=null,
             $reportServiceProvider=null,
             $reportDevice=null
    ) {
        $this->isActive                         = $isActive;
        $this->reportingInterval                = $reportingInterval;
        $this->resetMeasurementsAfterEachReport = $resetMeasurementsAfterEachReport;
        $this->reportEnterprise                 = $reportEnterprise;
        $this->reportServiceProvider            = $reportServiceProvider;
        $this->reportDevice                     = $reportDevice;
        $this->args                             = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setReportingInterval($reportingInterval)
    {
        $reportingInterval and $this->reportingInterval = new PerformanceMeasurementReportingIntervalMinutes($reportingInterval);
    }

    public function getReportingInterval()
    {
        return (!$this->reportingInterval) ?: $this->reportingInterval->value();
    }

    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport)
    {
        $resetMeasurementsAfterEachReport and $this->resetMeasurementsAfterEachReport = new xs:boolean($resetMeasurementsAfterEachReport);
    }

    public function getResetMeasurementsAfterEachReport()
    {
        return (!$this->resetMeasurementsAfterEachReport) ?: $this->resetMeasurementsAfterEachReport->value();
    }

    public function setReportEnterprise($reportEnterprise)
    {
        $reportEnterprise and $this->reportEnterprise = new xs:boolean($reportEnterprise);
    }

    public function getReportEnterprise()
    {
        return (!$this->reportEnterprise) ?: $this->reportEnterprise->value();
    }

    public function setReportServiceProvider($reportServiceProvider)
    {
        $reportServiceProvider and $this->reportServiceProvider = new xs:boolean($reportServiceProvider);
    }

    public function getReportServiceProvider()
    {
        return (!$this->reportServiceProvider) ?: $this->reportServiceProvider->value();
    }

    public function setReportDevice($reportDevice)
    {
        $reportDevice and $this->reportDevice = new xs:boolean($reportDevice);
    }

    public function getReportDevice()
    {
        return (!$this->reportDevice) ?: $this->reportDevice->value();
    }
}
