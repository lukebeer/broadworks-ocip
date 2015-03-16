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
 * Represents either an existing file for the application server to use, or
 *           the contents of a file to transfer and an URL.
 */
class ExtendedFileResource extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ExtendedFileResource';
    protected $file;
    protected $url;

    public function __construct(
         $file = null,
         $url = null
    ) {
        $this->setFile($file);
        $this->setUrl($url);
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
    public function setFile($file = null)
    {
        $this->file = new SimpleContent($file);
        $this->file->setElementName('file');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file
     */
    public function getFile()
    {
        return ($this->file)
            ? $this->file->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUrl($url = null)
    {
        $this->url = new SimpleContent($url);
        $this->url->setElementName('url');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $url
     */
    public function getUrl()
    {
        return ($this->url)
            ? $this->url->getElementValue()
            : null;
    }
}
