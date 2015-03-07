<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptDNListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add an Intercept User number(s) to the system.
 *             The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserAddDnListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $interceptDNList  = null;

    public function __construct(
         InterceptDNListEntry $interceptDNList = null
    ) {
        $this->setInterceptDNList($interceptDNList);
    }

    public function setInterceptDNList(InterceptDNListEntry $interceptDNList = null)
    {
    }

    public function getInterceptDNList()
    {
        return (!$this->interceptDNList) ?: $this->interceptDNList->value();
    }
}
