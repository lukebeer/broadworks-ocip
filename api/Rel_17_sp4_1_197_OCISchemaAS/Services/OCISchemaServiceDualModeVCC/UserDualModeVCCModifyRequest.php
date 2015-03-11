<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC\DualModeVCCSubscriberUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DualModeVCCSubscriberPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name               = 'UserDualModeVCCModifyRequest';
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
     * @return 
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
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSubscriberUserName($subscriberUserName = null)
    {
        if (!$subscriberUserName) return $this;
        $this->subscriberUserName = ($subscriberUserName InstanceOf DualModeVCCSubscriberUserName)
             ? $subscriberUserName
             : new DualModeVCCSubscriberUserName($subscriberUserName);
        $this->subscriberUserName->setName('subscriberUserName');
        return $this;
    }

    /**
     * 
     * @return DualModeVCCSubscriberUserName
     */
    public function getSubscriberUserName()
    {
        return $this->subscriberUserName->getValue();
    }

    /**
     * 
     */
    public function setSubscriberPassword($subscriberPassword = null)
    {
        if (!$subscriberPassword) return $this;
        $this->subscriberPassword = ($subscriberPassword InstanceOf DualModeVCCSubscriberPassword)
             ? $subscriberPassword
             : new DualModeVCCSubscriberPassword($subscriberPassword);
        $this->subscriberPassword->setName('subscriberPassword');
        return $this;
    }

    /**
     * 
     * @return DualModeVCCSubscriberPassword
     */
    public function getSubscriberPassword()
    {
        return $this->subscriberPassword->getValue();
    }
}
