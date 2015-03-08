<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the system level data associated with Enhanced Call Logs. The response is either a 
 *         SystemEnhancedCallLogsGetResponse17sp4 or an ErrorResponse.
 */
class SystemEnhancedCallLogsGetRequest17sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\SystemEnhancedCallLogsGetResponse17sp4';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
