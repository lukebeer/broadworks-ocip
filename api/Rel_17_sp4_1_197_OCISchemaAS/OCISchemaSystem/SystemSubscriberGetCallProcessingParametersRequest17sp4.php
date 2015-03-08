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
     * Get the system call processing configuration for all subscribers
 *         The response is either a SystemSubscriberGetCallProcessingParametersResponse17sp4
 *         or an ErrorResponse.
 */
class SystemSubscriberGetCallProcessingParametersRequest17sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSubscriberGetCallProcessingParametersResponse17sp4';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}