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


/**
 * Modify the profile for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $defaultDomain                = null;
    protected $serviceProviderName          = null;
    protected $supportEmail                 = null;
    protected $contact                      = null;
    protected $address                      = null;
    protected $useServiceProviderLanguages  = null;

    public function __construct(
         $serviceProviderId,
         $defaultDomain = null,
         $serviceProviderName = null,
         $supportEmail = null,
         Contact $contact = null,
         StreetAddress $address = null,
         $useServiceProviderLanguages = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDefaultDomain($defaultDomain);
        $this->setServiceProviderName($serviceProviderName);
        $this->setSupportEmail($supportEmail);
        $this->setContact($contact);
        $this->setAddress($address);
        $this->setUseServiceProviderLanguages($useServiceProviderLanguages);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setServiceProviderName($serviceProviderName = null)
    {
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
    }

    public function getServiceProviderName()
    {
        return (!$this->serviceProviderName) ?: $this->serviceProviderName->value();
    }

    public function setSupportEmail($supportEmail = null)
    {
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
    }

    public function getSupportEmail()
    {
        return (!$this->supportEmail) ?: $this->supportEmail->value();
    }

    public function setContact(Contact $contact = null)
    {
    }

    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->value();
    }

    public function setAddress(StreetAddress $address = null)
    {
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setUseServiceProviderLanguages(xs:boolean $useServiceProviderLanguages = null)
    {
    }

    public function getUseServiceProviderLanguages()
    {
        return (!$this->useServiceProviderLanguages) ?: $this->useServiceProviderLanguages->value();
    }
}
