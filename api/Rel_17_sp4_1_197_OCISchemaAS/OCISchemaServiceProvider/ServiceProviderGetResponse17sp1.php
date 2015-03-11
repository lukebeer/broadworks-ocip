<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderGetRequest17sp1.
 *         The response contains the service provider or enterprise's profile information.
 */
class ServiceProviderGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                        = 'ServiceProviderGetResponse17sp1';
    protected $defaultDomain               = null;
    protected $serviceProviderName         = null;
    protected $supportEmail                = null;
    protected $contact                     = null;
    protected $address                     = null;
    protected $useServiceProviderLanguages = null;

    /**
     * @return ServiceProviderGetResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        if (!$defaultDomain) return $this;
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain->getValue();
    }

    /**
     * 
     */
    public function setServiceProviderName($serviceProviderName = null)
    {
        if (!$serviceProviderName) return $this;
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
        $this->serviceProviderName->setName('serviceProviderName');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderName
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName->getValue();
    }

    /**
     * 
     */
    public function setSupportEmail($supportEmail = null)
    {
        if (!$supportEmail) return $this;
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
        $this->supportEmail->setName('supportEmail');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getSupportEmail()
    {
        return $this->supportEmail->getValue();
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        if (!$contact) return $this;
        $this->contact = $contact;
        $this->contact->setName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact
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
        if (!$address) return $this;
        $this->address = $address;
        $this->address->setName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 
     */
    public function setUseServiceProviderLanguages($useServiceProviderLanguages = null)
    {
        if (!$useServiceProviderLanguages) return $this;
        $this->useServiceProviderLanguages = new PrimitiveType($useServiceProviderLanguages);
        $this->useServiceProviderLanguages->setName('useServiceProviderLanguages');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseServiceProviderLanguages()
    {
        return $this->useServiceProviderLanguages->getValue();
    }
}
