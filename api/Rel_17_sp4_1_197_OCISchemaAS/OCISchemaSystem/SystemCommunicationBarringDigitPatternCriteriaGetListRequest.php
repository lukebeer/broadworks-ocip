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
 * Get the list of all Digit Pattern Criteria defined at the system level.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetListResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
