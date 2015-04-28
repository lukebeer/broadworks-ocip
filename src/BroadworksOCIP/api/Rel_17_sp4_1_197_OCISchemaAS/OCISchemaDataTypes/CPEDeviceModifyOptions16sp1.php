<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *           configType
 *           systemFileName
 *           deviceFileFormat
 */
class CPEDeviceModifyOptions16sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CPEDeviceModifyOptions16sp1';
    protected $enableMonitoring;
    protected $deviceManagementDeviceTypeOptions;

    public function __construct(
         $enableMonitoring = null,
         $deviceManagementDeviceTypeOptions = null
    ) {
        $this->setEnableMonitoring($enableMonitoring);
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
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions = null)
    {
        $this->deviceManagementDeviceTypeOptions = new SimpleContent($deviceManagementDeviceTypeOptions);
        $this->deviceManagementDeviceTypeOptions->setElementName('deviceManagementDeviceTypeOptions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceManagementDeviceTypeOptions
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return ($this->deviceManagementDeviceTypeOptions)
            ? $this->deviceManagementDeviceTypeOptions->getElementValue()
            : null;
    }
}
