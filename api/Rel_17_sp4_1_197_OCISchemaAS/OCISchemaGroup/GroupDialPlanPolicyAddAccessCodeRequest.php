<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to add a Group level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupDialPlanPolicyAddAccessCodeRequest extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $serviceProviderId                           = null;
    protected $groupId                                     = null;
    protected $accessCode                                  = null;
    protected $includeCodeForNetworkTranslationsAndRouting = null;
    protected $includeCodeForScreeningServices             = null;
    protected $enableSecondaryDialTone                     = null;
    protected $description                                 = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $accessCode,
         $includeCodeForNetworkTranslationsAndRouting,
         $includeCodeForScreeningServices,
         $enableSecondaryDialTone,
         $description = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setAccessCode($accessCode);
        $this->setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting);
        $this->setIncludeCodeForScreeningServices($includeCodeForScreeningServices);
        $this->setEnableSecondaryDialTone($enableSecondaryDialTone);
        $this->setDescription($description);
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Dial Plan Access Code.
     *         The Access Code may contain digits 0-9, *, and #.
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf DialPlanAccessCode)
             ? $accessCode
             : new DialPlanAccessCode($accessCode);
    }

    /**
     * Dial Plan Access Code.
     *         The Access Code may contain digits 0-9, *, and #.
     */
    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting = null)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = (boolean) $includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * 
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return (!$this->includeCodeForNetworkTranslationsAndRouting) ?: $this->includeCodeForNetworkTranslationsAndRouting->getValue();
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        $this->includeCodeForScreeningServices = (boolean) $includeCodeForScreeningServices;
    }

    /**
     * 
     */
    public function getIncludeCodeForScreeningServices()
    {
        return (!$this->includeCodeForScreeningServices) ?: $this->includeCodeForScreeningServices->getValue();
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        $this->enableSecondaryDialTone = (boolean) $enableSecondaryDialTone;
    }

    /**
     * 
     */
    public function getEnableSecondaryDialTone()
    {
        return (!$this->enableSecondaryDialTone) ?: $this->enableSecondaryDialTone->getValue();
    }

    /**
     * Dial Plan Access Code Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
    }

    /**
     * Dial Plan Access Code Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
