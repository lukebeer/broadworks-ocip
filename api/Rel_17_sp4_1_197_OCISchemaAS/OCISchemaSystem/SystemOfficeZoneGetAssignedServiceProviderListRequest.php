<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a list of service providers that have a given Office Zone assigned.  The response is either a SystemOfficeZoneGetAssignedServiceProviderListResponse or ErrorResponse.
 */
class SystemOfficeZoneGetAssignedServiceProviderListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOfficeZoneGetAssignedServiceProviderListResponse';
    public    $name = 'SystemOfficeZoneGetAssignedServiceProviderListRequest';
    protected $officeZoneName;

    public function __construct(
         $officeZoneName = ''
    ) {
        $this->setOfficeZoneName($officeZoneName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOfficeZoneGetAssignedServiceProviderListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $officeZoneName
     */
    public function getOfficeZoneName()
    {
        return ($this->officeZoneName) ? $this->officeZoneName->getValue() : null;
    }
}
