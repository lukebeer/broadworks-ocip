<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:base64Binary;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupServiceScriptsGroupGetLogRequest.
 */
class GroupServiceScriptsGroupGetLogResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $logContent=null
    ) {
        $this->logContent = $logContent;
        $this->args       = func_get_args();
    }

    public function setLogContent($logContent)
    {
        $logContent and $this->logContent = new xs:base64Binary($logContent);
    }

    public function getLogContent()
    {
        return (!$this->logContent) ?: $this->logContent->value();
    }
}
