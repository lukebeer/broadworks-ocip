<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringIncomingRuleList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallMeNowAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                             = 'ServiceProviderCommunicationBarringProfileModifyRequest';
    protected $serviceProviderId                = null;
    protected $name                             = null;
    protected $newName                          = null;
    protected $description                      = null;
    protected $originatingDefaultAction         = null;
    protected $originatingDefaultTreatmentId    = null;
    protected $originatingDefaultTransferNumber = null;
    protected $originatingDefaultCallTimeout    = null;
    protected $originatingRule                  = null;
    protected $redirectingDefaultAction         = null;
    protected $redirectingDefaultCallTimeout    = null;
    protected $redirectingRule                  = null;
    protected $callMeNowDefaultAction           = null;
    protected $callMeNowDefaultCallTimeout      = null;
    protected $callMeNowRule                    = null;
    protected $incomingDefaultAction            = null;
    protected $incomingDefaultCallTimeout       = null;
    protected $incomingRule                     = null;
    protected $becomeDefault                    = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $newName = null,
         $description = null,
         $originatingDefaultAction = null,
         $originatingDefaultTreatmentId = null,
         $originatingDefaultTransferNumber = null,
         $originatingDefaultCallTimeout = null,
         ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList $originatingRule = null,
         $redirectingDefaultAction = null,
         $redirectingDefaultCallTimeout = null,
         ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList $redirectingRule = null,
         $callMeNowDefaultAction = null,
         $callMeNowDefaultCallTimeout = null,
         ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList $callMeNowRule = null,
         $incomingDefaultAction = null,
         $incomingDefaultCallTimeout = null,
         ReplacementCommunicationBarringIncomingRuleList $incomingRule = null,
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CommunicationBarringProfileName)
             ? $name
             : new CommunicationBarringProfileName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf CommunicationBarringProfileName)
             ? $newName
             : new CommunicationBarringProfileName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CommunicationBarringProfileDescription)
             ? $description
             : new CommunicationBarringProfileDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        if (!$originatingDefaultAction) return $this;
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction($originatingDefaultAction);
        $this->originatingDefaultAction->setName('originatingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingAction $originatingDefaultAction
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        if (!$originatingDefaultTreatmentId) return $this;
        $this->originatingDefaultTreatmentId = ($originatingDefaultTreatmentId InstanceOf TreatmentId)
             ? $originatingDefaultTreatmentId
             : new TreatmentId($originatingDefaultTreatmentId);
        $this->originatingDefaultTreatmentId->setName('originatingDefaultTreatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $originatingDefaultTreatmentId
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        if (!$originatingDefaultTransferNumber) return $this;
        $this->originatingDefaultTransferNumber = ($originatingDefaultTransferNumber InstanceOf OutgoingDN)
             ? $originatingDefaultTransferNumber
             : new OutgoingDN($originatingDefaultTransferNumber);
        $this->originatingDefaultTransferNumber->setName('originatingDefaultTransferNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $originatingDefaultTransferNumber
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout = null)
    {
        if (!$originatingDefaultCallTimeout) return $this;
        $this->originatingDefaultCallTimeout = ($originatingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $originatingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
        $this->originatingDefaultCallTimeout->setName('originatingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $originatingDefaultCallTimeout
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setOriginatingRule(ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList $originatingRule = null)
    {
        if (!$originatingRule) return $this;
        $this->originatingRule = $originatingRule;
        $this->originatingRule->setName('originatingRule');
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
        if (!$redirectingDefaultAction) return $this;
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction($redirectingDefaultAction);
        $this->redirectingDefaultAction->setName('redirectingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingAction $redirectingDefaultAction
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout = null)
    {
        if (!$redirectingDefaultCallTimeout) return $this;
        $this->redirectingDefaultCallTimeout = ($redirectingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $redirectingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
        $this->redirectingDefaultCallTimeout->setName('redirectingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $redirectingDefaultCallTimeout
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setRedirectingRule(ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList $redirectingRule = null)
    {
        if (!$redirectingRule) return $this;
        $this->redirectingRule = $redirectingRule;
        $this->redirectingRule->setName('redirectingRule');
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
        if (!$callMeNowDefaultAction) return $this;
        $this->callMeNowDefaultAction = ($callMeNowDefaultAction InstanceOf CommunicationBarringCallMeNowAction)
             ? $callMeNowDefaultAction
             : new CommunicationBarringCallMeNowAction($callMeNowDefaultAction);
        $this->callMeNowDefaultAction->setName('callMeNowDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallMeNowAction $callMeNowDefaultAction
     */
    public function getCallMeNowDefaultAction()
    {
        return $this->callMeNowDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout = null)
    {
        if (!$callMeNowDefaultCallTimeout) return $this;
        $this->callMeNowDefaultCallTimeout = ($callMeNowDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $callMeNowDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($callMeNowDefaultCallTimeout);
        $this->callMeNowDefaultCallTimeout->setName('callMeNowDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $callMeNowDefaultCallTimeout
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return $this->callMeNowDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setCallMeNowRule(ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList $callMeNowRule = null)
    {
        if (!$callMeNowRule) return $this;
        $this->callMeNowRule = $callMeNowRule;
        $this->callMeNowRule->setName('callMeNowRule');
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
        if (!$incomingDefaultAction) return $this;
        $this->incomingDefaultAction = ($incomingDefaultAction InstanceOf CommunicationBarringIncomingAction)
             ? $incomingDefaultAction
             : new CommunicationBarringIncomingAction($incomingDefaultAction);
        $this->incomingDefaultAction->setName('incomingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringIncomingAction $incomingDefaultAction
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout = null)
    {
        if (!$incomingDefaultCallTimeout) return $this;
        $this->incomingDefaultCallTimeout = ($incomingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $incomingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
        $this->incomingDefaultCallTimeout->setName('incomingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds $incomingDefaultCallTimeout
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setIncomingRule(ReplacementCommunicationBarringIncomingRuleList $incomingRule = null)
    {
        if (!$incomingRule) return $this;
        $this->incomingRule = $incomingRule;
        $this->incomingRule->setName('incomingRule');
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
        if (!$becomeDefault) return $this;
        $this->becomeDefault = new PrimitiveType($becomeDefault);
        $this->becomeDefault->setName('becomeDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefault
     */
    public function getBecomeDefault()
    {
        return $this->becomeDefault->getValue();
    }
}
