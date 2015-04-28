<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\BasicCallLogsEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserBasicCallLogsGetListRequest.
 *         Replaced By: UserBasicCallLogsGetListResponse14sp4
 */
class UserBasicCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBasicCallLogsGetListResponse';
    protected $placed;
    protected $received;
    protected $missed;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserBasicCallLogsGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlaced(BasicCallLogsEntry $placed = null)
    {
        $this->placed = ($placed InstanceOf BasicCallLogsEntry)
             ? $placed
             : new BasicCallLogsEntry($placed);
        $this->placed->setElementName('placed');
        return $this;
    }

    /**
     * 
     * @return BasicCallLogsEntry $placed
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * 
     */
    public function setReceived(BasicCallLogsEntry $received = null)
    {
        $this->received = ($received InstanceOf BasicCallLogsEntry)
             ? $received
             : new BasicCallLogsEntry($received);
        $this->received->setElementName('received');
        return $this;
    }

    /**
     * 
     * @return BasicCallLogsEntry $received
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * 
     */
    public function setMissed(BasicCallLogsEntry $missed = null)
    {
        $this->missed = ($missed InstanceOf BasicCallLogsEntry)
             ? $missed
             : new BasicCallLogsEntry($missed);
        $this->missed->setElementName('missed');
        return $this;
    }

    /**
     * 
     * @return BasicCallLogsEntry $missed
     */
    public function getMissed()
    {
        return $this->missed;
    }
}
