<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a service provider's or enterprise's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $deliveryFromAddress=null,
             $notificationFromAddress=null,
             $voicePortalLockoutFromAddress=null,
             $useSystemDefaultDeliveryFromAddress=null,
             $useSystemDefaultNotificationFromAddress=null,
             $useSystemDefaultVoicePortalLockoutFromAddress=null
    ) {
        $this->serviceProviderId                             = new ServiceProviderId($serviceProviderId);
        $this->deliveryFromAddress                           = new EmailAddress($deliveryFromAddress);
        $this->notificationFromAddress                       = new EmailAddress($notificationFromAddress);
        $this->voicePortalLockoutFromAddress                 = new EmailAddress($voicePortalLockoutFromAddress);
        $this->useSystemDefaultDeliveryFromAddress           = $useSystemDefaultDeliveryFromAddress;
        $this->useSystemDefaultNotificationFromAddress       = $useSystemDefaultNotificationFromAddress;
        $this->useSystemDefaultVoicePortalLockoutFromAddress = $useSystemDefaultVoicePortalLockoutFromAddress;
        $this->args                                          = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDeliveryFromAddress($deliveryFromAddress)
    {
        $deliveryFromAddress and $this->deliveryFromAddress = new EmailAddress($deliveryFromAddress);
    }

    public function getDeliveryFromAddress()
    {
        return (!$this->deliveryFromAddress) ?: $this->deliveryFromAddress->value();
    }

    public function setNotificationFromAddress($notificationFromAddress)
    {
        $notificationFromAddress and $this->notificationFromAddress = new EmailAddress($notificationFromAddress);
    }

    public function getNotificationFromAddress()
    {
        return (!$this->notificationFromAddress) ?: $this->notificationFromAddress->value();
    }

    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress)
    {
        $voicePortalLockoutFromAddress and $this->voicePortalLockoutFromAddress = new EmailAddress($voicePortalLockoutFromAddress);
    }

    public function getVoicePortalLockoutFromAddress()
    {
        return (!$this->voicePortalLockoutFromAddress) ?: $this->voicePortalLockoutFromAddress->value();
    }

    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress)
    {
        $useSystemDefaultDeliveryFromAddress and $this->useSystemDefaultDeliveryFromAddress = new xs:boolean($useSystemDefaultDeliveryFromAddress);
    }

    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return (!$this->useSystemDefaultDeliveryFromAddress) ?: $this->useSystemDefaultDeliveryFromAddress->value();
    }

    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress)
    {
        $useSystemDefaultNotificationFromAddress and $this->useSystemDefaultNotificationFromAddress = new xs:boolean($useSystemDefaultNotificationFromAddress);
    }

    public function getUseSystemDefaultNotificationFromAddress()
    {
        return (!$this->useSystemDefaultNotificationFromAddress) ?: $this->useSystemDefaultNotificationFromAddress->value();
    }

    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress)
    {
        $useSystemDefaultVoicePortalLockoutFromAddress and $this->useSystemDefaultVoicePortalLockoutFromAddress = new xs:boolean($useSystemDefaultVoicePortalLockoutFromAddress);
    }

    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return (!$this->useSystemDefaultVoicePortalLockoutFromAddress) ?: $this->useSystemDefaultVoicePortalLockoutFromAddress->value();
    }
}
