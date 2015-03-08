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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a Calling Party Category in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $category      = null;
    protected $cpcValue      = null;
    protected $isupOliValue  = null;
    protected $gtdOliValue   = null;
    protected $userCategory  = null;
    protected $payPhone      = null;
    protected $operator      = null;
    protected $becomeDefault = null;
    protected $collectCall   = null;
    protected $webDisplayKey = null;

    public function __construct(
         $category,
         $cpcValue = null,
         $isupOliValue = null,
         $gtdOliValue = null,
         $userCategory = null,
         $payPhone = null,
         $operator = null,
         $becomeDefault = null,
         $collectCall = null,
         $webDisplayKey = null
    ) {
        $this->setCategory($category);
        $this->setCpcValue($cpcValue);
        $this->setIsupOliValue($isupOliValue);
        $this->setGtdOliValue($gtdOliValue);
        $this->setUserCategory($userCategory);
        $this->setPayPhone($payPhone);
        $this->setOperator($operator);
        $this->setBecomeDefault($becomeDefault);
        $this->setCollectCall($collectCall);
        $this->setWebDisplayKey($webDisplayKey);
    }

    /**
     * Name for the Calling Party Category.
     */
    public function setCategory($category = null)
    {
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
    }

    /**
     * Name for the Calling Party Category.
     */
    public function getCategory()
    {
        return (!$this->category) ?: $this->category->getValue();
    }

    /**
     * Value for the Calling Party Category used in signaling.
     */
    public function setCpcValue($cpcValue = null)
    {
        $this->cpcValue = ($cpcValue InstanceOf CallingPartyCategoryValue)
             ? $cpcValue
             : new CallingPartyCategoryValue($cpcValue);
    }

    /**
     * Value for the Calling Party Category used in signaling.
     */
    public function getCpcValue()
    {
        return (!$this->cpcValue) ?: $this->cpcValue->getValue();
    }

    /**
     * ISDN user part originating line information value for the Calling Party Category.
     */
    public function setIsupOliValue($isupOliValue = null)
    {
        $this->isupOliValue = ($isupOliValue InstanceOf ISDNUserPartOriginatingLineInformationValue)
             ? $isupOliValue
             : new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
    }

    /**
     * ISDN user part originating line information value for the Calling Party Category.
     */
    public function getIsupOliValue()
    {
        return (!$this->isupOliValue) ?: $this->isupOliValue->getValue();
    }

    /**
     * ISDN generic transparency descriptor OLI value for the Calling Party Category.
     */
    public function setGtdOliValue($gtdOliValue = null)
    {
        $this->gtdOliValue = ($gtdOliValue InstanceOf ISDNGenericTransparencyDescriptorOliValue)
             ? $gtdOliValue
             : new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
    }

    /**
     * ISDN generic transparency descriptor OLI value for the Calling Party Category.
     */
    public function getGtdOliValue()
    {
        return (!$this->gtdOliValue) ?: $this->gtdOliValue->getValue();
    }

    /**
     * 
     */
    public function setUserCategory($userCategory = null)
    {
        $this->userCategory = (boolean) $userCategory;
    }

    /**
     * 
     */
    public function getUserCategory()
    {
        return (!$this->userCategory) ?: $this->userCategory->getValue();
    }

    /**
     * 
     */
    public function setPayPhone($payPhone = null)
    {
        $this->payPhone = (boolean) $payPhone;
    }

    /**
     * 
     */
    public function getPayPhone()
    {
        return (!$this->payPhone) ?: $this->payPhone->getValue();
    }

    /**
     * 
     */
    public function setOperator($operator = null)
    {
        $this->operator = (boolean) $operator;
    }

    /**
     * 
     */
    public function getOperator()
    {
        return (!$this->operator) ?: $this->operator->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefault($becomeDefault = null)
    {
        $this->becomeDefault = (boolean) $becomeDefault;
    }

    /**
     * 
     */
    public function getBecomeDefault()
    {
        return (!$this->becomeDefault) ?: $this->becomeDefault->getValue();
    }

    /**
     * 
     */
    public function setCollectCall($collectCall = null)
    {
        $this->collectCall = (boolean) $collectCall;
    }

    /**
     * 
     */
    public function getCollectCall()
    {
        return (!$this->collectCall) ?: $this->collectCall->getValue();
    }

    /**
     * The web display key used for localization.
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
    }

    /**
     * The web display key used for localization.
     */
    public function getWebDisplayKey()
    {
        return (!$this->webDisplayKey) ?: $this->webDisplayKey->getValue();
    }
}
