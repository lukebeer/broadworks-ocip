<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPartyCategoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPartyCategoryValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ISDNUserPartOriginatingLineInformationValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ISDNGenericTransparencyDescriptorOliValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Calling Party Category in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $category,
             $cpcValue=null,
             $isupOliValue=null,
             $gtdOliValue=null,
             $userCategory=null,
             $payPhone=null,
             $operator=null,
             $becomeDefault=null,
             $collectCall=null,
             $webDisplayKey=null
    ) {
        $this->category      = $category;
        $this->cpcValue      = $cpcValue;
        $this->isupOliValue  = $isupOliValue;
        $this->gtdOliValue   = $gtdOliValue;
        $this->userCategory  = $userCategory;
        $this->payPhone      = $payPhone;
        $this->operator      = $operator;
        $this->becomeDefault = $becomeDefault;
        $this->collectCall   = $collectCall;
        $this->webDisplayKey = new WebDisplayKey($webDisplayKey);
        $this->args          = func_get_args();
    }

    public function setCategory($category)
    {
        $category and $this->category = new CallingPartyCategoryName($category);
    }

    public function getCategory()
    {
        return (!$this->category) ?: $this->category->value();
    }

    public function setCpcValue($cpcValue)
    {
        $cpcValue and $this->cpcValue = new CallingPartyCategoryValue($cpcValue);
    }

    public function getCpcValue()
    {
        return (!$this->cpcValue) ?: $this->cpcValue->value();
    }

    public function setIsupOliValue($isupOliValue)
    {
        $isupOliValue and $this->isupOliValue = new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
    }

    public function getIsupOliValue()
    {
        return (!$this->isupOliValue) ?: $this->isupOliValue->value();
    }

    public function setGtdOliValue($gtdOliValue)
    {
        $gtdOliValue and $this->gtdOliValue = new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
    }

    public function getGtdOliValue()
    {
        return (!$this->gtdOliValue) ?: $this->gtdOliValue->value();
    }

    public function setUserCategory($userCategory)
    {
        $userCategory and $this->userCategory = new xs:boolean($userCategory);
    }

    public function getUserCategory()
    {
        return (!$this->userCategory) ?: $this->userCategory->value();
    }

    public function setPayPhone($payPhone)
    {
        $payPhone and $this->payPhone = new xs:boolean($payPhone);
    }

    public function getPayPhone()
    {
        return (!$this->payPhone) ?: $this->payPhone->value();
    }

    public function setOperator($operator)
    {
        $operator and $this->operator = new xs:boolean($operator);
    }

    public function getOperator()
    {
        return (!$this->operator) ?: $this->operator->value();
    }

    public function setBecomeDefault($becomeDefault)
    {
        $becomeDefault and $this->becomeDefault = new xs:boolean($becomeDefault);
    }

    public function getBecomeDefault()
    {
        return (!$this->becomeDefault) ?: $this->becomeDefault->value();
    }

    public function setCollectCall($collectCall)
    {
        $collectCall and $this->collectCall = new xs:boolean($collectCall);
    }

    public function getCollectCall()
    {
        return (!$this->collectCall) ?: $this->collectCall->value();
    }

    public function setWebDisplayKey($webDisplayKey)
    {
        $webDisplayKey and $this->webDisplayKey = new WebDisplayKey($webDisplayKey);
    }

    public function getWebDisplayKey()
    {
        return (!$this->webDisplayKey) ?: $this->webDisplayKey->value();
    }
}
