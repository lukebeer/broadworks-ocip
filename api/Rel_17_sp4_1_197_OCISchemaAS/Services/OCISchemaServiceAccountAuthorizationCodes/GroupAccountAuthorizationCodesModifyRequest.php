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
    public    $name                        = __CLASS__;
    protected $serviceProviderId           = null;
    protected $groupId                     = null;
    protected $codeType                    = null;
    protected $numberOfDigits              = null;
    protected $allowLocalAndTollFreeCalls  = null;
    protected $mandatoryUsageUserIdList    = null;
    protected $optionalUsageUserIdList     = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $codeType = null,
         $numberOfDigits = null,
         $allowLocalAndTollFreeCalls = null,
         ReplacementUserIdList $mandatoryUsageUserIdList = null,
         ReplacementUserIdList $optionalUsageUserIdList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCodeType($codeType);
        $this->setNumberOfDigits($numberOfDigits);
        $this->setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls);
        $this->setMandatoryUsageUserIdList($mandatoryUsageUserIdList);
        $this->setOptionalUsageUserIdList($optionalUsageUserIdList);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setCodeType($codeType = null)
    {
        $this->codeType = ($codeType InstanceOf AccountAuthorizationCodeType)
             ? $codeType
             : new AccountAuthorizationCodeType($codeType);
    }

    public function getCodeType()
    {
        return (!$this->codeType) ?: $this->codeType->value();
    }

    public function setNumberOfDigits($numberOfDigits = null)
    {
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
    }

    public function getNumberOfDigits()
    {
        return (!$this->numberOfDigits) ?: $this->numberOfDigits->value();
    }

    public function setAllowLocalAndTollFreeCalls(xs:boolean $allowLocalAndTollFreeCalls = null)
    {
    }

    public function getAllowLocalAndTollFreeCalls()
    {
        return (!$this->allowLocalAndTollFreeCalls) ?: $this->allowLocalAndTollFreeCalls->value();
    }

    public function setMandatoryUsageUserIdList(ReplacementUserIdList $mandatoryUsageUserIdList = null)
    {
    }

    public function getMandatoryUsageUserIdList()
    {
        return (!$this->mandatoryUsageUserIdList) ?: $this->mandatoryUsageUserIdList->value();
    }

    public function setOptionalUsageUserIdList(ReplacementUserIdList $optionalUsageUserIdList = null)
    {
    }

    public function getOptionalUsageUserIdList()
    {
        return (!$this->optionalUsageUserIdList) ?: $this->optionalUsageUserIdList->value();
    }
}
