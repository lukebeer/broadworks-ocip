<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ClientSessionTimeoutMinutes;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Client Session (web and CLI) system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemClientSessionParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemClientSessionParametersModifyRequest';
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
        $this->enableInactivityTimeout->setName('enableInactivityTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $enableInactivityTimeout
     */
    public function getEnableInactivityTimeout()
    {
        return ($this->enableInactivityTimeout) ? $this->enableInactivityTimeout->getValue() : null;
    }

    /**
     * 
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes = null)
    {
        $this->inactivityTimeoutMinutes = ($inactivityTimeoutMinutes InstanceOf ClientSessionTimeoutMinutes)
             ? $inactivityTimeoutMinutes
             : new ClientSessionTimeoutMinutes($inactivityTimeoutMinutes);
        $this->inactivityTimeoutMinutes->setName('inactivityTimeoutMinutes');
        return $this;
    }

    /**
     * 
     * @return ClientSessionTimeoutMinutes $inactivityTimeoutMinutes
     */
    public function getInactivityTimeoutMinutes()
    {
        return ($this->inactivityTimeoutMinutes) ? $this->inactivityTimeoutMinutes->getValue() : null;
    }
}
