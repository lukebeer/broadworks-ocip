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
    public    $name          = 'SystemCallingPartyCategoryGetResponse';
    protected $cpcValue      = null;
    protected $isupOliValue  = null;
    protected $gtdOliValue   = null;
    protected $userCategory  = null;
    protected $payPhone      = null;
    protected $operator      = null;
    protected $default       = null;
    protected $collectCall   = null;
    protected $webDisplayKey = null;

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
        if (!$cpcValue) return $this;
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
        return $this->cpcValue->getValue();
    }

    /**
     * 
     */
    public function setIsupOliValue($isupOliValue = null)
    {
        if (!$isupOliValue) return $this;
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
        return $this->isupOliValue->getValue();
    }

    /**
     * 
     */
    public function setGtdOliValue($gtdOliValue = null)
    {
        if (!$gtdOliValue) return $this;
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
        return $this->gtdOliValue->getValue();
    }

    /**
     * 
     */
    public function setUserCategory($userCategory = null)
    {
        if (!$userCategory) return $this;
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
        return $this->userCategory->getValue();
    }

    /**
     * 
     */
    public function setPayPhone($payPhone = null)
    {
        if (!$payPhone) return $this;
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
        return $this->payPhone->getValue();
    }

    /**
     * 
     */
    public function setOperator($operator = null)
    {
        if (!$operator) return $this;
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
        return $this->operator->getValue();
    }

    /**
     * 
     */
    public function setDefault($default = null)
    {
        if (!$default) return $this;
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
        return $this->default->getValue();
    }

    /**
     * 
     */
    public function setCollectCall($collectCall = null)
    {
        if (!$collectCall) return $this;
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
        return $this->collectCall->getValue();
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        if (!$webDisplayKey) return $this;
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
        return $this->webDisplayKey->getValue();
    }
}
