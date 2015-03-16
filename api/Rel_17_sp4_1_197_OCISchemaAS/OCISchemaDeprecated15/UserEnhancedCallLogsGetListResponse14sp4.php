<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest14sp4.
 *             Replaced by: UserEnhancedCallLogsGetListResponse16
 */
class UserEnhancedCallLogsGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserEnhancedCallLogsGetListResponse14sp4';
    protected $placed;
    protected $received;
    protected $missed;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserEnhancedCallLogsGetListResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlaced(CallLogsEntry $placed = null)
    {
        $this->placed = ($placed InstanceOf CallLogsEntry)
             ? $placed
             : new CallLogsEntry($placed);
        $this->placed->setElementName('placed');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $placed
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * 
     */
    public function setReceived(CallLogsEntry $received = null)
    {
        $this->received = ($received InstanceOf CallLogsEntry)
             ? $received
             : new CallLogsEntry($received);
        $this->received->setElementName('received');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $received
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * 
     */
    public function setMissed(CallLogsEntry $missed = null)
    {
        $this->missed = ($missed InstanceOf CallLogsEntry)
             ? $missed
             : new CallLogsEntry($missed);
        $this->missed->setElementName('missed');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $missed
     */
    public function getMissed()
    {
        return $this->missed;
    }
}
