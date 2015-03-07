<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\ServiceScriptsName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupServiceScriptsGroupGetRequest.
 */
class GroupServiceScriptsGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $isActive       = null;
    protected $scriptName     = null;
    protected $scriptContent  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setScriptName($scriptName = null)
    {
        $this->scriptName = ($scriptName InstanceOf ServiceScriptsName)
             ? $scriptName
             : new ServiceScriptsName($scriptName);
    }

    public function getScriptName()
    {
        return (!$this->scriptName) ?: $this->scriptName->value();
    }

    public function setScriptContent(xs:base64Binary $scriptContent = null)
    {
    }

    public function getScriptContent()
    {
        return (!$this->scriptContent) ?: $this->scriptContent->value();
    }
}
