<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemFileGetContentRequest. The fileContent length returned is limited to 128KBytes.
 */
class SystemFileGetContentResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemFileGetContentResponse';
    protected $fileContent = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileGetContentResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileContent(xs:base64Binary $fileContent = null)
    {
        if (!$fileContent) return $this;
        $this->fileContent->setName('fileContent');
        return $this;
    }

    /**
     * 
     * @return xs:base64Binary $fileContent
     */
    public function getFileContent()
    {
        return $this->fileContent->getValue();
    }
}
