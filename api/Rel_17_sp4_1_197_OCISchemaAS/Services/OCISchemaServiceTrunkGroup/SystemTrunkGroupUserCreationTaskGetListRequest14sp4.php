<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the list of user creation tasks in the system.
 *         The response is either SystemTrunkGroupUserCreationTaskGetListResponse14sp4 or ErrorResponse.
 */
class SystemTrunkGroupUserCreationTaskGetListRequest14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\SystemTrunkGroupUserCreationTaskGetListResponse14sp4';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
