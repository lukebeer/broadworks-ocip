<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceProviderId          = null;
    protected $groupId                    = null;
    protected $codeType                   = null;
    protected $numberOfDigits             = null;
    protected $allowLocalAndTollFreeCalls = null;
    protected $mandatoryUsageUserIdList   = null;
    protected $optionalUsageUserIdList    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $codeType = null,
         $numberOfDigits = null,
         $allowLocalAndTollFreeCalls = null,
          $mandatoryUsageUserIdList = null,
          $optionalUsageUserIdList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCodeType($codeType);
        $this->setNumberOfDigits($numberOfDigits);
        $this->setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls);
        $this->setMandatoryUsageUserIdList($mandatoryUsageUserIdList);
        $this->setOptionalUsageUserIdList($optionalUsageUserIdList);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Account/Authorization Code Type.
     */
    public function setCodeType($codeType = null)
    {
        $this->codeType = ($codeType InstanceOf AccountAuthorizationCodeType)
             ? $codeType
             : new AccountAuthorizationCodeType($codeType);
    }

    /**
     * Account/Authorization Code Type.
     */
    public function getCodeType()
    {
        return (!$this->codeType) ?: $this->codeType->getValue();
    }

    /**
     * Number of Account/Authorization Code Digits.
     */
    public function setNumberOfDigits($numberOfDigits = null)
    {
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
    }

    /**
     * Number of Account/Authorization Code Digits.
     */
    public function getNumberOfDigits()
    {
        return (!$this->numberOfDigits) ?: $this->numberOfDigits->getValue();
    }

    /**
     * 
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls = null)
    {
        $this->allowLocalAndTollFreeCalls = (boolean) $allowLocalAndTollFreeCalls;
    }

    /**
     * 
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return (!$this->allowLocalAndTollFreeCalls) ?: $this->allowLocalAndTollFreeCalls->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setMandatoryUsageUserIdList(ReplacementUserIdList $mandatoryUsageUserIdList = null)
    {
        $this->mandatoryUsageUserIdList =  $mandatoryUsageUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getMandatoryUsageUserIdList()
    {
        return (!$this->mandatoryUsageUserIdList) ?: $this->mandatoryUsageUserIdList->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setOptionalUsageUserIdList(ReplacementUserIdList $optionalUsageUserIdList = null)
    {
        $this->optionalUsageUserIdList =  $optionalUsageUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getOptionalUsageUserIdList()
    {
        return (!$this->optionalUsageUserIdList) ?: $this->optionalUsageUserIdList->getValue();
    }
}
