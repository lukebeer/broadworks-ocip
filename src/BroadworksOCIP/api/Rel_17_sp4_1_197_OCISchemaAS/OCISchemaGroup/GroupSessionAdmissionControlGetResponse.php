<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupSessionAdmissionControlGetRequest.
 *         The response contains the session admission control capacity allocated for the group.
 */
class GroupSessionAdmissionControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupSessionAdmissionControlGetResponse';
    protected $restrictAggregateSessions;
    protected $maxSessions;
    protected $maxUserOriginatingSessions;
    protected $maxUserTerminatingSessions;
    protected $countIntraGroupSessions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGetResponse $response
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
        $this->restrictAggregateSessions->setElementName('restrictAggregateSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictAggregateSessions
     */
    public function getRestrictAggregateSessions()
    {
        return ($this->restrictAggregateSessions)
            ? $this->restrictAggregateSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxSessions($maxSessions = null)
    {
        $this->maxSessions = ($maxSessions InstanceOf NonNegativeInt)
             ? $maxSessions
             : new NonNegativeInt($maxSessions);
        $this->maxSessions->setElementName('maxSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxSessions
     */
    public function getMaxSessions()
    {
        return ($this->maxSessions)
            ? $this->maxSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setElementName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserOriginatingSessions
     */
    public function getMaxUserOriginatingSessions()
    {
        return ($this->maxUserOriginatingSessions)
            ? $this->maxUserOriginatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setElementName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserTerminatingSessions
     */
    public function getMaxUserTerminatingSessions()
    {
        return ($this->maxUserTerminatingSessions)
            ? $this->maxUserTerminatingSessions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions = null)
    {
        $this->countIntraGroupSessions = new PrimitiveType($countIntraGroupSessions);
        $this->countIntraGroupSessions->setElementName('countIntraGroupSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $countIntraGroupSessions
     */
    public function getCountIntraGroupSessions()
    {
        return ($this->countIntraGroupSessions)
            ? $this->countIntraGroupSessions->getElementValue()
            : null;
    }
}
