<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\ServiceAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a system service access code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemBroadWorksMobilityServiceAccessCodeModifyRequest';
    protected $countryCode       = null;
    protected $serviceAccessCode = null;
    protected $description       = null;

    public function __construct(
         $countryCode,
         $serviceAccessCode,
         $description = null
    ) {
        $this->setCountryCode($countryCode);
        $this->setServiceAccessCode($serviceAccessCode);
        $this->setDescription($description);
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
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setServiceAccessCode($serviceAccessCode = null)
    {
        if (!$serviceAccessCode) return $this;
        $this->serviceAccessCode = ($serviceAccessCode InstanceOf ServiceAccessCode)
             ? $serviceAccessCode
             : new ServiceAccessCode($serviceAccessCode);
        $this->serviceAccessCode->setName('serviceAccessCode');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCode
     */
    public function getServiceAccessCode()
    {
        return $this->serviceAccessCode->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf ServiceAccessCodeDescription)
             ? $description
             : new ServiceAccessCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ServiceAccessCodeDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
