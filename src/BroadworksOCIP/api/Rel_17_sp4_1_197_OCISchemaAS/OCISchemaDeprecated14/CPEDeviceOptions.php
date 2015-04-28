<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CPE device's options.
 *         Replaced by: CPEDeviceOptions14sp6
 */
class CPEDeviceOptions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CPEDeviceOptions';
    protected $enableMonitoring;
    protected $resetEvent;
    protected $configType;
    protected $systemFileName;
    protected $deviceFileFormat;

    public function __construct(
         $enableMonitoring = '',
         $resetEvent = null,
         $configType = '',
         $systemFileName = '',
         $deviceFileFormat = ''
    ) {
        $this->setEnableMonitoring($enableMonitoring);
        $this->setResetEvent($resetEvent);
        $this->setConfigType($configType);
        $this->setSystemFileName($systemFileName);
        $this->setDeviceFileFormat($deviceFileFormat);
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
    public function setEnableMonitoring($enableMonitoring = null)
    {
        $this->enableMonitoring = new SimpleContent($enableMonitoring);
        $this->enableMonitoring->setElementName('enableMonitoring');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enableMonitoring
     */
    public function getEnableMonitoring()
    {
        return ($this->enableMonitoring)
            ? $this->enableMonitoring->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResetEvent($resetEvent = null)
    {
        $this->resetEvent = new SimpleContent($resetEvent);
        $this->resetEvent->setElementName('resetEvent');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $resetEvent
     */
    public function getResetEvent()
    {
        return ($this->resetEvent)
            ? $this->resetEvent->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigType($configType = null)
    {
        $this->configType = new SimpleContent($configType);
        $this->configType->setElementName('configType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $configType
     */
    public function getConfigType()
    {
        return ($this->configType)
            ? $this->configType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSystemFileName($systemFileName = null)
    {
        $this->systemFileName = new SimpleContent($systemFileName);
        $this->systemFileName->setElementName('systemFileName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $systemFileName
     */
    public function getSystemFileName()
    {
        return ($this->systemFileName)
            ? $this->systemFileName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceFileFormat($deviceFileFormat = null)
    {
        $this->deviceFileFormat = new SimpleContent($deviceFileFormat);
        $this->deviceFileFormat->setElementName('deviceFileFormat');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceFileFormat
     */
    public function getDeviceFileFormat()
    {
        return ($this->deviceFileFormat)
            ? $this->deviceFileFormat->getElementValue()
            : null;
    }
}
