<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * The bridge Id and the administrators/delegator of the bridge.
 *         The ownerTable has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class InstantConferencingBridgeOwnerList extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
