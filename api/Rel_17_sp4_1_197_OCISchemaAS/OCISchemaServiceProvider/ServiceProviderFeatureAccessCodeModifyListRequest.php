<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a list of feature access codes for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderFeatureAccessCodeModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $featureAccessCode = null;

    public function __construct(
         $serviceProviderId,
         FeatureAccessCodeEntry $featureAccessCode = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setFeatureAccessCode($featureAccessCode);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Feature Access Code Entry
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = FeatureAccessCodeEntry $featureAccessCode;
    }

    /**
     * Feature Access Code Entry
     */
    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->getValue();
    }
}
