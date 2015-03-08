<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of expensive alternate call indicators in the system.
 *         The response is either a SystemExpensiveCallTypeGetListResponse or an ErrorResponse.
 *         Replaced by: SystemExpensiveCallTypeGetListRequest16sp1
 */
class SystemExpensiveCallTypeGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemExpensiveCallTypeGetListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}