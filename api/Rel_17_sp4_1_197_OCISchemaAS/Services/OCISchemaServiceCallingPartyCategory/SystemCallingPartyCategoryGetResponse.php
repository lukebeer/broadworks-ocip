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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallingPartyCategoryGetRequest.
 *         Contains information of a Calling Party Category defined in system.
 */
class SystemCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallingPartyCategoryGetResponse';
    protected $cpcValue;
    protected $isupOliValue;
    protected $gtdOliValue;
    protected $userCategory;
    protected $payPhone;
    protected $operator;
    protected $default;
    protected $collectCall;
    protected $webDisplayKey;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCpcValue($cpcValue = null)
    {
        $this->cpcValue = ($cpcValue InstanceOf CallingPartyCategoryValue)
             ? $cpcValue
             : new CallingPartyCategoryValue($cpcValue);
        $this->cpcValue->setName('cpcValue');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryValue $cpcValue
     */
    public function getCpcValue()
    {
        return ($this->cpcValue) ? $this->cpcValue->getValue() : null;
    }

    /**
     * 
     */
    public function setIsupOliValue($isupOliValue = null)
    {
        $this->isupOliValue = ($isupOliValue InstanceOf ISDNUserPartOriginatingLineInformationValue)
             ? $isupOliValue
             : new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
        $this->isupOliValue->setName('isupOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNUserPartOriginatingLineInformationValue $isupOliValue
     */
    public function getIsupOliValue()
    {
        return ($this->isupOliValue) ? $this->isupOliValue->getValue() : null;
    }

    /**
     * 
     */
    public function setGtdOliValue($gtdOliValue = null)
    {
        $this->gtdOliValue = ($gtdOliValue InstanceOf ISDNGenericTransparencyDescriptorOliValue)
             ? $gtdOliValue
             : new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
        $this->gtdOliValue->setName('gtdOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNGenericTransparencyDescriptorOliValue $gtdOliValue
     */
    public function getGtdOliValue()
    {
        return ($this->gtdOliValue) ? $this->gtdOliValue->getValue() : null;
    }

    /**
     * 
     */
    public function setUserCategory($userCategory = null)
    {
        $this->userCategory = new PrimitiveType($userCategory);
        $this->userCategory->setName('userCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $userCategory
     */
    public function getUserCategory()
    {
        return ($this->userCategory) ? $this->userCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setPayPhone($payPhone = null)
    {
        $this->payPhone = new PrimitiveType($payPhone);
        $this->payPhone->setName('payPhone');
        return $this;
    }

    /**
     * 
     * @return boolean $payPhone
     */
    public function getPayPhone()
    {
        return ($this->payPhone) ? $this->payPhone->getValue() : null;
    }

    /**
     * 
     */
    public function setOperator($operator = null)
    {
        $this->operator = new PrimitiveType($operator);
        $this->operator->setName('operator');
        return $this;
    }

    /**
     * 
     * @return boolean $operator
     */
    public function getOperator()
    {
        return ($this->operator) ? $this->operator->getValue() : null;
    }

    /**
     * 
     */
    public function setDefault($default = null)
    {
        $this->default = new PrimitiveType($default);
        $this->default->setName('default');
        return $this;
    }

    /**
     * 
     * @return boolean $default
     */
    public function getDefault()
    {
        return ($this->default) ? $this->default->getValue() : null;
    }

    /**
     * 
     */
    public function setCollectCall($collectCall = null)
    {
        $this->collectCall = new PrimitiveType($collectCall);
        $this->collectCall->setName('collectCall');
        return $this;
    }

    /**
     * 
     * @return boolean $collectCall
     */
    public function getCollectCall()
    {
        return ($this->collectCall) ? $this->collectCall->getValue() : null;
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
        $this->webDisplayKey->setName('webDisplayKey');
        return $this;
    }

    /**
     * 
     * @return WebDisplayKey $webDisplayKey
     */
    public function getWebDisplayKey()
    {
        return ($this->webDisplayKey) ? $this->webDisplayKey->getValue() : null;
    }
}
