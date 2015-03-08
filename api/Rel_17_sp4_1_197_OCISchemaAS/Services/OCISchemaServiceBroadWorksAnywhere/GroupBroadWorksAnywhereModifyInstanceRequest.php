<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a BroadWorks Anywhere instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksAnywhereModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $serviceUserId           = null;
    protected $serviceInstanceProfile  = null;
    protected $broadWorksAnywhereScope = null;
    protected $promptForCLID           = null;
    protected $silentPromptMode        = null;
    protected $promptForPasscode       = null;

    public function __construct(
         $serviceUserId,
          $serviceInstanceProfile = null,
         $broadWorksAnywhereScope = null,
         $promptForCLID = null,
         $silentPromptMode = null,
         $promptForPasscode = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setBroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->setPromptForCLID($promptForCLID);
        $this->setSilentPromptMode($silentPromptMode);
        $this->setPromptForPasscode($promptForPasscode);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Controls which users may use the BroadWorks Anywhere portal.
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope = null)
    {
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
    }

    /**
     * Controls which users may use the BroadWorks Anywhere portal.
     */
    public function getBroadWorksAnywhereScope()
    {
        return (!$this->broadWorksAnywhereScope) ?: $this->broadWorksAnywhereScope->getValue();
    }

    /**
     * BroadWorks Anywhere Prompt for CLID options.
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
    }

    /**
     * BroadWorks Anywhere Prompt for CLID options.
     */
    public function getPromptForCLID()
    {
        return (!$this->promptForCLID) ?: $this->promptForCLID->getValue();
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        $this->silentPromptMode = (boolean) $silentPromptMode;
    }

    /**
     * 
     */
    public function getSilentPromptMode()
    {
        return (!$this->silentPromptMode) ?: $this->silentPromptMode->getValue();
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        $this->promptForPasscode = (boolean) $promptForPasscode;
    }

    /**
     * 
     */
    public function getPromptForPasscode()
    {
        return (!$this->promptForPasscode) ?: $this->promptForPasscode->getValue();
    }
}
