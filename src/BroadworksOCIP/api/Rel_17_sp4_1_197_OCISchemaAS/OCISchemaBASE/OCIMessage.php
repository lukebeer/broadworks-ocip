<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A message contains a list of requests or responses. The server processes all the requests
 *         and returns a message with a corresponding list of responses.
 */
class OCIMessage extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OCIMessage';
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
        $this->command->setElementName('command');
        return $this;
    }

    /**
     * List of requests or responses.
     * @return SimpleContent $command
     */
    public function getCommand()
    {
        return ($this->command)
            ? $this->command->getElementValue()
            : null;
    }
}
