<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNUserPartOriginatingLineInformationValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNGenericTransparencyDescriptorOliValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Calling Party Category in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingPartyCategoryModifyRequest';
    protected $category;
    protected $cpcValue;
    protected $isupOliValue;
    protected $gtdOliValue;
    protected $userCategory;
    protected $payPhone;
    protected $operator;
    protected $becomeDefault;
    protected $collectCall;
    protected $webDisplayKey;

    public function __construct(
         $category = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCategory($category = null)
    {
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
        $this->category->setElementName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryName $category
     */
    public function getCategory()
    {
        return ($this->category)
            ? $this->category->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCpcValue($cpcValue = null)
    {
        $this->cpcValue = ($cpcValue InstanceOf CallingPartyCategoryValue)
             ? $cpcValue
             : new CallingPartyCategoryValue($cpcValue);
        $this->cpcValue->setElementName('cpcValue');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryValue $cpcValue
     */
    public function getCpcValue()
    {
        return ($this->cpcValue)
            ? $this->cpcValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsupOliValue($isupOliValue = null)
    {
        $this->isupOliValue = ($isupOliValue InstanceOf ISDNUserPartOriginatingLineInformationValue)
             ? $isupOliValue
             : new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
        $this->isupOliValue->setElementName('isupOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNUserPartOriginatingLineInformationValue $isupOliValue
     */
    public function getIsupOliValue()
    {
        return ($this->isupOliValue)
            ? $this->isupOliValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGtdOliValue($gtdOliValue = null)
    {
        $this->gtdOliValue = ($gtdOliValue InstanceOf ISDNGenericTransparencyDescriptorOliValue)
             ? $gtdOliValue
             : new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
        $this->gtdOliValue->setElementName('gtdOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNGenericTransparencyDescriptorOliValue $gtdOliValue
     */
    public function getGtdOliValue()
    {
        return ($this->gtdOliValue)
            ? $this->gtdOliValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserCategory($userCategory = null)
    {
        $this->userCategory = new PrimitiveType($userCategory);
        $this->userCategory->setElementName('userCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $userCategory
     */
    public function getUserCategory()
    {
        return ($this->userCategory)
            ? $this->userCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPayPhone($payPhone = null)
    {
        $this->payPhone = new PrimitiveType($payPhone);
        $this->payPhone->setElementName('payPhone');
        return $this;
    }

    /**
     * 
     * @return boolean $payPhone
     */
    public function getPayPhone()
    {
        return ($this->payPhone)
            ? $this->payPhone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOperator($operator = null)
    {
        $this->operator = new PrimitiveType($operator);
        $this->operator->setElementName('operator');
        return $this;
    }

    /**
     * 
     * @return boolean $operator
     */
    public function getOperator()
    {
        return ($this->operator)
            ? $this->operator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBecomeDefault($becomeDefault = null)
    {
        $this->becomeDefault = new PrimitiveType($becomeDefault);
        $this->becomeDefault->setElementName('becomeDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefault
     */
    public function getBecomeDefault()
    {
        return ($this->becomeDefault)
            ? $this->becomeDefault->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCollectCall($collectCall = null)
    {
        $this->collectCall = new PrimitiveType($collectCall);
        $this->collectCall->setElementName('collectCall');
        return $this;
    }

    /**
     * 
     * @return boolean $collectCall
     */
    public function getCollectCall()
    {
        return ($this->collectCall)
            ? $this->collectCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
        $this->webDisplayKey->setElementName('webDisplayKey');
        return $this;
    }

    /**
     * 
     * @return WebDisplayKey $webDisplayKey
     */
    public function getWebDisplayKey()
    {
        return ($this->webDisplayKey)
            ? $this->webDisplayKey->getElementValue()
            : null;
    }
}
