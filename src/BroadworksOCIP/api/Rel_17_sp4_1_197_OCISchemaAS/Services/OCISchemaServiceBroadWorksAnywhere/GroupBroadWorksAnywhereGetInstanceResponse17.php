<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereCLIDPrompt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywhereScope;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupBroadWorksAnywhereGetInstanceRequest17.
 *         Contains the service profile information.
 */
class GroupBroadWorksAnywhereGetInstanceResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksAnywhereGetInstanceResponse17';
    protected $serviceInstanceProfile;
    protected $broadWorksAnywhereScope;
    protected $promptForCLID;
    protected $silentPromptMode;
    protected $promptForPasscode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\GroupBroadWorksAnywhereGetInstanceResponse17 $response
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
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile17)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile17($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
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
