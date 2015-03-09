<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMDIMaxConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSMDIParametersModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify SMDI system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSMDIParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $enableSMDI     = null;
    protected $listeningPort  = null;
    protected $maxConnections = null;

    public function __construct(
         $enableSMDI = null,
         $listeningPort = null,
         $maxConnections = null
    ) {
        $this->setEnableSMDI($enableSMDI);
        $this->setListeningPort($listeningPort);
        $this->setMaxConnections($maxConnections);
    }

    /**
     * @return SystemSMDIParametersModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableSMDI($enableSMDI = null)
    {
        $this->enableSMDI = (boolean) $enableSMDI;
    }

    /**
     * 
     */
    public function getEnableSMDI()
    {
        return (!$this->enableSMDI) ?: $this->enableSMDI;
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getListeningPort()
    {
        return (!$this->listeningPort) ?: $this->listeningPort->getValue();
    }

    /**
     * Maximum Number of SMDI connections.
     */
    public function setMaxConnections($maxConnections = null)
    {
        $this->maxConnections = ($maxConnections InstanceOf SMDIMaxConnections)
             ? $maxConnections
             : new SMDIMaxConnections($maxConnections);
    }

    /**
     * Maximum Number of SMDI connections.
     */
    public function getMaxConnections()
    {
        return (!$this->maxConnections) ?: $this->maxConnections->getValue();
    }
}
