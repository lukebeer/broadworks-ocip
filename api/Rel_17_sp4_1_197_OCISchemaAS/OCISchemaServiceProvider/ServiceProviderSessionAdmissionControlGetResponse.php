<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the ServiceProviderSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the service provider.
 */
class ServiceProviderSessionAdmissionControlGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderSessionAdmissionControlGetResponse';
    public    $name                              = __CLASS__;
    protected $restrictAggregateSessions         = null;
    protected $maxSessions                       = null;
    protected $maxUserOriginatingSessions        = null;
    protected $maxUserTerminatingSessions        = null;
    protected $countIntraServiceProviderSessions = null;


    /**
     * 
     */
    public function setRestrictAggregateSessions($restrictAggregateSessions = null)
    {
        $this->restrictAggregateSessions = (boolean) $restrictAggregateSessions;
    }

    /**
     * 
     */
    public function getRestrictAggregateSessions()
    {
        return (!$this->restrictAggregateSessions) ?: $this->restrictAggregateSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxSessions($maxSessions = null)
    {
        $this->maxSessions = ($maxSessions InstanceOf NonNegativeInt)
             ? $maxSessions
             : new NonNegativeInt($maxSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxSessions()
    {
        return (!$this->maxSessions) ?: $this->maxSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setCountIntraServiceProviderSessions($countIntraServiceProviderSessions = null)
    {
        $this->countIntraServiceProviderSessions = (boolean) $countIntraServiceProviderSessions;
    }

    /**
     * 
     */
    public function getCountIntraServiceProviderSessions()
    {
        return (!$this->countIntraServiceProviderSessions) ?: $this->countIntraServiceProviderSessions->getValue();
    }
}
