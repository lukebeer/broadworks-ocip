<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Represents either an existing file for the application server to use, or
 *           the contents of a file to transfer and an URL.
 */
class ExtendedMediaFileResource extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource';
    public    $name = 'ExtendedMediaFileResource';
    protected $file = null;
    protected $url  = null;

    public function __construct(
         $file = null,
         $url = null
    ) {
        $this->setFile($file);
        $this->setUrl($url);
    }

    /**
     * @return ExtendedMediaFileResource
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
        if (!$file) return $this;
        $this->file = new SimpleContent($file);
        $this->file->setName('file');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFile()
    {
        return $this->file->getValue();
    }

    /**
     * 
     */
    public function setUrl($url = null)
    {
        if (!$url) return $this;
        $this->url = new SimpleContent($url);
        $this->url->setName('url');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUrl()
    {
        return $this->url->getValue();
    }
}
