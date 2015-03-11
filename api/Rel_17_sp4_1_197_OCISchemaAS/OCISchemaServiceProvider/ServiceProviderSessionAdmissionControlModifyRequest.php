<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify session admission control capacity for the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderSessionAdmissionControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = 'ServiceProviderSessionAdmissionControlModifyRequest';
    protected $serviceProviderId                 = null;
    protected $restrictAggregateSessions         = null;
    protected $maxSessions                       = null;
    protected $maxUserOriginatingSessions        = null;
    protected $maxUserTerminatingSessions        = null;
    protected $countIntraServiceProviderSessions = null;

    public function __construct(
         $serviceProviderId,
         $restrictAggregateSessions = null,
         $maxSessions = null,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $countIntraServiceProviderSessions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRestrictAggregateSessions($restrictAggregateSessions);
        $this->setMaxSessions($maxSessions);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setCountIntraServiceProviderSessions($countIntraServiceProviderSessions);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
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
     * @return xs:boolean
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
     * @return NonNegativeInt
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
     * @return NonNegativeInt
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
     * @return NonNegativeInt
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
     * @return xs:boolean
     */
    public function getCountIntraServiceProviderSessions()
    {
        return $this->countIntraServiceProviderSessions->getValue();
    }
}
