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
     * Request to get the list of CPE Config system parameters.
 *         The response is either SystemCPEConfigParametersGetResponse14sp6 or ErrorResponse.
 */
class SystemCPEConfigParametersGetRequest14sp6 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigParametersGetResponse14sp6';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
