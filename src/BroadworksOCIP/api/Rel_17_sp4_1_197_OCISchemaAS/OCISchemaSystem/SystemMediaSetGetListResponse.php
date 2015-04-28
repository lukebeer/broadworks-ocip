<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMediaSetGetRequest.
 */
class SystemMediaSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaSetGetListResponse';
    protected $mediaSetName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaSetGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaSetName($mediaSetName = null)
    {
        $this->mediaSetName = ($mediaSetName InstanceOf MediaSetName)
             ? $mediaSetName
             : new MediaSetName($mediaSetName);
        $this->mediaSetName->setElementName('mediaSetName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $mediaSetName
     */
    public function getMediaSetName()
    {
        return ($this->mediaSetName)
            ? $this->mediaSetName->getElementValue()
            : null;
    }
}
