<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Requests a table of all the existing Q850 Cause Value Mappings in the system.
 *         The response is either a SystemTreatmentMappingQ850CauseGetListResponse
 *         or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingQ850CauseGetListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
