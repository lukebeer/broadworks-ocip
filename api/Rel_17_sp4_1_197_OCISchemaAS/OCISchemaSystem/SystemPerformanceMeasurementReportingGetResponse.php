<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\PerformanceMeasurementReportingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPerformanceMeasurementReportingGetRequest.
 */
class SystemPerformanceMeasurementReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemPerformanceMeasurementReportingGetResponse';
    protected $isActive;
    protected $reportingInterval;
    protected $resetMeasurementsAfterEachReport;
    protected $reportEnterprise;
    protected $reportServiceProvider;
    protected $reportDevice;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPerformanceMeasurementReportingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setReportingInterval($reportingInterval = null)
    {
        $this->reportingInterval = ($reportingInterval InstanceOf PerformanceMeasurementReportingIntervalMinutes)
             ? $reportingInterval
             : new PerformanceMeasurementReportingIntervalMinutes($reportingInterval);
        $this->reportingInterval->setName('reportingInterval');
        return $this;
    }

    /**
     * 
     * @return PerformanceMeasurementReportingIntervalMinutes $reportingInterval
     */
    public function getReportingInterval()
    {
        return ($this->reportingInterval) ? $this->reportingInterval->getValue() : null;
    }

    /**
     * 
     */
    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport = null)
    {
        $this->resetMeasurementsAfterEachReport = new PrimitiveType($resetMeasurementsAfterEachReport);
        $this->resetMeasurementsAfterEachReport->setName('resetMeasurementsAfterEachReport');
        return $this;
    }

    /**
     * 
     * @return boolean $resetMeasurementsAfterEachReport
     */
    public function getResetMeasurementsAfterEachReport()
    {
        return ($this->resetMeasurementsAfterEachReport) ? $this->resetMeasurementsAfterEachReport->getValue() : null;
    }

    /**
     * 
     */
    public function setReportEnterprise($reportEnterprise = null)
    {
        $this->reportEnterprise = new PrimitiveType($reportEnterprise);
        $this->reportEnterprise->setName('reportEnterprise');
        return $this;
    }

    /**
     * 
     * @return boolean $reportEnterprise
     */
    public function getReportEnterprise()
    {
        return ($this->reportEnterprise) ? $this->reportEnterprise->getValue() : null;
    }

    /**
     * 
     */
    public function setReportServiceProvider($reportServiceProvider = null)
    {
        $this->reportServiceProvider = new PrimitiveType($reportServiceProvider);
        $this->reportServiceProvider->setName('reportServiceProvider');
        return $this;
    }

    /**
     * 
     * @return boolean $reportServiceProvider
     */
    public function getReportServiceProvider()
    {
        return ($this->reportServiceProvider) ? $this->reportServiceProvider->getValue() : null;
    }

    /**
     * 
     */
    public function setReportDevice($reportDevice = null)
    {
        $this->reportDevice = new PrimitiveType($reportDevice);
        $this->reportDevice->setName('reportDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $reportDevice
     */
    public function getReportDevice()
    {
        return ($this->reportDevice) ? $this->reportDevice->getValue() : null;
    }
}
