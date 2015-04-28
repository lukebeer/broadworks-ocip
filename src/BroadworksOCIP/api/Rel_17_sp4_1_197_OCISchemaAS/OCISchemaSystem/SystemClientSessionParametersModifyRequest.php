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
 * Request to modify Client Session (web and CLI) system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemClientSessionParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClientSessionParametersModifyRequest';
    protected $enableInactivityTimeout;
    protected $inactivityTimeoutMinutes;

    public function __construct(
         $enableInactivityTimeout = null,
         $inactivityTimeoutMinutes = null
    ) {
        $this->setEnableInactivityTimeout($enableInactivityTimeout);
        $this->setInactivityTimeoutMinutes($inactivityTimeoutMinutes);
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
