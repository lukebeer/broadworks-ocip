<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccountAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccountAuthorizationCodesGetListRequest.
 */
class GroupAccountAuthorizationCodesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $codeEntry=null
    ) {
        $this->codeEntry = $codeEntry;
        $this->args      = func_get_args();
    }

    public function setCodeEntry($codeEntry)
    {
        $codeEntry and $this->codeEntry = new AccountAuthorizationCodeEntry($codeEntry);
    }

    public function getCodeEntry()
    {
        return (!$this->codeEntry) ?: $this->codeEntry->value();
    }
}
