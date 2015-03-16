<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * One time conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleOneTime extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingScheduleOneTime';
    protected $startTime;
    protected $duration;

    public function __construct(
         $startTime = '',
         $duration = ''
    ) {
        $this->setStartTime($startTime);
        $this->setDuration($duration);
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
    public function setStartTime($startTime = null)
    {
        $this->startTime = new PrimitiveType($startTime);
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return string $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime)
            ? $this->startTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDuration($duration = null)
    {
        $this->duration = new PrimitiveType($duration);
        $this->duration->setElementName('duration');
        return $this;
    }

    /**
     * 
     * @return string $duration
     */
    public function getDuration()
    {
        return ($this->duration)
            ? $this->duration->getElementValue()
            : null;
    }
}
