<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaRegistrationURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSIPContact;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RegistrationEndpointType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of registration contacts.
 *       This request handles all levels of administration privileges.  The content of the response will only contain items within the scope of the requester's login id.  At the system level any of the choice parameters may be specified to filter the registrations listed.  At the service provider level the serviceProviderId must be specified for the service provider and group options.  When using the userId or linePort options the specified value must be valid for that service provider login.  At the group level the servicProviderId and the groupId must be specified for the group option. When using the userId or linePort options the specified value must be valid for that group login.  The serviceProviderId option is not valid at the group level.  At the user level when using the userId or linePort options the specified value must be valid for that user login.  The serviceProviderId and groupId options are not valid at the user level.
 *       The response is either SystemGetRegistrationContactListResponse or ErrorResponse.
 */
class SystemGetRegistrationContactListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse';
    public    $elementName = 'SystemGetRegistrationContactListRequest';
    protected $deviceLevel;
    protected $deviceName;
    protected $deviceType;
    protected $searchCriteriaRegistrationURI;
    protected $searchCriteriaSIPContact;
    protected $endpointType;
    protected $expired;

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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceLevel($deviceLevel = null)
    {
        $this->deviceLevel = ($deviceLevel InstanceOf AccessDeviceLevel)
             ? $deviceLevel
             : new AccessDeviceLevel($deviceLevel);
        $this->deviceLevel->setElementName('deviceLevel');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceLevel $deviceLevel
     */
    public function getDeviceLevel()
    {
        return ($this->deviceLevel)
            ? $this->deviceLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaRegistrationURI(SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI = null)
    {
        $this->searchCriteriaRegistrationURI = ($searchCriteriaRegistrationURI InstanceOf SearchCriteriaRegistrationURI)
             ? $searchCriteriaRegistrationURI
             : new SearchCriteriaRegistrationURI($searchCriteriaRegistrationURI);
        $this->searchCriteriaRegistrationURI->setElementName('searchCriteriaRegistrationURI');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI
     */
    public function getSearchCriteriaRegistrationURI()
    {
        return $this->searchCriteriaRegistrationURI;
    }

    /**
     * 
     */
    public function setSearchCriteriaSIPContact(SearchCriteriaSIPContact $searchCriteriaSIPContact = null)
    {
        $this->searchCriteriaSIPContact = ($searchCriteriaSIPContact InstanceOf SearchCriteriaSIPContact)
             ? $searchCriteriaSIPContact
             : new SearchCriteriaSIPContact($searchCriteriaSIPContact);
        $this->searchCriteriaSIPContact->setElementName('searchCriteriaSIPContact');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaSIPContact $searchCriteriaSIPContact
     */
    public function getSearchCriteriaSIPContact()
    {
        return $this->searchCriteriaSIPContact;
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = ($endpointType InstanceOf RegistrationEndpointType)
             ? $endpointType
             : new RegistrationEndpointType($endpointType);
        $this->endpointType->setElementName('endpointType');
        return $this;
    }

    /**
     * 
     * @return RegistrationEndpointType $endpointType
     */
    public function getEndpointType()
    {
        return ($this->endpointType)
            ? $this->endpointType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExpired($expired = null)
    {
        $this->expired = new PrimitiveType($expired);
        $this->expired->setElementName('expired');
        return $this;
    }

    /**
     * 
     * @return boolean $expired
     */
    public function getExpired()
    {
        return ($this->expired)
            ? $this->expired->getElementValue()
            : null;
    }
}
