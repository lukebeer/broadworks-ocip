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
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupGetResponse';
    public    $name                                          = __CLASS__;
    protected $deliveryFromAddress                           = null;
    protected $notificationFromAddress                       = null;
    protected $voicePortalLockoutFromAddress                 = null;
    protected $useSystemDefaultDeliveryFromAddress           = null;
    protected $useSystemDefaultNotificationFromAddress       = null;
    protected $useSystemDefaultVoicePortalLockoutFromAddress = null;


    /**
     * Email Address
     */
    public function setDeliveryFromAddress($deliveryFromAddress = null)
    {
        $this->deliveryFromAddress = ($deliveryFromAddress InstanceOf EmailAddress)
             ? $deliveryFromAddress
             : new EmailAddress($deliveryFromAddress);
    }

    /**
     * Email Address
     */
    public function getDeliveryFromAddress()
    {
        return (!$this->deliveryFromAddress) ?: $this->deliveryFromAddress->getValue();
    }

    /**
     * Email Address
     */
    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        $this->notificationFromAddress = ($notificationFromAddress InstanceOf EmailAddress)
             ? $notificationFromAddress
             : new EmailAddress($notificationFromAddress);
    }

    /**
     * Email Address
     */
    public function getNotificationFromAddress()
    {
        return (!$this->notificationFromAddress) ?: $this->notificationFromAddress->getValue();
    }

    /**
     * Email Address
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress = null)
    {
        $this->voicePortalLockoutFromAddress = ($voicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $voicePortalLockoutFromAddress
             : new EmailAddress($voicePortalLockoutFromAddress);
    }

    /**
     * Email Address
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return (!$this->voicePortalLockoutFromAddress) ?: $this->voicePortalLockoutFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress = null)
    {
        $this->useSystemDefaultDeliveryFromAddress = (boolean) $useSystemDefaultDeliveryFromAddress;
    }

    /**
     * 
     */
    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return (!$this->useSystemDefaultDeliveryFromAddress) ?: $this->useSystemDefaultDeliveryFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress = null)
    {
        $this->useSystemDefaultNotificationFromAddress = (boolean) $useSystemDefaultNotificationFromAddress;
    }

    /**
     * 
     */
    public function getUseSystemDefaultNotificationFromAddress()
    {
        return (!$this->useSystemDefaultNotificationFromAddress) ?: $this->useSystemDefaultNotificationFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress = null)
    {
        $this->useSystemDefaultVoicePortalLockoutFromAddress = (boolean) $useSystemDefaultVoicePortalLockoutFromAddress;
    }

    /**
     * 
     */
    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->useSystemDefaultVoicePortalLockoutFromAddress) ?: $this->useSystemDefaultVoicePortalLockoutFromAddress->getValue();
    }
}
