<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = 'GroupAccountAuthorizationCodesModifyRequest';
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setCodeType($codeType = null)
    {
        if (!$codeType) return $this;
        $this->codeType = ($codeType InstanceOf AccountAuthorizationCodeType)
             ? $codeType
             : new AccountAuthorizationCodeType($codeType);
        $this->codeType->setName('codeType');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeType
     */
    public function getCodeType()
    {
        return $this->codeType->getValue();
    }

    /**
     * 
     */
    public function setNumberOfDigits($numberOfDigits = null)
    {
        if (!$numberOfDigits) return $this;
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
        $this->numberOfDigits->setName('numberOfDigits');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeNumberOfDigits
     */
    public function getNumberOfDigits()
    {
        return $this->numberOfDigits->getValue();
    }

    /**
     * 
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls = null)
    {
        if (!$allowLocalAndTollFreeCalls) return $this;
        $this->allowLocalAndTollFreeCalls = new PrimitiveType($allowLocalAndTollFreeCalls);
        $this->allowLocalAndTollFreeCalls->setName('allowLocalAndTollFreeCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return $this->allowLocalAndTollFreeCalls->getValue();
    }

    /**
     * 
     */
    public function setMandatoryUsageUserIdList(ReplacementUserIdList $mandatoryUsageUserIdList = null)
    {
        if (!$mandatoryUsageUserIdList) return $this;
        $this->mandatoryUsageUserIdList = $mandatoryUsageUserIdList;
        $this->mandatoryUsageUserIdList->setName('mandatoryUsageUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getMandatoryUsageUserIdList()
    {
        return $this->mandatoryUsageUserIdList;
    }

    /**
     * 
     */
    public function setOptionalUsageUserIdList(ReplacementUserIdList $optionalUsageUserIdList = null)
    {
        if (!$optionalUsageUserIdList) return $this;
        $this->optionalUsageUserIdList = $optionalUsageUserIdList;
        $this->optionalUsageUserIdList->setName('optionalUsageUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getOptionalUsageUserIdList()
    {
        return $this->optionalUsageUserIdList;
    }
}
