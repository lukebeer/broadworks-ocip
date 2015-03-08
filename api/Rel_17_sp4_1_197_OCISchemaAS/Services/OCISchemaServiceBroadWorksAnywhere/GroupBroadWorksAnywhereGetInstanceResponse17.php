<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupBroadWorksAnywhereGetInstanceRequest17.
 *         Contains the service profile information.
 */
class GroupBroadWorksAnywhereGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere\GroupBroadWorksAnywhereGetInstanceResponse17';
    public    $name                    = __CLASS__;
    protected $serviceInstanceProfile  = null;
    protected $broadWorksAnywhereScope = null;
    protected $promptForCLID           = null;
    protected $silentPromptMode        = null;
    protected $promptForPasscode       = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile17 $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
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
