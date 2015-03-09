<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy\UserPrivacyModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $userId                                     = null;
    protected $enableDirectoryPrivacy                     = null;
    protected $enableAutoAttendantExtensionDialingPrivacy = null;
    protected $enableAutoAttendantNameDialingPrivacy      = null;
    protected $enablePhoneStatusPrivacy                   = null;
    protected $permittedMonitorUserIdList                 = null;

    public function __construct(
         $userId,
         $enableDirectoryPrivacy = null,
         $enableAutoAttendantExtensionDialingPrivacy = null,
         $enableAutoAttendantNameDialingPrivacy = null,
         $enablePhoneStatusPrivacy = null,
          $permittedMonitorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setEnableDirectoryPrivacy($enableDirectoryPrivacy);
        $this->setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy);
        $this->setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy);
        $this->setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy);
        $this->setPermittedMonitorUserIdList($permittedMonitorUserIdList);
    }

    /**
     * @return UserPrivacyModifyResponse
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
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        $this->enableDirectoryPrivacy = (boolean) $enableDirectoryPrivacy;
    }

    /**
     * 
     */
    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = (boolean) $enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * 
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        $this->enableAutoAttendantNameDialingPrivacy = (boolean) $enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * 
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * 
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy = null)
    {
        $this->enablePhoneStatusPrivacy = (boolean) $enablePhoneStatusPrivacy;
    }

    /**
     * 
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return (!$this->enablePhoneStatusPrivacy) ?: $this->enablePhoneStatusPrivacy;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setPermittedMonitorUserIdList(ReplacementUserIdList $permittedMonitorUserIdList = null)
    {
        $this->permittedMonitorUserIdList =  $permittedMonitorUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getPermittedMonitorUserIdList()
    {
        return (!$this->permittedMonitorUserIdList) ?: $this->permittedMonitorUserIdList->getValue();
    }
}
