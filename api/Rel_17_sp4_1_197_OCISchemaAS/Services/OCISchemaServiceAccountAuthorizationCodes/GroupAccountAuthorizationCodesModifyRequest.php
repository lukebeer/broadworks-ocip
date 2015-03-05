<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccountAuthorizationCodeType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $codeType=null,
             $numberOfDigits=null,
             $allowLocalAndTollFreeCalls=null,
             ReplacementUserIdList $mandatoryUsageUserIdList=null,
             ReplacementUserIdList $optionalUsageUserIdList=null
    ) {
        $this->serviceProviderId          = new ServiceProviderId($serviceProviderId);
        $this->groupId                    = new GroupId($groupId);
        $this->codeType                   = $codeType;
        $this->numberOfDigits             = $numberOfDigits;
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        $this->mandatoryUsageUserIdList   = $mandatoryUsageUserIdList;
        $this->optionalUsageUserIdList    = $optionalUsageUserIdList;
        $this->args                       = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setCodeType($codeType)
    {
        $codeType and $this->codeType = new AccountAuthorizationCodeType($codeType);
    }

    public function getCodeType()
    {
        return (!$this->codeType) ?: $this->codeType->value();
    }

    public function setNumberOfDigits($numberOfDigits)
    {
        $numberOfDigits and $this->numberOfDigits = new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
    }

    public function getNumberOfDigits()
    {
        return (!$this->numberOfDigits) ?: $this->numberOfDigits->value();
    }

    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $allowLocalAndTollFreeCalls and $this->allowLocalAndTollFreeCalls = new xs:boolean($allowLocalAndTollFreeCalls);
    }

    public function getAllowLocalAndTollFreeCalls()
    {
        return (!$this->allowLocalAndTollFreeCalls) ?: $this->allowLocalAndTollFreeCalls->value();
    }

    public function setMandatoryUsageUserIdList($mandatoryUsageUserIdList)
    {
        $mandatoryUsageUserIdList and $this->mandatoryUsageUserIdList = new ReplacementUserIdList($mandatoryUsageUserIdList);
    }

    public function getMandatoryUsageUserIdList()
    {
        return (!$this->mandatoryUsageUserIdList) ?: $this->mandatoryUsageUserIdList->value();
    }

    public function setOptionalUsageUserIdList($optionalUsageUserIdList)
    {
        $optionalUsageUserIdList and $this->optionalUsageUserIdList = new ReplacementUserIdList($optionalUsageUserIdList);
    }

    public function getOptionalUsageUserIdList()
    {
        return (!$this->optionalUsageUserIdList) ?: $this->optionalUsageUserIdList->value();
    }
}
