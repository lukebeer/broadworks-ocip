<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMDIMaxConnections;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify SMDI system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSMDIParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIParametersModifyRequest';
    protected $enableSMDI;
    protected $listeningPort;
    protected $maxConnections;

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
     * @return mixed $response
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
        $this->enableSMDI->setElementName('enableSMDI');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSMDI
     */
    public function getEnableSMDI()
    {
        return ($this->enableSMDI)
            ? $this->enableSMDI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
        $this->listeningPort->setElementName('listeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $listeningPort
     */
    public function getListeningPort()
    {
        return ($this->listeningPort)
            ? $this->listeningPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxConnections($maxConnections = null)
    {
        $this->maxConnections = ($maxConnections InstanceOf SMDIMaxConnections)
             ? $maxConnections
             : new SMDIMaxConnections($maxConnections);
        $this->maxConnections->setElementName('maxConnections');
        return $this;
    }

    /**
     * 
     * @return SMDIMaxConnections $maxConnections
     */
    public function getMaxConnections()
    {
        return ($this->maxConnections)
            ? $this->maxConnections->getElementValue()
            : null;
    }
}
