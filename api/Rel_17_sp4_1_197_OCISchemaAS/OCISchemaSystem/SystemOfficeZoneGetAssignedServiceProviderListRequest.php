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


/**
     * Request a list of service providers that have a given Office Zone assigned.  The response is either a SystemOfficeZoneGetAssignedServiceProviderListResponse or ErrorResponse.
 */
class SystemOfficeZoneGetAssignedServiceProviderListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOfficeZoneGetAssignedServiceProviderListResponse';
    public    $name           = __CLASS__;
    protected $officeZoneName = null;

    public function __construct(
         $officeZoneName
    ) {
        $this->setOfficeZoneName($officeZoneName);
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
}
