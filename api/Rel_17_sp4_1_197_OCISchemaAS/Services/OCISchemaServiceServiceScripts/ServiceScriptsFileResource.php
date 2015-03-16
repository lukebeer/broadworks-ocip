<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Service Scripts File Resource for uploading file content.
 */
class ServiceScriptsFileResource extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceScriptsFileResource';
    protected $fileName;
    protected $scriptContent;

    public function __construct(
         $fileName = '',
         $scriptContent = ''
    ) {
        $this->setFileName($fileName);
        $this->setScriptContent($scriptContent);
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
    public function setFileName($fileName = null)
    {
        $this->fileName = new SimpleContent($fileName);
        $this->fileName->setElementName('fileName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileName
     */
    public function getFileName()
    {
        return ($this->fileName)
            ? $this->fileName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScriptContent($scriptContent = null)
    {
        $this->scriptContent = new SimpleContent($scriptContent);
        $this->scriptContent->setElementName('scriptContent');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scriptContent
     */
    public function getScriptContent()
    {
        return ($this->scriptContent)
            ? $this->scriptContent->getElementValue()
            : null;
    }
}
