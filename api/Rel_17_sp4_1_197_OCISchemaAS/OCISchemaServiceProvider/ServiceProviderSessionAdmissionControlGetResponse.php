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
    public    $name                              = 'ServiceProviderSessionAdmissionControlGetResponse';
    protected $restrictAggregateSessions         = null;
    protected $maxSessions                       = null;
    protected $maxUserOriginatingSessions        = null;
    protected $maxUserTerminatingSessions        = null;
    protected $countIntraServiceProviderSessions = null;

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
        if (!$restrictAggregateSessions) return $this;
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
        return $this->restrictAggregateSessions->getValue();
    }

    /**
     * 
     */
    public function setMaxSessions($maxSessions = null)
    {
        if (!$maxSessions) return $this;
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
        return $this->maxSessions->getValue();
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        if (!$maxUserOriginatingSessions) return $this;
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
        return $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        if (!$maxUserTerminatingSessions) return $this;
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
        return $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions = null)
    {
        if (!$countIntraServiceProviderSessions) return $this;
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
        return $this->countIntraServiceProviderSessions->getValue();
    }
}
