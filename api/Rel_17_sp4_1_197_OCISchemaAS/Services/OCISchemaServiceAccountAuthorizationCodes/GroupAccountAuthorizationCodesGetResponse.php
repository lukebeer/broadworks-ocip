<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccountAuthorizationCodeType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccountAuthorizationCodeNumberOfDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class GroupAccountAuthorizationCodesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $type,
             $numberOfDigits,
             $allowLocalAndTollFreeCalls,
             $mandatoryUsageUserTable,
             $optionalUsageUserTable
    ) {
        $this->type                       = $type;
        $this->numberOfDigits             = $numberOfDigits;
        $this->allowLocalAndTollFreeCalls = $allowLocalAndTollFreeCalls;
        $this->mandatoryUsageUserTable    = $mandatoryUsageUserTable;
        $this->optionalUsageUserTable     = $optionalUsageUserTable;
        $this->args                       = func_get_args();
    }

    public function setType($type)
    {
        $type and $this->type = new AccountAuthorizationCodeType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setNumberOfDigits($numberOfDigits)
    {
        $numberOfDigits and $this->numberOfDigits = new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
    }

    public function getNumberOfDigits()
    {
        return (!$this->numberOfDigits) ?: $this->numberOfDigits->value();
    }

    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls)
    {
        $allowLocalAndTollFreeCalls and $this->allowLocalAndTollFreeCalls = new xs:boolean($allowLocalAndTollFreeCalls);
    }

    public function getAllowLocalAndTollFreeCalls()
    {
        return (!$this->allowLocalAndTollFreeCalls) ?: $this->allowLocalAndTollFreeCalls->value();
    }

    public function setMandatoryUsageUserTable($mandatoryUsageUserTable)
    {
        $mandatoryUsageUserTable and $this->mandatoryUsageUserTable = new core:OCITable($mandatoryUsageUserTable);
    }

    public function getMandatoryUsageUserTable()
    {
        return (!$this->mandatoryUsageUserTable) ?: $this->mandatoryUsageUserTable->value();
    }

    public function setOptionalUsageUserTable($optionalUsageUserTable)
    {
        $optionalUsageUserTable and $this->optionalUsageUserTable = new core:OCITable($optionalUsageUserTable);
    }

    public function getOptionalUsageUserTable()
    {
        return (!$this->optionalUsageUserTable) ?: $this->optionalUsageUserTable->value();
    }
}
