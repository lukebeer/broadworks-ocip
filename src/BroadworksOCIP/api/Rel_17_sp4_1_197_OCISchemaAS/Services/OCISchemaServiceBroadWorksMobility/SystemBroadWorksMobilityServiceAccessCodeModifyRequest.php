<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCodeDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityServiceAccessCodeModifyRequest';
    protected $countryCode;
    protected $serviceAccessCode;
    protected $description;

    public function __construct(
         $countryCode = '',
         $serviceAccessCode = '',
         $description = null
    ) {
        $this->setCountryCode($countryCode);
        $this->setServiceAccessCode($serviceAccessCode);
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
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceAccessCode($serviceAccessCode = null)
    {
        $this->serviceAccessCode = ($serviceAccessCode InstanceOf ServiceAccessCode)
             ? $serviceAccessCode
             : new ServiceAccessCode($serviceAccessCode);
        $this->serviceAccessCode->setElementName('serviceAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCode $serviceAccessCode
     */
    public function getServiceAccessCode()
    {
        return ($this->serviceAccessCode)
            ? $this->serviceAccessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceAccessCodeDescription)
             ? $description
             : new ServiceAccessCodeDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
