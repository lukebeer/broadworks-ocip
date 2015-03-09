<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRegistrationURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSIPContact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RegistrationEndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of registration contacts.
 *       This request handles all levels of administration privileges.  The content of the response will only contain items within the scope of the requester's login id.  At the system level any of the choice parameters may be specified to filter the registrations listed.  At the service provider level the serviceProviderId must be specified for the service provider and group options.  When using the userId or linePort options the specified value must be valid for that service provider login.  At the group level the servicProviderId and the groupId must be specified for the group option. When using the userId or linePort options the specified value must be valid for that group login.  The serviceProviderId option is not valid at the group level.  At the user level when using the userId or linePort options the specified value must be valid for that user login.  The serviceProviderId and groupId options are not valid at the user level.
 *       The response is either SystemGetRegistrationContactListResponse or ErrorResponse.
 */
class SystemGetRegistrationContactListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse';
    public    $name                          = __CLASS__;
    protected $deviceLevel                   = null;
    protected $deviceName                    = null;
    protected $deviceType                    = null;
    protected $searchCriteriaRegistrationURI = null;
    protected $searchCriteriaSIPContact      = null;
    protected $endpointType                  = null;
    protected $expired                       = null;

    public function __construct(
         $deviceLevel = null,
         $deviceName = null,
         $deviceType = null,
          $searchCriteriaRegistrationURI = null,
          $searchCriteriaSIPContact = null,
         $endpointType = null,
         $expired = null
    ) {
        $this->setDeviceLevel($deviceLevel);
        $this->setDeviceName($deviceName);
        $this->setDeviceType($deviceType);
        $this->setSearchCriteriaRegistrationURI($searchCriteriaRegistrationURI);
        $this->setSearchCriteriaSIPContact($searchCriteriaSIPContact);
        $this->setEndpointType($endpointType);
        $this->setExpired($expired);
    }

    /**
     * @return SystemGetRegistrationContactListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Identifies at which level in the system an identity/device profile is created.
     */
    public function setDeviceLevel($deviceLevel = null)
    {
        $this->deviceLevel = ($deviceLevel InstanceOf AccessDeviceLevel)
             ? $deviceLevel
             : new AccessDeviceLevel($deviceLevel);
    }

    /**
     * Identifies at which level in the system an identity/device profile is created.
     */
    public function getDeviceLevel()
    {
        return (!$this->deviceLevel) ?: $this->deviceLevel->getValue();
    }

    /**
     * Access device name.
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    /**
     * Access device name.
     */
    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->getValue();
    }

    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }

    /**
     * Criteria for searching for a RegistrationURI.
     */
    public function setSearchCriteriaRegistrationURI(SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI = null)
    {
        $this->searchCriteriaRegistrationURI =  $searchCriteriaRegistrationURI;
    }

    /**
     * Criteria for searching for a RegistrationURI.
     */
    public function getSearchCriteriaRegistrationURI()
    {
        return (!$this->searchCriteriaRegistrationURI) ?: $this->searchCriteriaRegistrationURI->getValue();
    }

    /**
     * Criteria for searching for a SIP Contact.
     */
    public function setSearchCriteriaSIPContact(SearchCriteriaSIPContact $searchCriteriaSIPContact = null)
    {
        $this->searchCriteriaSIPContact =  $searchCriteriaSIPContact;
    }

    /**
     * Criteria for searching for a SIP Contact.
     */
    public function getSearchCriteriaSIPContact()
    {
        return (!$this->searchCriteriaSIPContact) ?: $this->searchCriteriaSIPContact->getValue();
    }

    /**
     * Types of Endpoints in Broadworks.
     */
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf RegistrationEndpointType)
             ? $endpointType
             : new RegistrationEndpointType($endpointType);
    }

    /**
     * Types of Endpoints in Broadworks.
     */
    public function getEndpointType()
    {
        return (!$this->endpointType) ?: $this->endpointType->getValue();
    }

    /**
     * 
     */
    public function setExpired($expired = null)
    {
        $this->expired = (boolean) $expired;
    }

    /**
     * 
     */
    public function getExpired()
    {
        return (!$this->expired) ?: $this->expired;
    }
}
