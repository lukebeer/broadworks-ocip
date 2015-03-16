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
 * Statistics Range
 */
class CallCenterStatisticsRange extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterStatisticsRange';
    protected $start;
    protected $end;

    public function __construct(
         $start = '',
         $end = null
    ) {
        $this->setStart($start);
        $this->setEnd($end);
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
    public function setStart($start = null)
    {
        $this->start = new SimpleContent($start);
        $this->start->setName('start');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $start
     */
    public function getStart()
    {
        return ($this->start) ? $this->start->getValue() : null;
    }

    /**
     * 
     */
    public function setEnd($end = null)
    {
        $this->end = new SimpleContent($end);
        $this->end->setName('end');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $end
     */
    public function getEnd()
    {
        return ($this->end) ? $this->end->getValue() : null;
    }
}
