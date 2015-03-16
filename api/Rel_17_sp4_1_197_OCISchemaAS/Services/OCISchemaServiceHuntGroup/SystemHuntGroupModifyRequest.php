<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\HuntGroupUniformCallDistributionPolicyScope;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Hunt Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemHuntGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemHuntGroupModifyRequest';
    protected $anonymousInsteadOfPrivateCLID;
    protected $removeHuntGroupNameFromCLID;
    protected $uniformCallDistributionPolicyScope;

    public function __construct(
         $anonymousInsteadOfPrivateCLID = null,
         $removeHuntGroupNameFromCLID = null,
         $uniformCallDistributionPolicyScope = null
    ) {
        $this->setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID);
        $this->setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID);
        $this->setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    /**
     * @return mixed $response
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
