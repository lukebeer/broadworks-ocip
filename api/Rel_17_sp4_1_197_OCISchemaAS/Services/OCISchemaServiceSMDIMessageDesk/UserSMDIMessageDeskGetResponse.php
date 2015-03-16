<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIMessageDeskNumber;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSMDIMessageDeskGetRequest.
 */
class UserSMDIMessageDeskGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSMDIMessageDeskGetResponse';
    protected $isActive;
    protected $messageDeskNumber;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\UserSMDIMessageDeskGetResponse $response
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
