<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a Service Provider level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDialPlanPolicyAddAccessCodeRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderDialPlanPolicyAddAccessCodeRequest';
    protected $serviceProviderId;
    protected $accessCode;
    protected $includeCodeForNetworkTranslationsAndRouting;
    protected $includeCodeForScreeningServices;
    protected $enableSecondaryDialTone;
    protected $description;

    public function __construct(
         $serviceProviderId = '',
         $accessCode = '',
         $includeCodeForNetworkTranslationsAndRouting = '',
         $includeCodeForScreeningServices = '',
         $enableSecondaryDialTone = '',
         $description = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAccessCode($accessCode);
        $this->setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting);
        $this->setIncludeCodeForScreeningServices($includeCodeForScreeningServices);
        $this->setEnableSecondaryDialTone($enableSecondaryDialTone);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf DialPlanAccessCode)
             ? $accessCode
             : new DialPlanAccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode) ? $this->accessCode->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting = null)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = new PrimitiveType($includeCodeForNetworkTranslationsAndRouting);
        $this->includeCodeForNetworkTranslationsAndRouting->setName('includeCodeForNetworkTranslationsAndRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForNetworkTranslationsAndRouting
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return ($this->includeCodeForNetworkTranslationsAndRouting) ? $this->includeCodeForNetworkTranslationsAndRouting->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        $this->includeCodeForScreeningServices = new PrimitiveType($includeCodeForScreeningServices);
        $this->includeCodeForScreeningServices->setName('includeCodeForScreeningServices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForScreeningServices
     */
    public function getIncludeCodeForScreeningServices()
    {
        return ($this->includeCodeForScreeningServices) ? $this->includeCodeForScreeningServices->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        $this->enableSecondaryDialTone = new PrimitiveType($enableSecondaryDialTone);
        $this->enableSecondaryDialTone->setName('enableSecondaryDialTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSecondaryDialTone
     */
    public function getEnableSecondaryDialTone()
    {
        return ($this->enableSecondaryDialTone) ? $this->enableSecondaryDialTone->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
