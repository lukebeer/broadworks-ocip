<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Uniquely identifies a call center report template created in the system.
 */
class CallCenterReportTemplateKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportTemplateKey';
    protected $templateLevel;
    protected $templateName;

    public function __construct(
         $templateLevel = '',
         $templateName = ''
    ) {
        $this->setTemplateLevel($templateLevel);
        $this->setTemplateName($templateName);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTemplateLevel($templateLevel = null)
    {
        $this->templateLevel = new SimpleContent($templateLevel);
        $this->templateLevel->setElementName('templateLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $templateLevel
     */
    public function getTemplateLevel()
    {
        return ($this->templateLevel)
            ? $this->templateLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTemplateName($templateName = null)
    {
        $this->templateName = new SimpleContent($templateName);
        $this->templateName->setElementName('templateName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $templateName
     */
    public function getTemplateName()
    {
        return ($this->templateName)
            ? $this->templateName->getElementValue()
            : null;
    }
}
