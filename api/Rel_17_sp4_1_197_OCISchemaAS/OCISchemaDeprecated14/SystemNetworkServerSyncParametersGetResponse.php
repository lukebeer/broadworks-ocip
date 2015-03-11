<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkServerSyncParametersGetListRequest.
 *         Contains a list of system Network Server Sync parameters.
 */
class SystemNetworkServerSyncParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemNetworkServerSyncParametersGetResponse';
    protected $enableSync = null;

    /**
     * @return SystemNetworkServerSyncParametersGetResponse
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
}
