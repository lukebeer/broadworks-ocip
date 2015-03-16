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
 * Response to GroupServiceScriptsGroupGetRequest.
 */
class GroupServiceScriptsGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceScriptsGroupGetResponse';
    protected $isActive;
    protected $scriptName;
    protected $scriptContent;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\GroupServiceScriptsGroupGetResponse $response
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
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScriptName($scriptName = null)
    {
        $this->scriptName = ($scriptName InstanceOf ServiceScriptsName)
             ? $scriptName
             : new ServiceScriptsName($scriptName);
        $this->scriptName->setElementName('scriptName');
        return $this;
    }

    /**
     * 
     * @return ServiceScriptsName $scriptName
     */
    public function getScriptName()
    {
        return ($this->scriptName)
            ? $this->scriptName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScriptContent(xs:base64Binary $scriptContent = null)
    {
        $this->scriptContent->setElementName('scriptContent');
        return $this;
    }

    /**
     * 
     * @return xs:base64Binary $scriptContent
     */
    public function getScriptContent()
    {
        return ($this->scriptContent)
            ? $this->scriptContent->getElementValue()
            : null;
    }
}
