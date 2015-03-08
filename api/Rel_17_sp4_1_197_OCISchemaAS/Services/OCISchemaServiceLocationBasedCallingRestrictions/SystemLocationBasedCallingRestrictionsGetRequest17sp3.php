<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Gets system level the Location Based Calling Restrictions attributes.
 *         The response is either a SystemLocationBasedCallingRestrictionsGetResponse17sp3 or an ErrorResponse.
 */
class SystemLocationBasedCallingRestrictionsGetRequest17sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions\SystemLocationBasedCallingRestrictionsGetResponse17sp3';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
