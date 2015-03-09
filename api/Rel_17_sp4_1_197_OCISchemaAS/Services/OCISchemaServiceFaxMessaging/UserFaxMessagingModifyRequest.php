<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceFaxMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementSIPAliasList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceFaxMessaging\UserFaxMessagingModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Fax Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserFaxMessagingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $userId       = null;
    protected $isActive     = null;
    protected $phoneNumber  = null;
    protected $extension    = null;
    protected $sipAliasList = null;

    public function __construct(
         $userId,
         $isActive = null,
         $phoneNumber = null,
         $extension = null,
          $sipAliasList = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setSipAliasList($sipAliasList);
    }

    /**
     * @return UserFaxMessagingModifyResponse
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->getValue();
    }

    /**
     * Extension.
     */
    public function setExtension($extension = null)
    {
        $this->extension = ($extension InstanceOf Extension17)
             ? $extension
             : new Extension17($extension);
    }

    /**
     * Extension.
     */
    public function getExtension()
    {
        return (!$this->extension) ?: $this->extension->getValue();
    }

    /**
     * A list of SIP aliases that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setSipAliasList(ReplacementSIPAliasList $sipAliasList = null)
    {
        $this->sipAliasList =  $sipAliasList;
    }

    /**
     * A list of SIP aliases that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getSipAliasList()
    {
        return (!$this->sipAliasList) ?: $this->sipAliasList->getValue();
    }
}
