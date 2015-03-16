<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an existing Digit Pattern Criteria.
 *         The response is either a ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse';
    public    $name = 'ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest';
    protected $serviceProviderId;
    protected $name;

    public function __construct(
         $serviceProviderId = '',
         $name = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse $response
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }
}
