<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderOfficeZoneUnassignListResponse;
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
    public    $name                  = __CLASS__;
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
     * @return ServiceProviderOfficeZoneUnassignListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Office Zone name.
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
    }

    /**
     * Office Zone name.
     */
    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->getValue();
    }

    /**
     * Office Zone name.
     */
    public function setDefaultOfficeZoneName($defaultOfficeZoneName = null)
    {
        $this->defaultOfficeZoneName = ($defaultOfficeZoneName InstanceOf OfficeZoneName)
             ? $defaultOfficeZoneName
             : new OfficeZoneName($defaultOfficeZoneName);
    }

    /**
     * Office Zone name.
     */
    public function getDefaultOfficeZoneName()
    {
        return (!$this->defaultOfficeZoneName) ?: $this->defaultOfficeZoneName->getValue();
    }
}
