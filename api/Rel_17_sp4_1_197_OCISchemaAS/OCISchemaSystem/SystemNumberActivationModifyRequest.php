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
 * Request to modify system number activation setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNumberActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemNumberActivationModifyRequest';
    protected $useNumberActivation = null;

    public function __construct(
         $useNumberActivation = null
    ) {
        $this->setUseNumberActivation($useNumberActivation);
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
    public function setUseNumberActivation($useNumberActivation = null)
    {
        if (!$useNumberActivation) return $this;
        $this->useNumberActivation = new PrimitiveType($useNumberActivation);
        $this->useNumberActivation->setName('useNumberActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $useNumberActivation
     */
    public function getUseNumberActivation()
    {
        return $this->useNumberActivation->getValue();
    }
}
