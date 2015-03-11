<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Codec;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a supported codec from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCodecDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name  = 'SystemCodecDeleteRequest';
    protected $codec = null;

    public function __construct(
         $codec
    ) {
        $this->setCodec($codec);
    }

    /**
     * @return 
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
     * @return Codec
     */
    public function getCodec()
    {
        return $this->codec->getValue();
    }
}
