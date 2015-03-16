<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupBroadWorksAnywhereGetInstanceRequest.
 *         Contains the service profile information.
 */
class GroupBroadWorksAnywhereGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksAnywhereGetInstanceResponse';
    protected $serviceInstanceProfile;
    protected $broadWorksAnywhereScope;
    protected $promptForCLID;
    protected $silentPromptMode;
    protected $promptForPasscode;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupBroadWorksAnywhereGetInstanceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
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
        $this->broadWorksAnywhereScope = ($broadWorksAnywhereScope InstanceOf BroadWorksAnywhereScope)
             ? $broadWorksAnywhereScope
             : new BroadWorksAnywhereScope($broadWorksAnywhereScope);
        $this->broadWorksAnywhereScope->setElementName('broadWorksAnywhereScope');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereScope $broadWorksAnywhereScope
     */
    public function getBroadWorksAnywhereScope()
    {
        return ($this->broadWorksAnywhereScope)
            ? $this->broadWorksAnywhereScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPromptForCLID($promptForCLID = null)
    {
        $this->promptForCLID = ($promptForCLID InstanceOf BroadWorksAnywhereCLIDPrompt)
             ? $promptForCLID
             : new BroadWorksAnywhereCLIDPrompt($promptForCLID);
        $this->promptForCLID->setElementName('promptForCLID');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywhereCLIDPrompt $promptForCLID
     */
    public function getPromptForCLID()
    {
        return ($this->promptForCLID)
            ? $this->promptForCLID->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSilentPromptMode($silentPromptMode = null)
    {
        $this->silentPromptMode = new PrimitiveType($silentPromptMode);
        $this->silentPromptMode->setElementName('silentPromptMode');
        return $this;
    }

    /**
     * 
     * @return boolean $silentPromptMode
     */
    public function getSilentPromptMode()
    {
        return ($this->silentPromptMode)
            ? $this->silentPromptMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPromptForPasscode($promptForPasscode = null)
    {
        $this->promptForPasscode = new PrimitiveType($promptForPasscode);
        $this->promptForPasscode->setElementName('promptForPasscode');
        return $this;
    }

    /**
     * 
     * @return boolean $promptForPasscode
     */
    public function getPromptForPasscode()
    {
        return ($this->promptForPasscode)
            ? $this->promptForPasscode->getElementValue()
            : null;
    }
}
