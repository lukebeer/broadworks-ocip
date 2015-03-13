<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCodecGetListRequest.
 */
class SystemCodecGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name  = 'SystemCodecGetListResponse';
    protected $codec = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCodecGetListResponse $response
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
        if (!$codec) return $this;
        $this->codec = ($codec InstanceOf Codec)
             ? $codec
             : new Codec($codec);
        $this->codec->setName('codec');
        return $this;
    }

    /**
     * 
     * @return Codec $codec
     */
    public function getCodec()
    {
        return $this->codec->getValue();
    }
}
