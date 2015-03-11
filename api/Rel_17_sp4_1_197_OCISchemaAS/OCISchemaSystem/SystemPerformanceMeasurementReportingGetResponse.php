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
    public    $name                             = 'SystemPerformanceMeasurementReportingGetResponse';
    protected $isActive                         = null;
    protected $reportingInterval                = null;
    protected $resetMeasurementsAfterEachReport = null;
    protected $reportEnterprise                 = null;
    protected $reportServiceProvider            = null;
    protected $reportDevice                     = null;

    /**
     * @return SystemPerformanceMeasurementReportingGetResponse
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setReportingInterval($reportingInterval = null)
    {
        if (!$reportingInterval) return $this;
        $this->reportingInterval = ($reportingInterval InstanceOf PerformanceMeasurementReportingIntervalMinutes)
             ? $reportingInterval
             : new PerformanceMeasurementReportingIntervalMinutes($reportingInterval);
        $this->reportingInterval->setName('reportingInterval');
        return $this;
    }

    /**
     * 
     * @return PerformanceMeasurementReportingIntervalMinutes
     */
    public function getReportingInterval()
    {
        return $this->reportingInterval->getValue();
    }

    /**
     * 
     */
    public function setResetMeasurementsAfterEachReport($resetMeasurementsAfterEachReport = null)
    {
        if (!$resetMeasurementsAfterEachReport) return $this;
        $this->resetMeasurementsAfterEachReport = new PrimitiveType($resetMeasurementsAfterEachReport);
        $this->resetMeasurementsAfterEachReport->setName('resetMeasurementsAfterEachReport');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getResetMeasurementsAfterEachReport()
    {
        return $this->resetMeasurementsAfterEachReport->getValue();
    }

    /**
     * 
     */
    public function setReportEnterprise($reportEnterprise = null)
    {
        if (!$reportEnterprise) return $this;
        $this->reportEnterprise = new PrimitiveType($reportEnterprise);
        $this->reportEnterprise->setName('reportEnterprise');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getReportEnterprise()
    {
        return $this->reportEnterprise->getValue();
    }

    /**
     * 
     */
    public function setReportServiceProvider($reportServiceProvider = null)
    {
        if (!$reportServiceProvider) return $this;
        $this->reportServiceProvider = new PrimitiveType($reportServiceProvider);
        $this->reportServiceProvider->setName('reportServiceProvider');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getReportServiceProvider()
    {
        return $this->reportServiceProvider->getValue();
    }

    /**
     * 
     */
    public function setReportDevice($reportDevice = null)
    {
        if (!$reportDevice) return $this;
        $this->reportDevice = new PrimitiveType($reportDevice);
        $this->reportDevice->setName('reportDevice');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getReportDevice()
    {
        return $this->reportDevice->getValue();
    }
}
