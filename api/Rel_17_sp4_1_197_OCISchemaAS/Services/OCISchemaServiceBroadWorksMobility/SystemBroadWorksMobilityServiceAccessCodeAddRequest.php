<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBroadWorksMobilityServiceAccessCodeAddRequest';
    protected $serviceAccessCode;
    protected $countryCode;
    protected $description;

    public function __construct(
         $serviceAccessCode = '',
         $countryCode = '',
         $description = null
    ) {
        $this->setServiceAccessCode($serviceAccessCode);
        $this->setCountryCode($countryCode);
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
    public function setServiceAccessCode($serviceAccessCode = null)
    {
        $this->serviceAccessCode = ($serviceAccessCode InstanceOf ServiceAccessCode)
             ? $serviceAccessCode
             : new ServiceAccessCode($serviceAccessCode);
        $this->serviceAccessCode->setName('serviceAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCode $serviceAccessCode
     */
    public function getServiceAccessCode()
    {
        return ($this->serviceAccessCode) ? $this->serviceAccessCode->getValue() : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode) ? $this->countryCode->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceAccessCodeDescription)
             ? $description
             : new ServiceAccessCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
