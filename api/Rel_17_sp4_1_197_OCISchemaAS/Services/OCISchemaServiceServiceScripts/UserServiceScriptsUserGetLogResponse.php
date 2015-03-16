<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserServiceScriptsUserGetLogRequest.
 */
class UserServiceScriptsUserGetLogResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserServiceScriptsUserGetLogResponse';
    protected $logContent;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts\UserServiceScriptsUserGetLogResponse $response
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
