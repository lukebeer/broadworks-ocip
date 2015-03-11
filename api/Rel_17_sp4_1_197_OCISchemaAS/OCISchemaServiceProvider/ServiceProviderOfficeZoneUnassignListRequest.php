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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Unassign a list of OfficeZones from a service provider.  Note: a new default must be provided if unassigning the current default.
 *         Office Zones can only be unassigned if the Location-Based Calling Restrictions has been authorized to the service provider otherwise the request will fail.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderOfficeZoneUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'ServiceProviderOfficeZoneUnassignListRequest';
    protected $serviceProviderId     = null;
    protected $officeZoneName        = null;
    protected $defaultOfficeZoneName = null;

    public function __construct(
         $serviceProviderId,
         $officeZoneName = null,
         $defaultOfficeZoneName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setOfficeZoneName($officeZoneName);
        $this->setDefaultOfficeZoneName($defaultOfficeZoneName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        if (!$officeZoneName) return $this;
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName->getValue();
    }

    /**
     * 
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName = null)
    {
        if (!$defaultOfficeZoneName) return $this;
        $this->defaultOfficeZoneName = ($defaultOfficeZoneName InstanceOf OfficeZoneName)
             ? $defaultOfficeZoneName
             : new OfficeZoneName($defaultOfficeZoneName);
        $this->defaultOfficeZoneName->setName('defaultOfficeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName
     */
    public function getDefaultOfficeZoneName()
    {
        return $this->defaultOfficeZoneName->getValue();
    }
}
