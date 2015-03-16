<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMultimediaPolicyGetRequest
 */
class SystemMultimediaPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemMultimediaPolicyGetResponse';
    protected $restrictNonAudioVideoMediaTypes;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMultimediaPolicyGetResponse $response
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
        $this->restrictNonAudioVideoMediaTypes->setName('restrictNonAudioVideoMediaTypes');
        return $this;
    }

    /**
     * 
     * @return boolean $restrictNonAudioVideoMediaTypes
     */
    public function getRestrictNonAudioVideoMediaTypes()
    {
        return ($this->restrictNonAudioVideoMediaTypes) ? $this->restrictNonAudioVideoMediaTypes->getValue() : null;
    }
}
