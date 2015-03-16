<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkServerSyncParametersGetRequest14sp2.
 *          Contains a list of system Network Server Sync parameters.
 *          Replaced By: SystemNetworkServerSyncParametersGetResponse16
 */
class SystemNetworkServerSyncParametersGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemNetworkServerSyncParametersGetResponse14sp2';
    protected $enableSync;
    protected $syncLinePorts;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemNetworkServerSyncParametersGetResponse14sp2 $response
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
}
