<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupBroadWorksAnywhereGetInstanceRequest17.
 *         Contains the service profile information.
 */
class GroupBroadWorksAnywhereGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupBroadWorksAnywhereGetInstanceResponse17';
    protected $serviceInstanceProfile  = null;
    protected $broadWorksAnywhereScope = null;
    protected $promptForCLID           = null;
    protected $silentPromptMode        = null;
    protected $promptForPasscode       = null;

    /**
     * @return GroupBroadWorksAnywhereGetInstanceResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setBroadWorksAnywhereScope($broadWorksAnywhereScope = null)
    {
        if (!$broadWorksAnywhereScope) return $this;
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->broadWorksAnywhereScope->setName('broadWorksAnywhereScope');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereScope
     */
    public function getBroadWorksAnywhereScope()
    {
        return $this->broadWorksAnywhereScope->getValue();
    }

    /**
     * 
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        if (!$promptForCLID) return $this;
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
        $this->promptForCLID->setName('promptForCLID');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereCLIDPrompt
     */
    public function getPromptForCLID()
    {
        return $this->promptForCLID->getValue();
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        if (!$silentPromptMode) return $this;
        $this->silentPromptMode = new PrimitiveType($silentPromptMode);
        $this->silentPromptMode->setName('silentPromptMode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSilentPromptMode()
    {
        return $this->silentPromptMode->getValue();
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        if (!$promptForPasscode) return $this;
        $this->promptForPasscode = new PrimitiveType($promptForPasscode);
        $this->promptForPasscode->setName('promptForPasscode');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPromptForPasscode()
    {
        return $this->promptForPasscode->getValue();
    }
}
