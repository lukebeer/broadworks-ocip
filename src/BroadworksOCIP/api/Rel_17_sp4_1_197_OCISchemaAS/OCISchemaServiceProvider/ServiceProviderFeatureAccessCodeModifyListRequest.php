<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a list of feature access codes for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderFeatureAccessCodeModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderFeatureAccessCodeModifyListRequest';
    protected $serviceProviderId;
    protected $featureAccessCode;

    public function __construct(
         $serviceProviderId = '',
         $featureAccessCode = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setFeatureAccessCode($featureAccessCode);
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
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = ($featureAccessCode InstanceOf FeatureAccessCodeEntry)
             ? $featureAccessCode
             : new FeatureAccessCodeEntry($featureAccessCode);
        $this->featureAccessCode->setElementName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry $featureAccessCode
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
