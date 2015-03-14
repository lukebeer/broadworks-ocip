<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CPE device's options.
 *         Replaced by: CPEDeviceOptions14sp6
 */
class CPEDeviceOptions extends ComplexType implements ComplexInterface
{
    public    $name             = 'CPEDeviceOptions';
    protected $enableMonitoring = null;
    protected $resetEvent       = null;
    protected $configType       = null;
    protected $systemFileName   = null;
    protected $deviceFileFormat = null;

    public function __construct(
         $enableMonitoring,
         $resetEvent = null,
         $configType,
         $systemFileName,
         $deviceFileFormat
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
        if (!$enableMonitoring) return $this;
        $this->enableMonitoring = new SimpleContent($enableMonitoring);
        $this->enableMonitoring->setName('enableMonitoring');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enableMonitoring
     */
    public function getEnableMonitoring()
    {
        return $this->enableMonitoring->getValue();
    }

    /**
     * 
     */
    public function setResetEvent($resetEvent = null)
    {
        if (!$resetEvent) return $this;
        $this->resetEvent = new SimpleContent($resetEvent);
        $this->resetEvent->setName('resetEvent');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $resetEvent
     */
    public function getResetEvent()
    {
        return $this->resetEvent->getValue();
    }

    /**
     * 
     */
    public function setConfigType($configType = null)
    {
        if (!$configType) return $this;
        $this->configType = new SimpleContent($configType);
        $this->configType->setName('configType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $configType
     */
    public function getConfigType()
    {
        return $this->configType->getValue();
    }

    /**
     * 
     */
    public function setSystemFileName($systemFileName = null)
    {
        if (!$systemFileName) return $this;
        $this->systemFileName = new SimpleContent($systemFileName);
        $this->systemFileName->setName('systemFileName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $systemFileName
     */
    public function getSystemFileName()
    {
        return $this->systemFileName->getValue();
    }

    /**
     * 
     */
    public function setDeviceFileFormat($deviceFileFormat = null)
    {
        if (!$deviceFileFormat) return $this;
        $this->deviceFileFormat = new SimpleContent($deviceFileFormat);
        $this->deviceFileFormat->setName('deviceFileFormat');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceFileFormat
     */
    public function getDeviceFileFormat()
    {
        return $this->deviceFileFormat->getValue();
    }
}
