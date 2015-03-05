<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest17sp4.
 *         Contains a list of system Network Server Sync parameters.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableSync,
             $syncLinePorts,
             $syncDeviceManagementInfo,
             $syncTrunkGroups
    ) {
        $this->enableSync               = $enableSync;
        $this->syncLinePorts            = $syncLinePorts;
        $this->syncDeviceManagementInfo = $syncDeviceManagementInfo;
        $this->syncTrunkGroups          = $syncTrunkGroups;
        $this->args                     = func_get_args();
    }

    public function setEnableSync($enableSync)
    {
        $enableSync and $this->enableSync = new xs:boolean($enableSync);
    }

    public function getEnableSync()
    {
        return (!$this->enableSync) ?: $this->enableSync->value();
    }

    public function setSyncLinePorts($syncLinePorts)
    {
        $syncLinePorts and $this->syncLinePorts = new xs:boolean($syncLinePorts);
    }

    public function getSyncLinePorts()
    {
        return (!$this->syncLinePorts) ?: $this->syncLinePorts->value();
    }

    public function setSyncDeviceManagementInfo($syncDeviceManagementInfo)
    {
        $syncDeviceManagementInfo and $this->syncDeviceManagementInfo = new xs:boolean($syncDeviceManagementInfo);
    }

    public function getSyncDeviceManagementInfo()
    {
        return (!$this->syncDeviceManagementInfo) ?: $this->syncDeviceManagementInfo->value();
    }

    public function setSyncTrunkGroups($syncTrunkGroups)
    {
        $syncTrunkGroups and $this->syncTrunkGroups = new xs:boolean($syncTrunkGroups);
    }

    public function getSyncTrunkGroups()
    {
        return (!$this->syncTrunkGroups) ?: $this->syncTrunkGroups->value();
    }
}
