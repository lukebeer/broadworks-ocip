<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDCriteriaDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $name              = null;

    public function __construct(
         $serviceProviderId,
         $name
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
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
     * Dialable Caller ID Criteria name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
    }

    /**
     * Dialable Caller ID Criteria name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}
