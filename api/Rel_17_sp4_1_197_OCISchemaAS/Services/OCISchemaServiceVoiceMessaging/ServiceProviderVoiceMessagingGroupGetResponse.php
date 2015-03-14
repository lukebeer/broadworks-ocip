<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderVoiceMessagingGroupGetRequest.
 *         Contains the service provider's or enterprise's voice messaging settings.
 */
class ServiceProviderVoiceMessagingGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'ServiceProviderVoiceMessagingGroupGetResponse';
    protected $deliveryFromAddress                           = null;
    protected $notificationFromAddress                       = null;
    protected $voicePortalLockoutFromAddress                 = null;
    protected $useSystemDefaultDeliveryFromAddress           = null;
    protected $useSystemDefaultNotificationFromAddress       = null;
    protected $useSystemDefaultVoicePortalLockoutFromAddress = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\ServiceProviderVoiceMessagingGroupGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeliveryFromAddress($deliveryFromAddress = null)
    {
        if (!$deliveryFromAddress) return $this;
        $this->deliveryFromAddress = ($deliveryFromAddress InstanceOf EmailAddress)
             ? $deliveryFromAddress
             : new EmailAddress($deliveryFromAddress);
        $this->deliveryFromAddress->setName('deliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $deliveryFromAddress
     */
    public function getDeliveryFromAddress()
    {
        return $this->deliveryFromAddress->getValue();
    }

    /**
     * 
     */
    public function setNotificationFromAddress($notificationFromAddress = null)
    {
        if (!$notificationFromAddress) return $this;
        $this->notificationFromAddress = ($notificationFromAddress InstanceOf EmailAddress)
             ? $notificationFromAddress
             : new EmailAddress($notificationFromAddress);
        $this->notificationFromAddress->setName('notificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $notificationFromAddress
     */
    public function getNotificationFromAddress()
    {
        return $this->notificationFromAddress->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalLockoutFromAddress($voicePortalLockoutFromAddress = null)
    {
        if (!$voicePortalLockoutFromAddress) return $this;
        $this->voicePortalLockoutFromAddress = ($voicePortalLockoutFromAddress InstanceOf EmailAddress)
             ? $voicePortalLockoutFromAddress
             : new EmailAddress($voicePortalLockoutFromAddress);
        $this->voicePortalLockoutFromAddress->setName('voicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voicePortalLockoutFromAddress
     */
    public function getVoicePortalLockoutFromAddress()
    {
        return $this->voicePortalLockoutFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultDeliveryFromAddress($useSystemDefaultDeliveryFromAddress = null)
    {
        if (!$useSystemDefaultDeliveryFromAddress) return $this;
        $this->useSystemDefaultDeliveryFromAddress = new PrimitiveType($useSystemDefaultDeliveryFromAddress);
        $this->useSystemDefaultDeliveryFromAddress->setName('useSystemDefaultDeliveryFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultDeliveryFromAddress
     */
    public function getUseSystemDefaultDeliveryFromAddress()
    {
        return $this->useSystemDefaultDeliveryFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultNotificationFromAddress($useSystemDefaultNotificationFromAddress = null)
    {
        if (!$useSystemDefaultNotificationFromAddress) return $this;
        $this->useSystemDefaultNotificationFromAddress = new PrimitiveType($useSystemDefaultNotificationFromAddress);
        $this->useSystemDefaultNotificationFromAddress->setName('useSystemDefaultNotificationFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultNotificationFromAddress
     */
    public function getUseSystemDefaultNotificationFromAddress()
    {
        return $this->useSystemDefaultNotificationFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultVoicePortalLockoutFromAddress($useSystemDefaultVoicePortalLockoutFromAddress = null)
    {
        if (!$useSystemDefaultVoicePortalLockoutFromAddress) return $this;
        $this->useSystemDefaultVoicePortalLockoutFromAddress = new PrimitiveType($useSystemDefaultVoicePortalLockoutFromAddress);
        $this->useSystemDefaultVoicePortalLockoutFromAddress->setName('useSystemDefaultVoicePortalLockoutFromAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultVoicePortalLockoutFromAddress
     */
    public function getUseSystemDefaultVoicePortalLockoutFromAddress()
    {
        return $this->useSystemDefaultVoicePortalLockoutFromAddress->getValue();
    }
}
