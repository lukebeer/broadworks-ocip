<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAddRequest13mp2 extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderAddRequest13mp2';
    protected $serviceProviderId;
    protected $defaultDomain;
    protected $serviceProviderName;
    protected $supportEmail;
    protected $contact;
    protected $address;

    public function __construct(
         $serviceProviderId = '',
         $defaultDomain = '',
         $serviceProviderName = null,
         $supportEmail = null,
         Contact $contact = null,
         StreetAddress $address = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDefaultDomain($defaultDomain);
        $this->setServiceProviderName($serviceProviderName);
        $this->setSupportEmail($supportEmail);
        $this->setContact($contact);
        $this->setAddress($address);
    }

    /**
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $defaultDomain
     */
    public function getDefaultDomain()
    {
        return ($this->defaultDomain) ? $this->defaultDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderName($serviceProviderName = null)
    {
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
        $this->serviceProviderName->setName('serviceProviderName');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderName $serviceProviderName
     */
    public function getServiceProviderName()
    {
        return ($this->serviceProviderName) ? $this->serviceProviderName->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportEmail($supportEmail = null)
    {
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
        $this->supportEmail->setName('supportEmail');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $supportEmail
     */
    public function getSupportEmail()
    {
        return ($this->supportEmail) ? $this->supportEmail->getValue() : null;
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = ($contact InstanceOf Contact)
             ? $contact
             : new Contact($contact);
        $this->contact->setName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = ($address InstanceOf StreetAddress)
             ? $address
             : new StreetAddress($address);
        $this->address->setName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
