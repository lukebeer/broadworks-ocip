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
    public    $name                     = 'SystemNetworkServerSyncParametersGetResponse17sp4';
    protected $enableSync               = null;
    protected $syncLinePorts            = null;
    protected $syncDeviceManagementInfo = null;
    protected $syncTrunkGroups          = null;

    /**
     * @return SystemNetworkServerSyncParametersGetResponse17sp4
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
        if (!$enableSync) return $this;
        $this->enableSync = new PrimitiveType($enableSync);
        $this->enableSync->setName('enableSync');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableSync()
    {
        return $this->enableSync->getValue();
    }

    /**
     * 
     */
    public function setSyncLinePorts($syncLinePorts = null)
    {
        if (!$syncLinePorts) return $this;
        $this->syncLinePorts = new PrimitiveType($syncLinePorts);
        $this->syncLinePorts->setName('syncLinePorts');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSyncLinePorts()
    {
        return $this->syncLinePorts->getValue();
    }

    /**
     * 
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo = null)
    {
        if (!$syncDeviceManagementInfo) return $this;
        $this->syncDeviceManagementInfo = new PrimitiveType($syncDeviceManagementInfo);
        $this->syncDeviceManagementInfo->setName('syncDeviceManagementInfo');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSyncDeviceManagementInfo()
    {
        return $this->syncDeviceManagementInfo->getValue();
    }

    /**
     * 
     */
    public function setSyncTrunkGroups($syncTrunkGroups = null)
    {
        if (!$syncTrunkGroups) return $this;
        $this->syncTrunkGroups = new PrimitiveType($syncTrunkGroups);
        $this->syncTrunkGroups->setName('syncTrunkGroups');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSyncTrunkGroups()
    {
        return $this->syncTrunkGroups->getValue();
    }
}
