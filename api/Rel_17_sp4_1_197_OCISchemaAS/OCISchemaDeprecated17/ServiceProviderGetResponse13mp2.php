<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderGetRequest13mp2.
 *         The response contains the service provider or enterprise's profile information.
 */
class ServiceProviderGetResponse13mp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultDomain,
             $serviceProviderName=null,
             $supportEmail=null,
             Contact $contact=null,
             StreetAddress $address=null
    ) {
        $this->defaultDomain       = new NetAddress($defaultDomain);
        $this->serviceProviderName = new ServiceProviderName($serviceProviderName);
        $this->supportEmail        = new EmailAddress($supportEmail);
        $this->contact             = $contact;
        $this->address             = $address;
        $this->args                = func_get_args();
    }

    public function setDefaultDomain($defaultDomain)
    {
        $defaultDomain and $this->defaultDomain = new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setServiceProviderName($serviceProviderName)
    {
        $serviceProviderName and $this->serviceProviderName = new ServiceProviderName($serviceProviderName);
    }

    public function getServiceProviderName()
    {
        return (!$this->serviceProviderName) ?: $this->serviceProviderName->value();
    }

    public function setSupportEmail($supportEmail)
    {
        $supportEmail and $this->supportEmail = new EmailAddress($supportEmail);
    }

    public function getSupportEmail()
    {
        return (!$this->supportEmail) ?: $this->supportEmail->value();
    }

    public function setContact($contact)
    {
        $contact and $this->contact = new Contact($contact);
    }

    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->value();
    }

    public function setAddress($address)
    {
        $address and $this->address = new StreetAddress($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }
}
