<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the system call processing configuration for all subscribers
 *         The response is either a SystemSubscriberGetCallProcessingParametersResponse14sp3 or an ErrorResponse.
 */
class SystemSubscriberGetCallProcessingParametersRequest14sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSubscriberGetCallProcessingParametersResponse14sp3';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
