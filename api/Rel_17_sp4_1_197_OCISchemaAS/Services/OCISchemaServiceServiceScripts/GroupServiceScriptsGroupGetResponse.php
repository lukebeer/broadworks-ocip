<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceScriptsName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:base64Binary;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupServiceScriptsGroupGetRequest.
 */
class GroupServiceScriptsGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $scriptName=null,
             $scriptContent=null
    ) {
        $this->isActive      = $isActive;
        $this->scriptName    = $scriptName;
        $this->scriptContent = $scriptContent;
        $this->args          = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setScriptName($scriptName)
    {
        $scriptName and $this->scriptName = new ServiceScriptsName($scriptName);
    }

    public function getScriptName()
    {
        return (!$this->scriptName) ?: $this->scriptName->value();
    }

    public function setScriptContent($scriptContent)
    {
        $scriptContent and $this->scriptContent = new xs:base64Binary($scriptContent);
    }

    public function getScriptContent()
    {
        return (!$this->scriptContent) ?: $this->scriptContent->value();
    }
}
