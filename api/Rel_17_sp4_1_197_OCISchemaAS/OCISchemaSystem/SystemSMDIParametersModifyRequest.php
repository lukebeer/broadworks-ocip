<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMDIMaxConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name           = 'SystemSMDIParametersModifyRequest';
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
     * @return 
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
        if (!$enableSMDI) return $this;
        $this->enableSMDI = new PrimitiveType($enableSMDI);
        $this->enableSMDI->setName('enableSMDI');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableSMDI()
    {
        return $this->enableSMDI->getValue();
    }

    /**
     * 
     */
    public function setListeningPort($listeningPort = null)
    {
        if (!$listeningPort) return $this;
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
        $this->listeningPort->setName('listeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getListeningPort()
    {
        return $this->listeningPort->getValue();
    }

    /**
     * 
     */
    public function setMaxConnections($maxConnections = null)
    {
        if (!$maxConnections) return $this;
        $this->maxConnections = ($maxConnections InstanceOf SMDIMaxConnections)
             ? $maxConnections
             : new SMDIMaxConnections($maxConnections);
        $this->maxConnections->setName('maxConnections');
        return $this;
    }

    /**
     * 
     * @return SMDIMaxConnections
     */
    public function getMaxConnections()
    {
        return $this->maxConnections->getValue();
    }
}
