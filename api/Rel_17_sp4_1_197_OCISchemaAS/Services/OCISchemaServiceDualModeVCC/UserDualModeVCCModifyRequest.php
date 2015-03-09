<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC\DualModeVCCSubscriberUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DualModeVCCSubscriberPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC\UserDualModeVCCModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the user level IN Integration service attributes
 *         Response is either UserINIntegrationGetResponse or ErrorResponse
 */
class UserDualModeVCCModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $subscriberUserName = null;
    protected $subscriberPassword = null;

    public function __construct(
         $userId,
         $subscriberUserName = null,
         $subscriberPassword = null
    ) {
        $this->setUserId($userId);
        $this->setSubscriberUserName($subscriberUserName);
        $this->setSubscriberPassword($subscriberPassword);
    }

    /**
     * @return UserDualModeVCCModifyResponse
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
     * Dual Mode VCC Service subscriber user name
     */
    public function setSubscriberUserName($subscriberUserName = null)
    {
        $this->subscriberUserName = ($subscriberUserName InstanceOf DualModeVCCSubscriberUserName)
             ? $subscriberUserName
             : new DualModeVCCSubscriberUserName($subscriberUserName);
    }

    /**
     * Dual Mode VCC Service subscriber user name
     */
    public function getSubscriberUserName()
    {
        return (!$this->subscriberUserName) ?: $this->subscriberUserName->getValue();
    }

    /**
     * Dual Mode VCC subscriber password
     */
    public function setSubscriberPassword($subscriberPassword = null)
    {
        $this->subscriberPassword = ($subscriberPassword InstanceOf DualModeVCCSubscriberPassword)
             ? $subscriberPassword
             : new DualModeVCCSubscriberPassword($subscriberPassword);
    }

    /**
     * Dual Mode VCC subscriber password
     */
    public function getSubscriberPassword()
    {
        return (!$this->subscriberPassword) ?: $this->subscriberPassword->getValue();
    }
}
