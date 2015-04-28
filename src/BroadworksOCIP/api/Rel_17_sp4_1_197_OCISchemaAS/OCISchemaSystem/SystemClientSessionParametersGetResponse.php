<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ClientSessionTimeoutMinutes;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemClientSessionParametersGetRequest.
 *         Contains a list of system Client Session (web and CLI) parameters.
 */
class SystemClientSessionParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClientSessionParametersGetResponse';
    protected $enableInactivityTimeout;
    protected $inactivityTimeoutMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemClientSessionParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableInactivityTimeout($enableInactivityTimeout = null)
    {
        $this->enableInactivityTimeout = new PrimitiveType($enableInactivityTimeout);
        $this->enableInactivityTimeout->setElementName('enableInactivityTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $enableInactivityTimeout
     */
    public function getEnableInactivityTimeout()
    {
        return ($this->enableInactivityTimeout)
            ? $this->enableInactivityTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes = null)
    {
        $this->inactivityTimeoutMinutes = ($inactivityTimeoutMinutes InstanceOf ClientSessionTimeoutMinutes)
             ? $inactivityTimeoutMinutes
             : new ClientSessionTimeoutMinutes($inactivityTimeoutMinutes);
        $this->inactivityTimeoutMinutes->setElementName('inactivityTimeoutMinutes');
        return $this;
    }

    /**
     * 
     * @return ClientSessionTimeoutMinutes $inactivityTimeoutMinutes
     */
    public function getInactivityTimeoutMinutes()
    {
        return ($this->inactivityTimeoutMinutes)
            ? $this->inactivityTimeoutMinutes->getElementValue()
            : null;
    }
}
