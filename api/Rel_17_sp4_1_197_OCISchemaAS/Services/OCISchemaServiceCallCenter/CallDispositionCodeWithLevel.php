<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a Call Center Call Disposition Code and its Level
 */
class CallDispositionCodeWithLevel extends ComplexType implements ComplexInterface
{
    public    $name  = 'CallDispositionCodeWithLevel';
    protected $code  = null;
    protected $level = null;

    public function __construct(
         $code,
         $level
    ) {
        $this->setCode($code);
        $this->setLevel($level);
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
    public function setCode($code = null)
    {
        if (!$code) return $this;
        $this->code = new SimpleContent($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $code
     */
    public function getCode()
    {
        return $this->code->getValue();
    }

    /**
     * 
     */
    public function setLevel($level = null)
    {
        if (!$level) return $this;
        $this->level = new SimpleContent($level);
        $this->level->setName('level');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $level
     */
    public function getLevel()
    {
        return $this->level->getValue();
    }
}
