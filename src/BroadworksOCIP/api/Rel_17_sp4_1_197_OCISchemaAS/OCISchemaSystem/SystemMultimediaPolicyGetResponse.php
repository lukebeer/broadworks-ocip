<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMultimediaPolicyGetRequest
 */
class SystemMultimediaPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMultimediaPolicyGetResponse';
    protected $restrictNonAudioVideoMediaTypes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMultimediaPolicyGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes = null)
    {
        $this->restrictNonAudioVideoMediaTypes = new PrimitiveType($restrictNonAudioVideoMediaTypes);
        $this->restrictNonAudioVideoMediaTypes->setElementName('restrictNonAudioVideoMediaTypes');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictNonAudioVideoMediaTypes
     */
    public function getRestrictNonAudioVideoMediaTypes()
    {
        return ($this->restrictNonAudioVideoMediaTypes)
            ? $this->restrictNonAudioVideoMediaTypes->getElementValue()
            : null;
    }
}
