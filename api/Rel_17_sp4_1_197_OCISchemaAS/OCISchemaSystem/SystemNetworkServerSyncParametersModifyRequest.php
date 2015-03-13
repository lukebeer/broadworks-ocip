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
 * Request to modify Network Server Sync system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           syncTrunkGroups
 */
class SystemNetworkServerSyncParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'SystemNetworkServerSyncParametersModifyRequest';
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
     * @return mixed $response
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
     * @return boolean $enableSync
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
     * @return boolean $syncLinePorts
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
     * @return boolean $syncDeviceManagementInfo
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
     * @return boolean $syncTrunkGroups
     */
    public function getSyncTrunkGroups()
    {
        return $this->syncTrunkGroups->getValue();
    }
}
