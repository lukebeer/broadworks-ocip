<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest16.
 *         Contains a list of system Network Server Sync parameters.
 *         Replaced By: SystemNetworkServerSyncParametersGetResponse17sp4
 */
class SystemNetworkServerSyncParametersGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkServerSyncParametersGetResponse16';
    protected $enableSync;
    protected $syncLinePorts;
    protected $syncDeviceManagementInfo;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemNetworkServerSyncParametersGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableSync($enableSync = null)
    {
        $this->enableSync = new PrimitiveType($enableSync);
        $this->enableSync->setElementName('enableSync');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSync
     */
    public function getEnableSync()
    {
        return ($this->enableSync)
            ? $this->enableSync->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSyncLinePorts($syncLinePorts = null)
    {
        $this->syncLinePorts = new PrimitiveType($syncLinePorts);
        $this->syncLinePorts->setElementName('syncLinePorts');
        return $this;
    }

    /**
     * 
     * @return boolean $syncLinePorts
     */
    public function getSyncLinePorts()
    {
        return ($this->syncLinePorts)
            ? $this->syncLinePorts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo = null)
    {
        $this->syncDeviceManagementInfo = new PrimitiveType($syncDeviceManagementInfo);
        $this->syncDeviceManagementInfo->setElementName('syncDeviceManagementInfo');
        return $this;
    }

    /**
     * 
     * @return boolean $syncDeviceManagementInfo
     */
    public function getSyncDeviceManagementInfo()
    {
        return ($this->syncDeviceManagementInfo)
            ? $this->syncDeviceManagementInfo->getElementValue()
            : null;
    }
}
