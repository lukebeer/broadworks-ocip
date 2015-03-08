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
     * Request the system level data associated with SMPP external interface.
 *         The response is either a SystemSMPPGetResponse or an ErrorResponse.
 *         Replaced By: SystemSMPPGetRequest14sp5
 */
class SystemSMPPGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSMPPGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
