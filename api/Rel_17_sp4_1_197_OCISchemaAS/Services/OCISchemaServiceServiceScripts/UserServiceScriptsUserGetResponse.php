<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\ServiceScriptsName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserServiceScriptsUserGetRequest.
 */
class UserServiceScriptsUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserServiceScriptsUserGetResponse';
    protected $isActive      = null;
    protected $scriptName    = null;
    protected $scriptContent = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\UserServiceScriptsUserGetResponse $response
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setScriptName($scriptName = null)
    {
        if (!$scriptName) return $this;
        $this->scriptName = ($scriptName InstanceOf ServiceScriptsName)
             ? $scriptName
             : new ServiceScriptsName($scriptName);
        $this->scriptName->setName('scriptName');
        return $this;
    }

    /**
     * 
     * @return ServiceScriptsName $scriptName
     */
    public function getScriptName()
    {
        return $this->scriptName->getValue();
    }

    /**
     * 
     */
    public function setScriptContent(xs:base64Binary $scriptContent = null)
    {
        if (!$scriptContent) return $this;
        $this->scriptContent->setName('scriptContent');
        return $this;
    }

    /**
     * 
     * @return xs:base64Binary $scriptContent
     */
    public function getScriptContent()
    {
        return $this->scriptContent->getValue();
    }
}
