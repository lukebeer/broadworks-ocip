<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderVoiceMessagingGroupGetRequest.
 *         Contains the service provider's or enterprise's voice messaging settings.
 */
class ServiceProviderVoiceMessagingGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $deliveryFromAddress                            = null;
    protected $notificationFromAddress                        = null;
    protected $voicePortalLockoutFromAddress                  = null;
    protected $useSystemDefaultDeliveryFromAddress            = null;
    protected $useSystemDefaultNotificationFromAddress        = null;
    protected $useSystemDefaultVoicePortalLockoutFromAddress  = null;


    public function setDeliveryFromAddress($deliveryFromAddress = null)
    {
        $this->deliveryFromAddress = ($deliveryFromAddress InstanceOf EmailAddress)
             ? $deliveryFromAddress
             : new EmailAddress($deliveryFromAddress);
    }

    public function getDeliveryFromAddress()
    {
        return (!$this->deliveryFromAddress) ?: $this->deliveryFromAddress->value();
    }

    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        $this->notificationFromAddress = ($notificationFromAddress InstanceOf EmailAddress)
             ? $notificationFromAddress
             : new EmailAddress($notificationFromAddress);
    }

    public function getNotificationFromAddress()
    {
        return (!$this->notificationFromAddress) ?: $this->notificationFromAddress->value();
    }

    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress = null)
    {
        $this->voicePortalLockoutFromAddress = ($voicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $voicePortalLockoutFromAddress
             : new EmailAddress($voicePortalLockoutFromAddress);
    }

    public function getVoicePortalLockoutFromAddress()
    {
        return (!$this->voicePortalLockoutFromAddress) ?: $this->voicePortalLockoutFromAddress->value();
    }

    public function setUseSystemDefaultDeliveryFromAddress(xs:boolean $useSystemDefaultDeliveryFromAddress = null)
    {
    }

    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return (!$this->useSystemDefaultDeliveryFromAddress) ?: $this->useSystemDefaultDeliveryFromAddress->value();
    }

    public function setUseSystemDefaultNotificationFromAddress(xs:boolean $useSystemDefaultNotificationFromAddress = null)
    {
    }

    public function getUseSystemDefaultNotificationFromAddress()
    {
        return (!$this->useSystemDefaultNotificationFromAddress) ?: $this->useSystemDefaultNotificationFromAddress->value();
    }

    public function setUseSystemDefaultVoicePortalLockoutFromAddress(xs:boolean $useSystemDefaultVoicePortalLockoutFromAddress = null)
    {
    }

    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->useSystemDefaultVoicePortalLockoutFromAddress) ?: $this->useSystemDefaultVoicePortalLockoutFromAddress->value();
    }
}
