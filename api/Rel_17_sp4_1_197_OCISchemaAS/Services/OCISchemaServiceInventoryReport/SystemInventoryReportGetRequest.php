<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the system level data associated with Inventory Report.
 *         The response is either a SystemInventoryReportGetResponse or an
 *         ErrorResponse.
 */
class SystemInventoryReportGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInventoryReport\SystemInventoryReportGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
