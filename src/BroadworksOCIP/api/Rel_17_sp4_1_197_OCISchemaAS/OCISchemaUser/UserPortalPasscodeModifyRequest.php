<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's Portal passcode
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPortalPasscodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPortalPasscodeModifyRequest';
    protected $userId;
    protected $oldPasscode;
    protected $newPasscode;

    public function __construct(
         $userId = '',
         $oldPasscode = null,
         $newPasscode = ''
    ) {
        $this->setUserId($userId);
        $this->setOldPasscode($oldPasscode);
        $this->setNewPasscode($newPasscode);
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
    public function setOldPasscode($oldPasscode = null)
    {
        $this->oldPasscode = ($oldPasscode InstanceOf Passcode)
             ? $oldPasscode
             : new Passcode($oldPasscode);
        $this->oldPasscode->setElementName('oldPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode $oldPasscode
     */
    public function getOldPasscode()
    {
        return ($this->oldPasscode)
            ? $this->oldPasscode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewPasscode($newPasscode = null)
    {
        $this->newPasscode = ($newPasscode InstanceOf Passcode)
             ? $newPasscode
             : new Passcode($newPasscode);
        $this->newPasscode->setElementName('newPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode $newPasscode
     */
    public function getNewPasscode()
    {
        return ($this->newPasscode)
            ? $this->newPasscode->getElementValue()
            : null;
    }
}
