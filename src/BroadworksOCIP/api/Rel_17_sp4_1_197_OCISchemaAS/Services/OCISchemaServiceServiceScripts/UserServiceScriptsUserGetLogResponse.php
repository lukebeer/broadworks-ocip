<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserServiceScriptsUserGetLogRequest.
 */
class UserServiceScriptsUserGetLogResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserServiceScriptsUserGetLogResponse';
    protected $logContent;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\UserServiceScriptsUserGetLogResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLogContent($logContent = null)
    {
        $this->logContent = new PrimitiveType($logContent);
        $this->logContent->setElementName('logContent');
        return $this;
    }

    /**
     * 
     * @return string $logContent
     */
    public function getLogContent()
    {
        return ($this->logContent)
            ? $this->logContent->getElementValue()
            : null;
    }
}
