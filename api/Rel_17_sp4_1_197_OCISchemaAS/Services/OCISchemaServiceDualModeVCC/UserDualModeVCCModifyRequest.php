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
    public    $elementName = 'UserDualModeVCCModifyRequest';
    protected $userId;
    protected $subscriberUserName;
    protected $subscriberPassword;

    public function __construct(
         $userId = '',
         $subscriberUserName = null,
         $subscriberPassword = null
    ) {
        $this->setUserId($userId);
        $this->setSubscriberUserName($subscriberUserName);
        $this->setSubscriberPassword($subscriberPassword);
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
    public function setSubscriberUserName($subscriberUserName = null)
    {
        $this->subscriberUserName = ($subscriberUserName InstanceOf DualModeVCCSubscriberUserName)
             ? $subscriberUserName
             : new DualModeVCCSubscriberUserName($subscriberUserName);
        $this->subscriberUserName->setElementName('subscriberUserName');
        return $this;
    }

    /**
     * 
     * @return DualModeVCCSubscriberUserName $subscriberUserName
     */
    public function getSubscriberUserName()
    {
        return ($this->subscriberUserName)
            ? $this->subscriberUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSubscriberPassword($subscriberPassword = null)
    {
        $this->subscriberPassword = ($subscriberPassword InstanceOf DualModeVCCSubscriberPassword)
             ? $subscriberPassword
             : new DualModeVCCSubscriberPassword($subscriberPassword);
        $this->subscriberPassword->setElementName('subscriberPassword');
        return $this;
    }

    /**
     * 
     * @return DualModeVCCSubscriberPassword $subscriberPassword
     */
    public function getSubscriberPassword()
    {
        return ($this->subscriberPassword)
            ? $this->subscriberPassword->getElementValue()
            : null;
    }
}
