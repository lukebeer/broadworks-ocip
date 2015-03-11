<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class GroupAccountAuthorizationCodesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'GroupAccountAuthorizationCodesGetResponse';
    protected $type                       = null;
    protected $numberOfDigits             = null;
    protected $allowLocalAndTollFreeCalls = null;
    protected $mandatoryUsageUserTable    = null;
    protected $optionalUsageUserTable     = null;

    /**
     * @return GroupAccountAuthorizationCodesGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setType($type = null)
    {
        if (!$type) return $this;
        $this->type = ($type InstanceOf AccountAuthorizationCodeType)
             ? $type
             : new AccountAuthorizationCodeType($type);
        $this->type->setName('type');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeType
     */
    public function getType()
    {
        return $this->type->getValue();
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
    public function setMandatoryUsageUserTable(core:OCITable $mandatoryUsageUserTable = null)
    {
        if (!$mandatoryUsageUserTable) return $this;
        $this->mandatoryUsageUserTable->setName('mandatoryUsageUserTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getMandatoryUsageUserTable()
    {
        return $this->mandatoryUsageUserTable->getValue();
    }

    /**
     * 
     */
    public function setOptionalUsageUserTable(core:OCITable $optionalUsageUserTable = null)
    {
        if (!$optionalUsageUserTable) return $this;
        $this->optionalUsageUserTable->setName('optionalUsageUserTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getOptionalUsageUserTable()
    {
        return $this->optionalUsageUserTable->getValue();
    }
}
