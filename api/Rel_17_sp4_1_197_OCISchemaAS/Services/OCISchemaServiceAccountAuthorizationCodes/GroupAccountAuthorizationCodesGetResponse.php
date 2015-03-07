<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class GroupAccountAuthorizationCodesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $type                        = null;
    protected $numberOfDigits              = null;
    protected $allowLocalAndTollFreeCalls  = null;
    protected $mandatoryUsageUserTable     = null;
    protected $optionalUsageUserTable      = null;


    public function setType($type = null)
    {
        $this->type = ($type InstanceOf AccountAuthorizationCodeType)
             ? $type
             : new AccountAuthorizationCodeType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setNumberOfDigits($numberOfDigits = null)
    {
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
    }

    public function getNumberOfDigits()
    {
        return (!$this->numberOfDigits) ?: $this->numberOfDigits->value();
    }

    public function setAllowLocalAndTollFreeCalls(xs:boolean $allowLocalAndTollFreeCalls = null)
    {
    }

    public function getAllowLocalAndTollFreeCalls()
    {
        return (!$this->allowLocalAndTollFreeCalls) ?: $this->allowLocalAndTollFreeCalls->value();
    }

    public function setMandatoryUsageUserTable(core:OCITable $mandatoryUsageUserTable = null)
    {
    }

    public function getMandatoryUsageUserTable()
    {
        return (!$this->mandatoryUsageUserTable) ?: $this->mandatoryUsageUserTable->value();
    }

    public function setOptionalUsageUserTable(core:OCITable $optionalUsageUserTable = null)
    {
    }

    public function getOptionalUsageUserTable()
    {
        return (!$this->optionalUsageUserTable) ?: $this->optionalUsageUserTable->value();
    }
}
