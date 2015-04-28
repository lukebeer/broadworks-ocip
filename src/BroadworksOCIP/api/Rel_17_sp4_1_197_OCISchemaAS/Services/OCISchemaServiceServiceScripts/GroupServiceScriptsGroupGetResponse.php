<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\ServiceScriptsName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\GroupServiceScriptsGroupGetResponse $response
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
    public function setScriptContent($scriptContent = null)
    {
        $this->scriptContent = new PrimitiveType($scriptContent);
        $this->scriptContent->setElementName('scriptContent');
        return $this;
    }

    /**
     * 
     * @return string $scriptContent
     */
    public function getScriptContent()
    {
        return ($this->scriptContent)
            ? $this->scriptContent->getElementValue()
            : null;
    }
}
