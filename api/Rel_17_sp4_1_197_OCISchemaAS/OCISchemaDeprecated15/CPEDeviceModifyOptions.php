<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *           configType
 *           systemFileName
 *           deviceFileFormat
 */
class CPEDeviceModifyOptions extends ComplexType implements ComplexInterface
{
    public    $name                              = 'CPEDeviceModifyOptions';
    protected $enableMonitoring                  = null;
    protected $resetEvent                        = null;
    protected $deviceManagementDeviceTypeOptions = null;

    public function __construct(
         $enableMonitoring = null,
         $resetEvent = null,
         $deviceManagementDeviceTypeOptions = null
    ) {
        $this->setEnableMonitoring($enableMonitoring);
        $this->setResetEvent($resetEvent);
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
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions = null)
    {
        if (!$deviceManagementDeviceTypeOptions) return $this;
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
        return $this->deviceManagementDeviceTypeOptions->getValue();
    }
}
