<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceServiceScripts; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserServiceScriptsUserGetLogRequest.
 */
class UserServiceScriptsUserGetLogResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'UserServiceScriptsUserGetLogResponse';
    protected $logContent = null;

    /**
     * @return UserServiceScriptsUserGetLogResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLogContent(xs:base64Binary $logContent = null)
    {
        if (!$logContent) return $this;
        $this->logContent->setName('logContent');
        return $this;
    }

    /**
     * 
     * @return xs:base64Binary
     */
    public function getLogContent()
    {
        return $this->logContent->getValue();
    }
}
