<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * CommPilot Express type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 */
class CommPilotExpressRedirectionModify extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress\CommPilotExpressRedirectionModify';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}