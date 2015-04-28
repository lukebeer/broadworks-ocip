<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaSetAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaSetAddRequest';
    protected $setName;
    protected $mediaName;

    public function __construct(
         $setName = '',
         $mediaName = null
    ) {
        $this->setSetName($setName);
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
    public function setSetName($setName = null)
    {
        $this->setName = ($setName InstanceOf MediaSetName)
             ? $setName
             : new MediaSetName($setName);
        $this->setName->setElementName('setName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $setName
     */
    public function getSetName()
    {
        return ($this->setName)
            ? $this->setName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaName($mediaName = null)
    {
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
        $this->mediaName->setElementName('mediaName');
        return $this;
    }

    /**
     * 
     * @return MediaName $mediaName
     */
    public function getMediaName()
    {
        return ($this->mediaName)
            ? $this->mediaName->getElementValue()
            : null;
    }
}
