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
     * Request to get the list of Redundancy system parameters.
 *         The response is either SystemRedundancyParametersGetResponse16sp2 or ErrorResponse.
 */
class SystemRedundancyParametersGetRequest16sp2 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRedundancyParametersGetResponse16sp2';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
