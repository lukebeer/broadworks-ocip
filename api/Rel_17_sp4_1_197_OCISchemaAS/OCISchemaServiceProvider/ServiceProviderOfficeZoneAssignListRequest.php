<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Assign a list of Office Zones to a service provider.
 *         The Element defaultOfficeZone is required only for the first assignment, for subsequent assignments it is optional.
 *         Office Zones can only be assigned if the Location-Based Calling Restrictions has been authorized to the service provider otherwise the request will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderOfficeZoneAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $officeZoneName=null,
             $defaultOfficeZoneName=null
    ) {
        $this->serviceProviderId     = new ServiceProviderId($serviceProviderId);
        $this->officeZoneName        = new OfficeZoneName($officeZoneName);
        $this->defaultOfficeZoneName = new OfficeZoneName($defaultOfficeZoneName);
        $this->args                  = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setOfficeZoneName($officeZoneName)
    {
        $officeZoneName and $this->officeZoneName = new OfficeZoneName($officeZoneName);
    }

    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->value();
    }

    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $defaultOfficeZoneName and $this->defaultOfficeZoneName = new OfficeZoneName($defaultOfficeZoneName);
    }

    public function getDefaultOfficeZoneName()
    {
        return (!$this->defaultOfficeZoneName) ?: $this->defaultOfficeZoneName->value();
    }
}
