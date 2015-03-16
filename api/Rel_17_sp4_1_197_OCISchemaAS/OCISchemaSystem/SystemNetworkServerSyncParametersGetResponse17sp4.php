<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest17sp4.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemNetworkServerSyncParametersGetResponse17sp4';
    protected $enableSync;
    protected $syncLinePorts;
    protected $syncDeviceManagementInfo;
    protected $syncTrunkGroups;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkServerSyncParametersGetResponse17sp4 $response
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
        $this->enableSync->setName('enableSync');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSync
     */
    public function getEnableSync()
    {
        return ($this->enableSync) ? $this->enableSync->getValue() : null;
    }

    /**
     * 
     */
    public function setSyncLinePorts($syncLinePorts = null)
    {
        $this->syncLinePorts = new PrimitiveType($syncLinePorts);
        $this->syncLinePorts->setName('syncLinePorts');
        return $this;
    }

    /**
     * 
     * @return boolean $syncLinePorts
     */
    public function getSyncLinePorts()
    {
        return ($this->syncLinePorts) ? $this->syncLinePorts->getValue() : null;
    }

    /**
     * 
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo = null)
    {
        $this->syncDeviceManagementInfo = new PrimitiveType($syncDeviceManagementInfo);
        $this->syncDeviceManagementInfo->setName('syncDeviceManagementInfo');
        return $this;
    }

    /**
     * 
     * @return boolean $syncDeviceManagementInfo
     */
    public function getSyncDeviceManagementInfo()
    {
        return ($this->syncDeviceManagementInfo) ? $this->syncDeviceManagementInfo->getValue() : null;
    }

    /**
     * 
     */
    public function setSyncTrunkGroups($syncTrunkGroups = null)
    {
        $this->syncTrunkGroups = new PrimitiveType($syncTrunkGroups);
        $this->syncTrunkGroups->setName('syncTrunkGroups');
        return $this;
    }

    /**
     * 
     * @return boolean $syncTrunkGroups
     */
    public function getSyncTrunkGroups()
    {
        return ($this->syncTrunkGroups) ? $this->syncTrunkGroups->getValue() : null;
    }
}
