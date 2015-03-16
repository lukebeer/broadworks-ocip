<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkProgressionWaitPeriodSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkProgressionGetRequest.
 */
class SystemNetworkProgressionGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemNetworkProgressionGetResponse';
    protected $isActive;
    protected $waitPeriodSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkProgressionGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setWaitPeriodSeconds($waitPeriodSeconds = null)
    {
        $this->waitPeriodSeconds = ($waitPeriodSeconds InstanceOf NetworkProgressionWaitPeriodSeconds)
             ? $waitPeriodSeconds
             : new NetworkProgressionWaitPeriodSeconds($waitPeriodSeconds);
        $this->waitPeriodSeconds->setName('waitPeriodSeconds');
        return $this;
    }

    /**
     * 
     * @return NetworkProgressionWaitPeriodSeconds $waitPeriodSeconds
     */
    public function getWaitPeriodSeconds()
    {
        return ($this->waitPeriodSeconds) ? $this->waitPeriodSeconds->getValue() : null;
    }
}
