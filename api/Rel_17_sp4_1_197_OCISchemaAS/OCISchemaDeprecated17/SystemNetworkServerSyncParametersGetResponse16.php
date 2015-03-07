<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest16.
 *         Contains a list of system Network Server Sync parameters.
 *         Replaced By: SystemNetworkServerSyncParametersGetResponse17sp4
 */
class SystemNetworkServerSyncParametersGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $enableSync                = null;
    protected $syncLinePorts             = null;
    protected $syncDeviceManagementInfo  = null;


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
}
