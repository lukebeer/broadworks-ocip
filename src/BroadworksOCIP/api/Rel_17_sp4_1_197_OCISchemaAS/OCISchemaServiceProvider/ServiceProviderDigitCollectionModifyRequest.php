<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the service provider's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDigitCollectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDigitCollectionModifyRequest';
    protected $serviceProviderId;
    protected $accessCode;
    protected $publicDigitMap;
    protected $privateDigitMap;

    public function __construct(
         $serviceProviderId = '',
         $accessCode = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAccessCode($accessCode);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf AccessCode)
             ? $accessCode
             : new AccessCode($accessCode);
        $this->accessCode->setElementName('accessCode');
        return $this;
    }

    /**
     * 
     * @return AccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode)
            ? $this->accessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setElementName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $publicDigitMap
     */
    public function getPublicDigitMap()
    {
        return ($this->publicDigitMap)
            ? $this->publicDigitMap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setElementName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $privateDigitMap
     */
    public function getPrivateDigitMap()
    {
        return ($this->privateDigitMap)
            ? $this->privateDigitMap->getElementValue()
            : null;
    }
}
