<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Network Server Sync system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $enableSync                = null;
    protected $syncLinePorts             = null;
    protected $syncDeviceManagementInfo  = null;
    protected $syncTrunkGroups           = null;

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

    public function setEnableSync(xs:boolean $enableSync = null)
    {
    }

    public function getEnableSync()
    {
        return (!$this->enableSync) ?: $this->enableSync->value();
    }

    public function setSyncLinePorts(xs:boolean $syncLinePorts = null)
    {
    }

    public function getSyncLinePorts()
    {
        return (!$this->syncLinePorts) ?: $this->syncLinePorts->value();
    }

    public function setSyncDeviceManagementInfo(xs:boolean $syncDeviceManagementInfo = null)
    {
    }

    public function getSyncDeviceManagementInfo()
    {
        return (!$this->syncDeviceManagementInfo) ?: $this->syncDeviceManagementInfo->value();
    }

    public function setSyncTrunkGroups(xs:boolean $syncTrunkGroups = null)
    {
    }

    public function getSyncTrunkGroups()
    {
        return (!$this->syncTrunkGroups) ?: $this->syncTrunkGroups->value();
    }
}
