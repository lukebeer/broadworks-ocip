<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkServerSyncParametersModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Network Server Sync system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $enableSync               = null;
    protected $syncLinePorts            = null;
    protected $syncDeviceManagementInfo = null;
    protected $syncTrunkGroups          = null;

    public function __construct(
         $enableSync = null,
         $syncLinePorts = null,
         $syncDeviceManagementInfo = null,
         $syncTrunkGroups = null
    ) {
        $this->setEnableSync($enableSync);
        $this->setSyncLinePorts($syncLinePorts);
        $this->setSyncDeviceManagementInfo($syncDeviceManagementInfo);
        $this->setSyncTrunkGroups($syncTrunkGroups);
    }

    /**
     * @return SystemNetworkServerSyncParametersModifyResponse
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
        $this->enableSync = (boolean) $enableSync;
    }

    /**
     * 
     */
    public function getEnableSync()
    {
        return (!$this->enableSync) ?: $this->enableSync;
    }

    /**
     * 
     */
    public function setSyncLinePorts($syncLinePorts = null)
    {
        $this->syncLinePorts = (boolean) $syncLinePorts;
    }

    /**
     * 
     */
    public function getSyncLinePorts()
    {
        return (!$this->syncLinePorts) ?: $this->syncLinePorts;
    }

    /**
     * 
     */
    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo = null)
    {
        $this->syncDeviceManagementInfo = (boolean) $syncDeviceManagementInfo;
    }

    /**
     * 
     */
    public function getSyncDeviceManagementInfo()
    {
        return (!$this->syncDeviceManagementInfo) ?: $this->syncDeviceManagementInfo;
    }

    /**
     * 
     */
    public function setSyncTrunkGroups($syncTrunkGroups = null)
    {
        $this->syncTrunkGroups = (boolean) $syncTrunkGroups;
    }

    /**
     * 
     */
    public function getSyncTrunkGroups()
    {
        return (!$this->syncTrunkGroups) ?: $this->syncTrunkGroups;
    }
}
