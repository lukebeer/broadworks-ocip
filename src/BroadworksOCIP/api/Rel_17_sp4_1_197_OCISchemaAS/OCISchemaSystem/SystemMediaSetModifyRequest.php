<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementMediaNameList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaSetModifyRequest';
    protected $setName;
    protected $mediaNameList;

    public function __construct(
         $setName = '',
         $mediaNameList = null
    ) {
        $this->setSetName($setName);
        $this->setMediaNameList($mediaNameList);
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
    public function setMediaNameList(ReplacementMediaNameList $mediaNameList = null)
    {
        $this->mediaNameList = ($mediaNameList InstanceOf ReplacementMediaNameList)
             ? $mediaNameList
             : new ReplacementMediaNameList($mediaNameList);
        $this->mediaNameList->setElementName('mediaNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementMediaNameList $mediaNameList
     */
    public function getMediaNameList()
    {
        return $this->mediaNameList;
    }
}
