<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceFaxMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementSIPAliasList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Fax Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserFaxMessagingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserFaxMessagingModifyRequest';
    protected $userId;
    protected $isActive;
    protected $phoneNumber;
    protected $extension;
    protected $sipAliasList;

    public function __construct(
         $userId = '',
         $isActive = null,
         $phoneNumber = null,
         $extension = null,
         $sipAliasList = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setSipAliasList($sipAliasList);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
        $this->extension->setElementName('extension');
        return $this;
    }

    /**
     * 
     * @return Extension17 $extension
     */
    public function getExtension()
    {
        return ($this->extension)
            ? $this->extension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipAliasList(ReplacementSIPAliasList $sipAliasList = null)
    {
        $this->sipAliasList = ($sipAliasList InstanceOf ReplacementSIPAliasList)
             ? $sipAliasList
             : new ReplacementSIPAliasList($sipAliasList);
        $this->sipAliasList->setElementName('sipAliasList');
        return $this;
    }

    /**
     * 
     * @return ReplacementSIPAliasList $sipAliasList
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList;
    }
}
