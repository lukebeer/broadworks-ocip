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
     * CommPilot Express Available Out Of Office Configuration used in the context of a modify.
 */
class CommPilotExpressAvailableOutOfOfficeModify extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotExpress\CommPilotExpressAvailableOutOfOfficeModify';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}