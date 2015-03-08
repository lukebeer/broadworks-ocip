<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to delete one or more session admission control groups for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $name              = null;

    public function __construct(
         $serviceProviderId,
         $name = null
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
     * Session Admission Control Group name.
     *         Uniquely identifies a Session Admission Control Group within a group or enterprise.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
    }

    /**
     * Session Admission Control Group name.
     *         Uniquely identifies a Session Admission Control Group within a group or enterprise.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}
