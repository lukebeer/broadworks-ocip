<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Deletes an existing Communication Barring Profile.  Optionally, a new default profile can be chosen if the current default profile is being deleted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringProfileDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $name              = null;
    protected $defaultProfile    = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $defaultProfile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setDefaultProfile($defaultProfile);
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
     * Communication Barring Profile Name
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringProfileName)
             ? $name
             : new CommunicationBarringProfileName($name);
    }

    /**
     * Communication Barring Profile Name
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Communication Barring Profile Name
     */
    public function setDefaultProfile($defaultProfile = null)
    {
        $this->defaultProfile = ($defaultProfile InstanceOf CommunicationBarringProfileName)
             ? $defaultProfile
             : new CommunicationBarringProfileName($defaultProfile);
    }

    /**
     * Communication Barring Profile Name
     */
    public function getDefaultProfile()
    {
        return (!$this->defaultProfile) ?: $this->defaultProfile->getValue();
    }
}
