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
     * A list of Communication Barring CallMeNow Rules that replaces a
 *         previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringCallMeNowRuleList extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementCommunicationBarringCallMeNowRuleList';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}