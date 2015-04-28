<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnhancedCallLogsEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest.
 *         Replaced By: UserEnhancedCallLogsGetListResponse14sp4
 */
class UserEnhancedCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserEnhancedCallLogsGetListResponse';
    protected $placed;
    protected $received;
    protected $missed;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserEnhancedCallLogsGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlaced(EnhancedCallLogsEntry $placed = null)
    {
        $this->placed = ($placed InstanceOf EnhancedCallLogsEntry)
             ? $placed
             : new EnhancedCallLogsEntry($placed);
        $this->placed->setElementName('placed');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry $placed
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * 
     */
    public function setReceived(EnhancedCallLogsEntry $received = null)
    {
        $this->received = ($received InstanceOf EnhancedCallLogsEntry)
             ? $received
             : new EnhancedCallLogsEntry($received);
        $this->received->setElementName('received');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry $received
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * 
     */
    public function setMissed(EnhancedCallLogsEntry $missed = null)
    {
        $this->missed = ($missed InstanceOf EnhancedCallLogsEntry)
             ? $missed
             : new EnhancedCallLogsEntry($missed);
        $this->missed->setElementName('missed');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry $missed
     */
    public function getMissed()
    {
        return $this->missed;
    }
}
