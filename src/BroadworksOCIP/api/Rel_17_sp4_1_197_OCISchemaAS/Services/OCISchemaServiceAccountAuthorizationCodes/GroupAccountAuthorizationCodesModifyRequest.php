<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Change the group's account/authorization codes setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccountAuthorizationCodesModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $codeType;
    protected $numberOfDigits;
    protected $allowLocalAndTollFreeCalls;
    protected $mandatoryUsageUserIdList;
    protected $optionalUsageUserIdList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCodeType($codeType = null)
    {
        $this->codeType = ($codeType InstanceOf AccountAuthorizationCodeType)
             ? $codeType
             : new AccountAuthorizationCodeType($codeType);
        $this->codeType->setElementName('codeType');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeType $codeType
     */
    public function getCodeType()
    {
        return ($this->codeType)
            ? $this->codeType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfDigits($numberOfDigits = null)
    {
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
        $this->numberOfDigits->setElementName('numberOfDigits');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeNumberOfDigits $numberOfDigits
     */
    public function getNumberOfDigits()
    {
        return ($this->numberOfDigits)
            ? $this->numberOfDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls = null)
    {
        $this->allowLocalAndTollFreeCalls = new PrimitiveType($allowLocalAndTollFreeCalls);
        $this->allowLocalAndTollFreeCalls->setElementName('allowLocalAndTollFreeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowLocalAndTollFreeCalls
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return ($this->allowLocalAndTollFreeCalls)
            ? $this->allowLocalAndTollFreeCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMandatoryUsageUserIdList(ReplacementUserIdList $mandatoryUsageUserIdList = null)
    {
        $this->mandatoryUsageUserIdList = ($mandatoryUsageUserIdList InstanceOf ReplacementUserIdList)
             ? $mandatoryUsageUserIdList
             : new ReplacementUserIdList($mandatoryUsageUserIdList);
        $this->mandatoryUsageUserIdList->setElementName('mandatoryUsageUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $mandatoryUsageUserIdList
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
        $this->optionalUsageUserIdList = ($optionalUsageUserIdList InstanceOf ReplacementUserIdList)
             ? $optionalUsageUserIdList
             : new ReplacementUserIdList($optionalUsageUserIdList);
        $this->optionalUsageUserIdList->setElementName('optionalUsageUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $optionalUsageUserIdList
     */
    public function getOptionalUsageUserIdList()
    {
        return $this->optionalUsageUserIdList;
    }
}
