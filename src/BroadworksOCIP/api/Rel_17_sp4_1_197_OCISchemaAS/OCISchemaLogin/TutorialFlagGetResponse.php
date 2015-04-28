<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the TutorialFlagGetRequest.
 */
class TutorialFlagGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TutorialFlagGetResponse';
    protected $enableTutorial;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\TutorialFlagGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableTutorial($enableTutorial = null)
    {
        $this->enableTutorial = new PrimitiveType($enableTutorial);
        $this->enableTutorial->setElementName('enableTutorial');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTutorial
     */
    public function getEnableTutorial()
    {
        return ($this->enableTutorial)
            ? $this->enableTutorial->getElementValue()
            : null;
    }
}
