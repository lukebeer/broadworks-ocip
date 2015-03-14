<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies a call center report template created in the system.
 */
class CallCenterReportTemplateKey extends ComplexType implements ComplexInterface
{
    public    $name          = 'CallCenterReportTemplateKey';
    protected $templateLevel = null;
    protected $templateName  = null;

    public function __construct(
         $templateLevel,
         $templateName
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
        if (!$templateLevel) return $this;
        $this->templateLevel = new SimpleContent($templateLevel);
        $this->templateLevel->setName('templateLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $templateLevel
     */
    public function getTemplateLevel()
    {
        return $this->templateLevel->getValue();
    }

    /**
     * 
     */
    public function setTemplateName($templateName = null)
    {
        if (!$templateName) return $this;
        $this->templateName = new SimpleContent($templateName);
        $this->templateName->setName('templateName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $templateName
     */
    public function getTemplateName()
    {
        return $this->templateName->getValue();
    }
}
