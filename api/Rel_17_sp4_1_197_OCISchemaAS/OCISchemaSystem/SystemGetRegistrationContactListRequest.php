<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaRegistrationURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaSIPContact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RegistrationEndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of registration contacts.
 *       This request handles all levels of administration privileges.  The content of the response will only contain items within the scope of the requester's login id.  At the system level any of the choice parameters may be specified to filter the registrations listed.  At the service provider level the serviceProviderId must be specified for the service provider and group options.  When using the userId or linePort options the specified value must be valid for that service provider login.  At the group level the servicProviderId and the groupId must be specified for the group option. When using the userId or linePort options the specified value must be valid for that group login.  The serviceProviderId option is not valid at the group level.  At the user level when using the userId or linePort options the specified value must be valid for that user login.  The serviceProviderId and groupId options are not valid at the user level.
 *       The response is either SystemGetRegistrationContactListResponse or ErrorResponse.
 */
class SystemGetRegistrationContactListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceLevel=null,
             $deviceName=null,
             $deviceType=null,
             $searchCriteriaRegistrationURI=null,
             $searchCriteriaSIPContact=null,
             $endpointType=null,
             $expired=null
    ) {
        $this->deviceLevel                   = new AccessDeviceLevel($deviceLevel);
        $this->deviceName                    = new AccessDeviceName($deviceName);
        $this->deviceType                    = new AccessDeviceType($deviceType);
        $this->searchCriteriaRegistrationURI = $searchCriteriaRegistrationURI;
        $this->searchCriteriaSIPContact      = $searchCriteriaSIPContact;
        $this->endpointType                  = new RegistrationEndpointType($endpointType);
        $this->expired                       = $expired;
        $this->args                          = func_get_args();
    }

    public function setDeviceLevel($deviceLevel)
    {
        $deviceLevel and $this->deviceLevel = new AccessDeviceLevel($deviceLevel);
    }

    public function getDeviceLevel()
    {
        return (!$this->deviceLevel) ?: $this->deviceLevel->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setSearchCriteriaRegistrationURI($searchCriteriaRegistrationURI)
    {
        $searchCriteriaRegistrationURI and $this->searchCriteriaRegistrationURI = new SearchCriteriaRegistrationURI($searchCriteriaRegistrationURI);
    }

    public function getSearchCriteriaRegistrationURI()
    {
        return (!$this->searchCriteriaRegistrationURI) ?: $this->searchCriteriaRegistrationURI->value();
    }

    public function setSearchCriteriaSIPContact($searchCriteriaSIPContact)
    {
        $searchCriteriaSIPContact and $this->searchCriteriaSIPContact = new SearchCriteriaSIPContact($searchCriteriaSIPContact);
    }

    public function getSearchCriteriaSIPContact()
    {
        return (!$this->searchCriteriaSIPContact) ?: $this->searchCriteriaSIPContact->value();
    }

    public function setEndpointType($endpointType)
    {
        $endpointType and $this->endpointType = new RegistrationEndpointType($endpointType);
    }

    public function getEndpointType()
    {
        return (!$this->endpointType) ?: $this->endpointType->value();
    }

    public function setExpired($expired)
    {
        $expired and $this->expired = new xs:boolean($expired);
    }

    public function getExpired()
    {
        return (!$this->expired) ?: $this->expired->value();
    }
}
