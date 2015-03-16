<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an entry in a user's personal phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPersonalPhoneListModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserPersonalPhoneListModifyRequest';
    protected $userId;
    protected $entryName;
    protected $newEntryName;
    protected $phoneNumber;

    public function __construct(
         $userId = '',
         $entryName = '',
         $newEntryName = null,
         $phoneNumber = null
    ) {
        $this->setUserId($userId);
        $this->setEntryName($entryName);
        $this->setNewEntryName($newEntryName);
        $this->setPhoneNumber($phoneNumber);
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
    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf PhoneListEntryName)
             ? $entryName
             : new PhoneListEntryName($entryName);
        $this->entryName->setName('entryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName $entryName
     */
    public function getEntryName()
    {
        return ($this->entryName) ? $this->entryName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewEntryName($newEntryName = null)
    {
        $this->newEntryName = ($newEntryName InstanceOf PhoneListEntryName)
             ? $newEntryName
             : new PhoneListEntryName($newEntryName);
        $this->newEntryName->setName('newEntryName');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntryName $newEntryName
     */
    public function getNewEntryName()
    {
        return ($this->newEntryName) ? $this->newEntryName->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDN)
             ? $phoneNumber
             : new OutgoingDN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }
}
