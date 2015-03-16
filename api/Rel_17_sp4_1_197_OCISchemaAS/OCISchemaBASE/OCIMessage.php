<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A message contains a list of requests or responses. The server processes all the requests
 *         and returns a message with a corresponding list of responses.
 */
class OCIMessage extends ComplexType implements ComplexInterface
{
    public    $name = 'OCIMessage';
    protected $command;

    public function __construct(
         $command = null
    ) {
        $this->setCommand($command);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * List of requests or responses.
     */
    public function setCommand($command = null)
    {
        $this->command = new SimpleContent($command);
        $this->command->setName('command');
        return $this;
    }

    /**
     * List of requests or responses.
     * @return SimpleContent $command
     */
    public function getCommand()
    {
        return ($this->command) ? $this->command->getValue() : null;
    }
}
