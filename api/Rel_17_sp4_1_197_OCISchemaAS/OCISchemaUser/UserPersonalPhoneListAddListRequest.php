<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add one or more entries to a user's personal phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPersonalPhoneListAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name   = 'UserPersonalPhoneListAddListRequest';
    protected $userId = null;
    protected $entry  = null;

    public function __construct(
         $userId,
         PhoneListEntry $entry
    ) {
        $this->setUserId($userId);
        $this->setEntry($entry);
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setEntry(PhoneListEntry $entry = null)
    {
        if (!$entry) return $this;
        $this->entry = $entry;
        $this->entry->setName('entry');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntry $entry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
