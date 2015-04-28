<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringIncomingRuleList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallMeNowAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an existing Communication Barring Profile.
 *         The priorities for OriginatingRules, RedirectingRules, CallMeNowRules and IncomingRules are requantized to consecutive integers as part of the modify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            callMeNowDefaultAction
 *            callMeNowDefaultCallTimeout
 *            callMeNowRule
 */
class ServiceProviderCommunicationBarringProfileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderCommunicationBarringProfileModifyRequest';
    protected $serviceProviderId;
    protected $name;
    protected $newName;
    protected $description;
    protected $originatingDefaultAction;
    protected $originatingDefaultTreatmentId;
    protected $originatingDefaultTransferNumber;
    protected $originatingDefaultCallTimeout;
    protected $originatingRule;
    protected $redirectingDefaultAction;
    protected $redirectingDefaultCallTimeout;
    protected $redirectingRule;
    protected $callMeNowDefaultAction;
    protected $callMeNowDefaultCallTimeout;
    protected $callMeNowRule;
    protected $incomingDefaultAction;
    protected $incomingDefaultCallTimeout;
    protected $incomingRule;
    protected $becomeDefault;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $newName = null,
         $description = null,
         $originatingDefaultAction = null,
         $originatingDefaultTreatmentId = null,
         $originatingDefaultTransferNumber = null,
         $originatingDefaultCallTimeout = null,
         $originatingRule = null,
         $redirectingDefaultAction = null,
         $redirectingDefaultCallTimeout = null,
         $redirectingRule = null,
         $callMeNowDefaultAction = null,
         $callMeNowDefaultCallTimeout = null,
         $callMeNowRule = null,
         $incomingDefaultAction = null,
         $incomingDefaultCallTimeout = null,
         $incomingRule = null,
         $becomeDefault = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setOriginatingDefaultAction($originatingDefaultAction);
        $this->setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId);
        $this->setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber);
        $this->setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout);
        $this->setOriginatingRule($originatingRule);
        $this->setRedirectingDefaultAction($redirectingDefaultAction);
        $this->setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout);
        $this->setRedirectingRule($redirectingRule);
        $this->setCallMeNowDefaultAction($callMeNowDefaultAction);
        $this->setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout);
        $this->setCallMeNowRule($callMeNowRule);
        $this->setIncomingDefaultAction($incomingDefaultAction);
        $this->setIncomingDefaultCallTimeout($incomingDefaultCallTimeout);
        $this->setIncomingRule($incomingRule);
        $this->setBecomeDefault($becomeDefault);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringProfileName)
             ? $name
             : new CommunicationBarringProfileName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CommunicationBarringProfileName)
             ? $newName
             : new CommunicationBarringProfileName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringProfileDescription)
             ? $description
             : new CommunicationBarringProfileDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction($originatingDefaultAction);
        $this->originatingDefaultAction->setElementName('originatingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingAction $originatingDefaultAction
     */
    public function getOriginatingDefaultAction()
    {
        return ($this->originatingDefaultAction)
            ? $this->originatingDefaultAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        $this->originatingDefaultTreatmentId = ($originatingDefaultTreatmentId InstanceOf TreatmentId)
             ? $originatingDefaultTreatmentId
             : new TreatmentId($originatingDefaultTreatmentId);
        $this->originatingDefaultTreatmentId->setElementName('originatingDefaultTreatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $originatingDefaultTreatmentId
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return ($this->originatingDefaultTreatmentId)
            ? $this->originatingDefaultTreatmentId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        $this->originatingDefaultTransferNumber = ($originatingDefaultTransferNumber InstanceOf OutgoingDN)
             ? $originatingDefaultTransferNumber
             : new OutgoingDN($originatingDefaultTransferNumber);
        $this->originatingDefaultTransferNumber->setElementName('originatingDefaultTransferNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $originatingDefaultTransferNumber
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return ($this->originatingDefaultTransferNumber)
            ? $this->originatingDefaultTransferNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout = null)
    {
        $this->originatingDefaultCallTimeout = ($originatingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $originatingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
        $this->originatingDefaultCallTimeout->setElementName('originatingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $originatingDefaultCallTimeout
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return ($this->originatingDefaultCallTimeout)
            ? $this->originatingDefaultCallTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatingRule(ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList $originatingRule = null)
    {
        $this->originatingRule = ($originatingRule InstanceOf ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList)
             ? $originatingRule
             : new ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList($originatingRule);
        $this->originatingRule->setElementName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList $originatingRule
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule;
    }

    /**
     * 
     */
    public function setRedirectingDefaultAction($redirectingDefaultAction = null)
    {
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction($redirectingDefaultAction);
        $this->redirectingDefaultAction->setElementName('redirectingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingAction $redirectingDefaultAction
     */
    public function getRedirectingDefaultAction()
    {
        return ($this->redirectingDefaultAction)
            ? $this->redirectingDefaultAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout = null)
    {
        $this->redirectingDefaultCallTimeout = ($redirectingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $redirectingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
        $this->redirectingDefaultCallTimeout->setElementName('redirectingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $redirectingDefaultCallTimeout
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return ($this->redirectingDefaultCallTimeout)
            ? $this->redirectingDefaultCallTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingRule(ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList $redirectingRule = null)
    {
        $this->redirectingRule = ($redirectingRule InstanceOf ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList)
             ? $redirectingRule
             : new ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList($redirectingRule);
        $this->redirectingRule->setElementName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList $redirectingRule
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }

    /**
     * 
     */
    public function setCallMeNowDefaultAction($callMeNowDefaultAction = null)
    {
        $this->callMeNowDefaultAction = ($callMeNowDefaultAction InstanceOf CommunicationBarringCallMeNowAction)
             ? $callMeNowDefaultAction
             : new CommunicationBarringCallMeNowAction($callMeNowDefaultAction);
        $this->callMeNowDefaultAction->setElementName('callMeNowDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallMeNowAction $callMeNowDefaultAction
     */
    public function getCallMeNowDefaultAction()
    {
        return ($this->callMeNowDefaultAction)
            ? $this->callMeNowDefaultAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout = null)
    {
        $this->callMeNowDefaultCallTimeout = ($callMeNowDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $callMeNowDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($callMeNowDefaultCallTimeout);
        $this->callMeNowDefaultCallTimeout->setElementName('callMeNowDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $callMeNowDefaultCallTimeout
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return ($this->callMeNowDefaultCallTimeout)
            ? $this->callMeNowDefaultCallTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallMeNowRule(ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList $callMeNowRule = null)
    {
        $this->callMeNowRule = ($callMeNowRule InstanceOf ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList)
             ? $callMeNowRule
             : new ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList($callMeNowRule);
        $this->callMeNowRule->setElementName('callMeNowRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList $callMeNowRule
     */
    public function getCallMeNowRule()
    {
        return $this->callMeNowRule;
    }

    /**
     * 
     */
    public function setIncomingDefaultAction($incomingDefaultAction = null)
    {
        $this->incomingDefaultAction = ($incomingDefaultAction InstanceOf CommunicationBarringIncomingAction)
             ? $incomingDefaultAction
             : new CommunicationBarringIncomingAction($incomingDefaultAction);
        $this->incomingDefaultAction->setElementName('incomingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringIncomingAction $incomingDefaultAction
     */
    public function getIncomingDefaultAction()
    {
        return ($this->incomingDefaultAction)
            ? $this->incomingDefaultAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout = null)
    {
        $this->incomingDefaultCallTimeout = ($incomingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $incomingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
        $this->incomingDefaultCallTimeout->setElementName('incomingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $incomingDefaultCallTimeout
     */
    public function getIncomingDefaultCallTimeout()
    {
        return ($this->incomingDefaultCallTimeout)
            ? $this->incomingDefaultCallTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncomingRule(ReplacementCommunicationBarringIncomingRuleList $incomingRule = null)
    {
        $this->incomingRule = ($incomingRule InstanceOf ReplacementCommunicationBarringIncomingRuleList)
             ? $incomingRule
             : new ReplacementCommunicationBarringIncomingRuleList($incomingRule);
        $this->incomingRule->setElementName('incomingRule');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringIncomingRuleList $incomingRule
     */
    public function getIncomingRule()
    {
        return $this->incomingRule;
    }

    /**
     * 
     */
    public function setBecomeDefault($becomeDefault = null)
    {
        $this->becomeDefault = new PrimitiveType($becomeDefault);
        $this->becomeDefault->setElementName('becomeDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefault
     */
    public function getBecomeDefault()
    {
        return ($this->becomeDefault)
            ? $this->becomeDefault->getElementValue()
            : null;
    }
}
