<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIMessageDeskNumber;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSMDIMessageDeskGetRequest.
 */
class UserSMDIMessageDeskGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSMDIMessageDeskGetResponse';
    protected $isActive;
    protected $messageDeskNumber;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\UserSMDIMessageDeskGetResponse $response
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
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMessageDeskNumber($messageDeskNumber = null)
    {
        $this->messageDeskNumber = ($messageDeskNumber InstanceOf SMDIMessageDeskNumber)
             ? $messageDeskNumber
             : new SMDIMessageDeskNumber($messageDeskNumber);
        $this->messageDeskNumber->setElementName('messageDeskNumber');
        return $this;
    }

    /**
     * 
     * @return SMDIMessageDeskNumber $messageDeskNumber
     */
    public function getMessageDeskNumber()
    {
        return ($this->messageDeskNumber)
            ? $this->messageDeskNumber->getElementValue()
            : null;
    }
}
