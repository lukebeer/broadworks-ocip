<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call center enhanced reporting report past interval, for example, last 24 month.
 */
class CallCenterReportPastInterval extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterReportPastInterval';
    protected $number;
    protected $timeUnit;

    public function __construct(
         $number = '',
         $timeUnit = ''
    ) {
        $this->setNumber($number);
        $this->setTimeUnit($timeUnit);
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
    public function setNumber($number = null)
    {
        $this->number = new SimpleContent($number);
        $this->number->setName('number');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $number
     */
    public function getNumber()
    {
        return ($this->number) ? $this->number->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeUnit($timeUnit = null)
    {
        $this->timeUnit = new SimpleContent($timeUnit);
        $this->timeUnit->setName('timeUnit');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeUnit
     */
    public function getTimeUnit()
    {
        return ($this->timeUnit) ? $this->timeUnit->getValue() : null;
    }
}
