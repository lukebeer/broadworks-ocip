<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNUserPartOriginatingLineInformationValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNGenericTransparencyDescriptorOliValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallingPartyCategoryGetRequest.
 *         Contains information of a Calling Party Category defined in system.
 */
class SystemCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $cpcValue       = null;
    protected $isupOliValue   = null;
    protected $gtdOliValue    = null;
    protected $userCategory   = null;
    protected $payPhone       = null;
    protected $operator       = null;
    protected $default        = null;
    protected $collectCall    = null;
    protected $webDisplayKey  = null;


    public function setCpcValue($cpcValue = null)
    {
        $this->cpcValue = ($cpcValue InstanceOf CallingPartyCategoryValue)
             ? $cpcValue
             : new CallingPartyCategoryValue($cpcValue);
    }

    public function getCpcValue()
    {
        return (!$this->cpcValue) ?: $this->cpcValue->value();
    }

    public function setIsupOliValue($isupOliValue = null)
    {
        $this->isupOliValue = ($isupOliValue InstanceOf ISDNUserPartOriginatingLineInformationValue)
             ? $isupOliValue
             : new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
    }

    public function getIsupOliValue()
    {
        return (!$this->isupOliValue) ?: $this->isupOliValue->value();
    }

    public function setGtdOliValue($gtdOliValue = null)
    {
        $this->gtdOliValue = ($gtdOliValue InstanceOf ISDNGenericTransparencyDescriptorOliValue)
             ? $gtdOliValue
             : new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
    }

    public function getGtdOliValue()
    {
        return (!$this->gtdOliValue) ?: $this->gtdOliValue->value();
    }

    public function setUserCategory(xs:boolean $userCategory = null)
    {
    }

    public function getUserCategory()
    {
        return (!$this->userCategory) ?: $this->userCategory->value();
    }

    public function setPayPhone(xs:boolean $payPhone = null)
    {
    }

    public function getPayPhone()
    {
        return (!$this->payPhone) ?: $this->payPhone->value();
    }

    public function setOperator(xs:boolean $operator = null)
    {
    }

    public function getOperator()
    {
        return (!$this->operator) ?: $this->operator->value();
    }

    public function setDefault(xs:boolean $default = null)
    {
    }

    public function getDefault()
    {
        return (!$this->default) ?: $this->default->value();
    }

    public function setCollectCall(xs:boolean $collectCall = null)
    {
    }

    public function getCollectCall()
    {
        return (!$this->collectCall) ?: $this->collectCall->value();
    }

    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
    }

    public function getWebDisplayKey()
    {
        return (!$this->webDisplayKey) ?: $this->webDisplayKey->value();
    }
}
