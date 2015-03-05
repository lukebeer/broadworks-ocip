<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InterceptDNListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 */
class SystemInterceptUserGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $interceptUserList=null
    ) {
        $this->interceptUserList = $interceptUserList;
        $this->args              = func_get_args();
    }

    public function setInterceptUserList($interceptUserList)
    {
        $interceptUserList and $this->interceptUserList = new InterceptDNListEntry($interceptUserList);
    }

    public function getInterceptUserList()
    {
        return (!$this->interceptUserList) ?: $this->interceptUserList->value();
    }
}
