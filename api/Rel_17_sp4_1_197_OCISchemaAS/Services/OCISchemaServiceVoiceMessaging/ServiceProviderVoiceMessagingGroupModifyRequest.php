<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a service provider's or enterprise's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderVoiceMessagingGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                          = __CLASS__;
    protected $serviceProviderId                             = null;
    protected $deliveryFromAddress                           = null;
    protected $notificationFromAddress                       = null;
    protected $voicePortalLockoutFromAddress                 = null;
    protected $useSystemDefaultDeliveryFromAddress           = null;
    protected $useSystemDefaultNotificationFromAddress       = null;
    protected $useSystemDefaultVoicePortalLockoutFromAddress = null;

    public function __construct(
         $serviceProviderId,
         $deliveryFromAddress = null,
         $notificationFromAddress = null,
         $voicePortalLockoutFromAddress = null,
         $useSystemDefaultDeliveryFromAddress = null,
         $useSystemDefaultNotificationFromAddress = null,
         $useSystemDefaultVoicePortalLockoutFromAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeliveryFromAddress($deliveryFromAddress);
        $this->setNotificationFromAddress($notificationFromAddress);
        $this->setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress);
        $this->setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress);
        $this->setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress);
        $this->setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress);
    }

    /**
     * @return ServiceProviderVoiceMessagingGroupModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

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
        return (!$this->useSystemDefaultDeliveryFromAddress) ?: $this->useSystemDefaultDeliveryFromAddress;
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
        return (!$this->useSystemDefaultNotificationFromAddress) ?: $this->useSystemDefaultNotificationFromAddress;
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
        return (!$this->useSystemDefaultVoicePortalLockoutFromAddress) ?: $this->useSystemDefaultVoicePortalLockoutFromAddress;
    }
}
