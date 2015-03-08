<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * A list of Service Provider Communication Barring Hierarchical Call Me Now Rules that replaces a previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
