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
 * Communication Barring Authorization Code entry.
 */
class CommunicationBarringAuthorizationCodeEntry extends ComplexType implements ComplexInterface
{
    public    $name = 'CommunicationBarringAuthorizationCodeEntry';
    protected $code;
    protected $description;

    public function __construct(
         $code = '',
         $description = null
    ) {
        $this->setCode($code);
        $this->setDescription($description);
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
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $code
     */
    public function getCode()
    {
        return ($this->code) ? $this->code->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = new SimpleContent($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
