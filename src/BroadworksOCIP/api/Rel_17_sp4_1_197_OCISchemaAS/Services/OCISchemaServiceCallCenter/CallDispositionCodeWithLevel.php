<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a Call Center Call Disposition Code and its Level
 */
class CallDispositionCodeWithLevel extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallDispositionCodeWithLevel';
    protected $code;
    protected $level;

    public function __construct(
         $code = '',
         $level = ''
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
        $this->code = new SimpleContent($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $code
     */
    public function getCode()
    {
        return ($this->code)
            ? $this->code->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLevel($level = null)
    {
        $this->level = new SimpleContent($level);
        $this->level->setElementName('level');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $level
     */
    public function getLevel()
    {
        return ($this->level)
            ? $this->level->getElementValue()
            : null;
    }
}
