<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the list of all Calling Party Category in system.
 *         The response is either a SystemCallingPartyCategoryGetListResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}