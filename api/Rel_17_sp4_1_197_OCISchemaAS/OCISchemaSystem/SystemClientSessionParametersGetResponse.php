<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ClientSessionTimeoutMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemClientSessionParametersGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemClientSessionParametersGetRequest.
 *         Contains a list of system Client Session (web and CLI) parameters.
 */
class SystemClientSessionParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $enableInactivityTimeout  = null;
    protected $inactivityTimeoutMinutes = null;

    /**
     * @return SystemClientSessionParametersGetResponse
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
        $this->enableInactivityTimeout = (boolean) $enableInactivityTimeout;
    }

    /**
     * 
     */
    public function getEnableInactivityTimeout()
    {
        return (!$this->enableInactivityTimeout) ?: $this->enableInactivityTimeout;
    }

    /**
     * Client session (web and CLI) inactivity timeout in minutes.
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes = null)
    {
        $this->inactivityTimeoutMinutes = ($inactivityTimeoutMinutes InstanceOf ClientSessionTimeoutMinutes)
             ? $inactivityTimeoutMinutes
             : new ClientSessionTimeoutMinutes($inactivityTimeoutMinutes);
    }

    /**
     * Client session (web and CLI) inactivity timeout in minutes.
     */
    public function getInactivityTimeoutMinutes()
    {
        return (!$this->inactivityTimeoutMinutes) ?: $this->inactivityTimeoutMinutes->getValue();
    }
}
