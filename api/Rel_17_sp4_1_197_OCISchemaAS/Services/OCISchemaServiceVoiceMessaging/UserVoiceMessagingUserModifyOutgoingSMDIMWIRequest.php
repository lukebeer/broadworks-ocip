<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's voice messaging outgoing message waiting indicator service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest';
    protected $userId;
    protected $isActive;
    protected $outgoingSMDIMWIPhoneNumberList;

    public function __construct(
         $userId = '',
         $isActive = null,
         ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList = null
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setOutgoingSMDIMWIPhoneNumberList(ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList = null)
    {
        $this->outgoingSMDIMWIPhoneNumberList = ($outgoingSMDIMWIPhoneNumberList InstanceOf ReplacementOutgoingDNList)
             ? $outgoingSMDIMWIPhoneNumberList
             : new ReplacementOutgoingDNList($outgoingSMDIMWIPhoneNumberList);
        $this->outgoingSMDIMWIPhoneNumberList->setName('outgoingSMDIMWIPhoneNumberList');
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
