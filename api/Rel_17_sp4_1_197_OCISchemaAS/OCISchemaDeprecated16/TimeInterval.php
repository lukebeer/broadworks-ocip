<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\TimeInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Time Interval.
 */
class TimeInterval extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\TimeInterval';
    public    $name           = 'TimeInterval';
    protected $startDayOfWeek = null;
    protected $startHour      = null;
    protected $startMinute    = null;
    protected $endDayOfWeek   = null;
    protected $endHour        = null;
    protected $endMinute      = null;

    public function __construct(
         $startDayOfWeek,
         $startHour,
         $startMinute,
         $endDayOfWeek,
         $endHour,
         $endMinute
    ) {
        $this->setStartDayOfWeek($startDayOfWeek);
        $this->setStartHour($startHour);
        $this->setStartMinute($startMinute);
        $this->setEndDayOfWeek($endDayOfWeek);
        $this->setEndHour($endHour);
        $this->setEndMinute($endMinute);
    }

    /**
     * @return TimeInterval
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        if (!$startDayOfWeek) return $this;
        $this->startDayOfWeek = new SimpleContent($startDayOfWeek);
        $this->startDayOfWeek->setName('startDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek->getValue();
    }

    /**
     * 
     */
    public function setStartHour($startHour = null)
    {
        if (!$startHour) return $this;
        $this->startHour = new SimpleContent($startHour);
        $this->startHour->setName('startHour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartHour()
    {
        return $this->startHour->getValue();
    }

    /**
     * 
     */
    public function setStartMinute($startMinute = null)
    {
        if (!$startMinute) return $this;
        $this->startMinute = new SimpleContent($startMinute);
        $this->startMinute->setName('startMinute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartMinute()
    {
        return $this->startMinute->getValue();
    }

    /**
     * 
     */
    public function setEndDayOfWeek($endDayOfWeek = null)
    {
        if (!$endDayOfWeek) return $this;
        $this->endDayOfWeek = new SimpleContent($endDayOfWeek);
        $this->endDayOfWeek->setName('endDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndDayOfWeek()
    {
        return $this->endDayOfWeek->getValue();
    }

    /**
     * 
     */
    public function setEndHour($endHour = null)
    {
        if (!$endHour) return $this;
        $this->endHour = new SimpleContent($endHour);
        $this->endHour->setName('endHour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndHour()
    {
        return $this->endHour->getValue();
    }

    /**
     * 
     */
    public function setEndMinute($endMinute = null)
    {
        if (!$endMinute) return $this;
        $this->endMinute = new SimpleContent($endMinute);
        $this->endMinute->setName('endMinute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndMinute()
    {
        return $this->endMinute->getValue();
    }
}
