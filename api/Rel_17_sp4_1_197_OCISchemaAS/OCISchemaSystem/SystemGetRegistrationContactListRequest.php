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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                          = 'SystemGetRegistrationContactListRequest';
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
         SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI = null,
         SearchCriteriaSIPContact $searchCriteriaSIPContact = null,
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse $response
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
        if (!$deviceLevel) return $this;
        $this->deviceLevel = ($deviceLevel InstanceOf AccessDeviceLevel)
             ? $deviceLevel
             : new AccessDeviceLevel($deviceLevel);
        $this->deviceLevel->setName('deviceLevel');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceLevel $deviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel->getValue();
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaRegistrationURI(SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI = null)
    {
        if (!$searchCriteriaRegistrationURI) return $this;
        $this->searchCriteriaRegistrationURI = ($searchCriteriaRegistrationURI InstanceOf SearchCriteriaRegistrationURI)
             ? $searchCriteriaRegistrationURI
             : new SearchCriteriaRegistrationURI($searchCriteriaRegistrationURI);
        $this->searchCriteriaRegistrationURI->setName('searchCriteriaRegistrationURI');
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
        if (!$searchCriteriaSIPContact) return $this;
        $this->searchCriteriaSIPContact = ($searchCriteriaSIPContact InstanceOf SearchCriteriaSIPContact)
             ? $searchCriteriaSIPContact
             : new SearchCriteriaSIPContact($searchCriteriaSIPContact);
        $this->searchCriteriaSIPContact->setName('searchCriteriaSIPContact');
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
        if (!$endpointType) return $this;
        $this->endpointType = ($endpointType InstanceOf RegistrationEndpointType)
             ? $endpointType
             : new RegistrationEndpointType($endpointType);
        $this->endpointType->setName('endpointType');
        return $this;
    }

    /**
     * 
     * @return RegistrationEndpointType $endpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType->getValue();
    }

    /**
     * 
     */
    public function setExpired($expired = null)
    {
        if (!$expired) return $this;
        $this->expired = new PrimitiveType($expired);
        $this->expired->setName('expired');
        return $this;
    }

    /**
     * 
     * @return boolean $expired
     */
    public function getExpired()
    {
        return $this->expired->getValue();
    }
}
