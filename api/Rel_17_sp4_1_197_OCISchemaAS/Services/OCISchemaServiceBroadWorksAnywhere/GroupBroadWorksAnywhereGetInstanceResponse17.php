<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupBroadWorksAnywhereGetInstanceRequest17.
 *         Contains the service profile information.
 */
class GroupBroadWorksAnywhereGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ServiceInstanceReadProfile17 $serviceInstanceProfile,
             $broadWorksAnywhereScope,
             $promptForCLID,
             $silentPromptMode,
             $promptForPasscode
    ) {
        $this->serviceInstanceProfile  = $serviceInstanceProfile;
        $this->broadWorksAnywhereScope = $broadWorksAnywhereScope;
        $this->promptForCLID           = $promptForCLID;
        $this->silentPromptMode        = $silentPromptMode;
        $this->promptForPasscode       = $promptForPasscode;
        $this->args                    = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile17($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope)
    {
        $broadWorksAnywhereScope and $this->broadWorksAnywhereScope = new BroadWorksAnywhereScope($broadWorksAnywhereScope);
    }

    public function getBroadWorksAnywhereScope()
    {
        return (!$this->broadWorksAnywhereScope) ?: $this->broadWorksAnywhereScope->value();
    }

    public function setPromptForCLID($promptForCLID)
    {
        $promptForCLID and $this->promptForCLID = new BroadWorksAnywhereCLIDPrompt($promptForCLID);
    }

    public function getPromptForCLID()
    {
        return (!$this->promptForCLID) ?: $this->promptForCLID->value();
    }

    public function setSilentPromptMode($silentPromptMode)
    {
        $silentPromptMode and $this->silentPromptMode = new xs:boolean($silentPromptMode);
    }

    public function getSilentPromptMode()
    {
        return (!$this->silentPromptMode) ?: $this->silentPromptMode->value();
    }

    public function setPromptForPasscode($promptForPasscode)
    {
        $promptForPasscode and $this->promptForPasscode = new xs:boolean($promptForPasscode);
    }

    public function getPromptForPasscode()
    {
        return (!$this->promptForPasscode) ?: $this->promptForPasscode->value();
    }
}
