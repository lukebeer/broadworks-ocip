<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get a list of SMDI Servers defined in the system.
 *         The response is either a SystemSMDIMessageDeskGetServerListResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskGetServerListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk\SystemSMDIMessageDeskGetServerListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
