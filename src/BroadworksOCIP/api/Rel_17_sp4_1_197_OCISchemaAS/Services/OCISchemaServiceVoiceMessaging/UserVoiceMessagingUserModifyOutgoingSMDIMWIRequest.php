<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's voice messaging outgoing message waiting indicator service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest';
    protected $userId;
    protected $isActive;
    protected $outgoingSMDIMWIPhoneNumberList;

    public function __construct(
         $userId = '',
         $isActive = null,
         $outgoingSMDIMWIPhoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setOutgoingSMDIMWIPhoneNumberList($outgoingSMDIMWIPhoneNumberList);
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
    public function setOutgoingSMDIMWIPhoneNumberList(ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList = null)
    {
        $this->outgoingSMDIMWIPhoneNumberList = ($outgoingSMDIMWIPhoneNumberList InstanceOf ReplacementOutgoingDNList)
             ? $outgoingSMDIMWIPhoneNumberList
             : new ReplacementOutgoingDNList($outgoingSMDIMWIPhoneNumberList);
        $this->outgoingSMDIMWIPhoneNumberList->setElementName('outgoingSMDIMWIPhoneNumberList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList
     */
    public function getOutgoingSMDIMWIPhoneNumberList()
    {
        return $this->outgoingSMDIMWIPhoneNumberList;
    }
}
