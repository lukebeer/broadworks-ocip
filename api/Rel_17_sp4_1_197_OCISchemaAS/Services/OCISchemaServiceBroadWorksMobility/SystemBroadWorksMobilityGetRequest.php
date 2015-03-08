<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the broadworks mobility system parameters.
 *         The response is either a SystemBroadWorksMobilityGetResponse or an ErrorResponse.
 */
class SystemBroadWorksMobilityGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}