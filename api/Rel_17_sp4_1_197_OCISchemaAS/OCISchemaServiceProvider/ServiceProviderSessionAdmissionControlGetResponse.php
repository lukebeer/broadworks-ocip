<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the service provider.
 */
class ServiceProviderSessionAdmissionControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderSessionAdmissionControlGetResponse';
    protected $restrictAggregateSessions;
    protected $maxSessions;
    protected $maxUserOriginatingSessions;
    protected $maxUserTerminatingSessions;
    protected $countIntraServiceProviderSessions;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderSessionAdmissionControlGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions = null)
    {
        $this->restrictAggregateSessions = new PrimitiveType($restrictAggregateSessions);
        $this->restrictAggregateSessions->setName('restrictAggregateSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictAggregateSessions
     */
    public function getRestrictAggregateSessions()
    {
        return ($this->restrictAggregateSessions) ? $this->restrictAggregateSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSessions($maxSessions = null)
    {
        $this->maxSessions = ($maxSessions InstanceOf NonNegativeInt)
             ? $maxSessions
             : new NonNegativeInt($maxSessions);
        $this->maxSessions->setName('maxSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxSessions
     */
    public function getMaxSessions()
    {
        return ($this->maxSessions) ? $this->maxSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserOriginatingSessions
     */
    public function getMaxUserOriginatingSessions()
    {
        return ($this->maxUserOriginatingSessions) ? $this->maxUserOriginatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserTerminatingSessions
     */
    public function getMaxUserTerminatingSessions()
    {
        return ($this->maxUserTerminatingSessions) ? $this->maxUserTerminatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions = null)
    {
        $this->countIntraServiceProviderSessions = new PrimitiveType($countIntraServiceProviderSessions);
        $this->countIntraServiceProviderSessions->setName('countIntraServiceProviderSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $countIntraServiceProviderSessions
     */
    public function getCountIntraServiceProviderSessions()
    {
        return ($this->countIntraServiceProviderSessions) ? $this->countIntraServiceProviderSessions->getValue() : null;
    }
}
