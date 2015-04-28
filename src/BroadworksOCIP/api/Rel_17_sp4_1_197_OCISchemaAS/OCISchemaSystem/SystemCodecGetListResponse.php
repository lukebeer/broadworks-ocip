<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Codec;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCodecGetListRequest.
 */
class SystemCodecGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCodecGetListResponse';
    protected $codec;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCodecGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCodec($codec = null)
    {
        $this->codec = ($codec InstanceOf Codec)
             ? $codec
             : new Codec($codec);
        $this->codec->setElementName('codec');
        return $this;
    }

    /**
     * 
     * @return Codec $codec
     */
    public function getCodec()
    {
        return ($this->codec)
            ? $this->codec->getElementValue()
            : null;
    }
}
