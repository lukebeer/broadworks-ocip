<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify service code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemServiceCodeModifyRequest';
    protected $serviceCode;
    protected $description;

    public function __construct(
         $serviceCode = '',
         $description = null
    ) {
        $this->setServiceCode($serviceCode);
        $this->setDescription($description);
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
    public function setServiceCode($serviceCode = null)
    {
        $this->serviceCode = ($serviceCode InstanceOf ServiceCode)
             ? $serviceCode
             : new ServiceCode($serviceCode);
        $this->serviceCode->setName('serviceCode');
        return $this;
    }

    /**
     * 
     * @return ServiceCode $serviceCode
     */
    public function getServiceCode()
    {
        return ($this->serviceCode) ? $this->serviceCode->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceCodeDescription)
             ? $description
             : new ServiceCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ServiceCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
