<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeStateModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a Call Center Agent Unavailable Code and its active state
 */
class CallCenterAgentUnavailableCodeStateModify extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeStateModify';
    public    $name     = 'CallCenterAgentUnavailableCodeStateModify';
    protected $code     = null;
    protected $isActive = null;

    public function __construct(
         $code,
         $isActive
    ) {
        $this->setCode($code);
        $this->setIsActive($isActive);
    }

    /**
     * @return CallCenterAgentUnavailableCodeStateModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        if (!$code) return $this;
        $this->code = new SimpleContent($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCode()
    {
        return $this->code->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }
}
