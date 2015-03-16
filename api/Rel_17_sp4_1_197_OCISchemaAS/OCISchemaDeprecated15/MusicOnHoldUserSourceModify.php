<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the music on hold user source configuration.
 */
class MusicOnHoldUserSourceModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'MusicOnHoldUserSourceModify';
    protected $messageSourceSelection;
    protected $customSource;

    public function __construct(
         $messageSourceSelection = null,
         $customSource = null
    ) {
        $this->setMessageSourceSelection($messageSourceSelection);
        $this->setCustomSource($customSource);
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
    public function setMessageSourceSelection($messageSourceSelection = null)
    {
        $this->messageSourceSelection = new SimpleContent($messageSourceSelection);
        $this->messageSourceSelection->setElementName('messageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $messageSourceSelection
     */
    public function getMessageSourceSelection()
    {
        return ($this->messageSourceSelection)
            ? $this->messageSourceSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCustomSource($customSource = null)
    {
        $this->customSource = new SimpleContent($customSource);
        $this->customSource->setElementName('customSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $customSource
     */
    public function getCustomSource()
    {
        return ($this->customSource)
            ? $this->customSource->getElementValue()
            : null;
    }
}
