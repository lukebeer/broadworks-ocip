<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial8; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial8\SpeedDial8Entry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial8\UserSpeedDial8ModifyListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the speed dial 8 settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserSpeedDial8ModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $userId         = null;
    protected $speedDialEntry = null;

    public function __construct(
         $userId,
          $speedDialEntry = null
    ) {
        $this->setUserId($userId);
        $this->setSpeedDialEntry($speedDialEntry);
    }

    /**
     * @return UserSpeedDial8ModifyListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Modify the speed dial 8 prefix setting for a group.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function setSpeedDialEntry(SpeedDial8Entry $speedDialEntry = null)
    {
        $this->speedDialEntry =  $speedDialEntry;
    }

    /**
     * Modify the speed dial 8 prefix setting for a group.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function getSpeedDialEntry()
    {
        return (!$this->speedDialEntry) ?: $this->speedDialEntry->getValue();
    }
}
