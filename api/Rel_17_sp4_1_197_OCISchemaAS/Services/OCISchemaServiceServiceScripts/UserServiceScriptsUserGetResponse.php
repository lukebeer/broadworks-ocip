<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\ServiceScriptsName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceServiceScripts\UserServiceScriptsUserGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserServiceScriptsUserGetRequest.
 */
class UserServiceScriptsUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $isActive      = null;
    protected $scriptName    = null;
    protected $scriptContent = null;

    /**
     * @return UserServiceScriptsUserGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Service Script name.
     */
    public function setScriptName($scriptName = null)
    {
        $this->scriptName = ($scriptName InstanceOf ServiceScriptsName)
             ? $scriptName
             : new ServiceScriptsName($scriptName);
    }

    /**
     * Service Script name.
     */
    public function getScriptName()
    {
        return (!$this->scriptName) ?: $this->scriptName->getValue();
    }

    /**
     * 
     */
    public function setScriptContent(xs:base64Binary $scriptContent = null)
    {
        $this->scriptContent =  $scriptContent;
    }

    /**
     * 
     */
    public function getScriptContent()
    {
        return (!$this->scriptContent) ?: $this->scriptContent->getValue();
    }
}
