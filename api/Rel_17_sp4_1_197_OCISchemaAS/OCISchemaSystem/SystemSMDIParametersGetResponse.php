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
 * Response to SystemSMDIParametersGetListRequest.
 *         Contains a list of system SMDI parameters.
 */
class SystemSMDIParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSMDIParametersGetResponse';
    protected $enableSMDI;
    protected $listeningPort;
    protected $maxConnections;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSMDIParametersGetResponse $response
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
        $this->enableSMDI = new PrimitiveType($enableSMDI);
        $this->enableSMDI->setName('enableSMDI');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSMDI
     */
    public function getEnableSMDI()
    {
        return ($this->enableSMDI) ? $this->enableSMDI->getValue() : null;
    }

    /**
     * 
     */
    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
        $this->listeningPort->setName('listeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $listeningPort
     */
    public function getListeningPort()
    {
        return ($this->listeningPort) ? $this->listeningPort->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConnections($maxConnections = null)
    {
        $this->maxConnections = ($maxConnections InstanceOf SMDIMaxConnections)
             ? $maxConnections
             : new SMDIMaxConnections($maxConnections);
        $this->maxConnections->setName('maxConnections');
        return $this;
    }

    /**
     * 
     * @return SMDIMaxConnections $maxConnections
     */
    public function getMaxConnections()
    {
        return ($this->maxConnections) ? $this->maxConnections->getValue() : null;
    }
}
