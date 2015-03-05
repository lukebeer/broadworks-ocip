<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a Call Center Reporting Server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name
    ) {
        $this->name = new CallCenterReportingServerName($name);
        $this->args = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new CallCenterReportingServerName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }
}
