<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserServiceScriptsUserGetLogRequest.
 */
class UserServiceScriptsUserGetLogResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $logContent  = null;


    public function setLogContent(xs:base64Binary $logContent = null)
    {
    }

    public function getLogContent()
    {
        return (!$this->logContent) ?: $this->logContent->value();
    }
}
