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
     * Requests the list of device CPE config file servers.
 *         The response is either SystemCPEConfigGetFileServerListResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigGetFileServerListRequest14sp6
 */
class SystemCPEConfigGetFileServerListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemCPEConfigGetFileServerListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
