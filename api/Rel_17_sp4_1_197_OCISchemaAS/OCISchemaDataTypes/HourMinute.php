<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Represents a specific time with hour and minute granularity
 */
class HourMinute extends ComplexType implements ComplexInterface
{
    public    $name   = 'HourMinute';
    protected $hour   = null;
    protected $minute = null;

    public function __construct(
         $hour,
         $minute
    ) {
        $this->setHour($hour);
        $this->setMinute($minute);
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
    public function setHour($hour = null)
    {
        if (!$hour) return $this;
        $this->hour = new SimpleContent($hour);
        $this->hour->setName('hour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hour
     */
    public function getHour()
    {
        return $this->hour->getValue();
    }

    /**
     * 
     */
    public function setMinute($minute = null)
    {
        if (!$minute) return $this;
        $this->minute = new SimpleContent($minute);
        $this->minute->setName('minute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minute
     */
    public function getMinute()
    {
        return $this->minute->getValue();
    }
}
