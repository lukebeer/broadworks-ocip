<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\HuntGroupUniformCallDistributionPolicyScope;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemHuntGroupGetRequest.
 */
class SystemHuntGroupGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemHuntGroupGetResponse17';
    protected $anonymousInsteadOfPrivateCLID;
    protected $removeHuntGroupNameFromCLID;
    protected $uniformCallDistributionPolicyScope;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\SystemHuntGroupGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID = null)
    {
        $this->anonymousInsteadOfPrivateCLID = new PrimitiveType($anonymousInsteadOfPrivateCLID);
        $this->anonymousInsteadOfPrivateCLID->setElementName('anonymousInsteadOfPrivateCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $anonymousInsteadOfPrivateCLID
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return ($this->anonymousInsteadOfPrivateCLID)
            ? $this->anonymousInsteadOfPrivateCLID->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID = null)
    {
        $this->removeHuntGroupNameFromCLID = new PrimitiveType($removeHuntGroupNameFromCLID);
        $this->removeHuntGroupNameFromCLID->setElementName('removeHuntGroupNameFromCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $removeHuntGroupNameFromCLID
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return ($this->removeHuntGroupNameFromCLID)
            ? $this->removeHuntGroupNameFromCLID->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf HuntGroupUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new HuntGroupUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
        $this->uniformCallDistributionPolicyScope->setElementName('uniformCallDistributionPolicyScope');
        return $this;
    }

    /**
     * 
     * @return HuntGroupUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return ($this->uniformCallDistributionPolicyScope)
            ? $this->uniformCallDistributionPolicyScope->getElementValue()
            : null;
    }
}
