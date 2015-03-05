<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to delete an Intercept User number(s) from the system.
 *               The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserDeleteDnListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $phoneNumbers=null
    ) {
        $this->phoneNumbers = new DN($phoneNumbers);
        $this->args         = func_get_args();
    }

    public function setPhoneNumbers($phoneNumbers)
    {
        $phoneNumbers and $this->phoneNumbers = new DN($phoneNumbers);
    }

    public function getPhoneNumbers()
    {
        return (!$this->phoneNumbers) ?: $this->phoneNumbers->value();
    }
}
