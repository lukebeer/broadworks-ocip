<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of media that replaces a previously configured list.
 */
class ReplacementMediaNameList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementMediaNameList';
    protected $mediaName;

    public function __construct(
         $mediaName = null
    ) {
        $this->setMediaName($mediaName);
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
    public function setMediaName($mediaName = null)
    {
        $this->mediaName = new SimpleContent($mediaName);
        $this->mediaName->setElementName('mediaName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaName
     */
    public function getMediaName()
    {
        return ($this->mediaName)
            ? $this->mediaName->getElementValue()
            : null;
    }
}
