<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CPE device's options.
 */
class CPEDeviceOptions16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'CPEDeviceOptions16sp1';
    protected $enableMonitoring;
    protected $configType;
    protected $systemFileName;
    protected $deviceFileFormat;
    protected $deviceManagementDeviceTypeOptions;

    public function __construct(
         $enableMonitoring = '',
         $configType = '',
         $systemFileName = null,
         $deviceFileFormat = null,
         $deviceManagementDeviceTypeOptions = null
    ) {
        $this->setEnableMonitoring($enableMonitoring);
        $this->setConfigType($configType);
        $this->setSystemFileName($systemFileName);
        $this->setDeviceFileFormat($deviceFileFormat);
        $this->setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions);
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
        $this->enableMonitoring->setName('enableMonitoring');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enableMonitoring
     */
    public function getEnableMonitoring()
    {
        return ($this->enableMonitoring) ? $this->enableMonitoring->getValue() : null;
    }

    /**
     * 
     */
    public function setConfigType($configType = null)
    {
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
        return ($this->configType) ? $this->configType->getValue() : null;
    }

    /**
     * 
     */
    public function setSystemFileName($systemFileName = null)
    {
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
        return ($this->systemFileName) ? $this->systemFileName->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceFileFormat($deviceFileFormat = null)
    {
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
        return ($this->deviceFileFormat) ? $this->deviceFileFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions = null)
    {
        $this->deviceManagementDeviceTypeOptions = new SimpleContent($deviceManagementDeviceTypeOptions);
        $this->deviceManagementDeviceTypeOptions->setName('deviceManagementDeviceTypeOptions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceManagementDeviceTypeOptions
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return ($this->deviceManagementDeviceTypeOptions) ? $this->deviceManagementDeviceTypeOptions->getValue() : null;
    }
}
