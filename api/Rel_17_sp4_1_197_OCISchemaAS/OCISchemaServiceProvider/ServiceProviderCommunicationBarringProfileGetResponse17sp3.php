<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalRedirectingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalOriginatingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallMeNowAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the ServiceProviderCommunicationBarringProfileGetRequest17sp3.
 *         The response contains the Communication Barring Profile information.
 *         The incoming, originating, redirecting and call me now rules are returned in ascending priority order.
 *       The following elements are only used in AS data mode:
 *            callMeNowDefaultAction
 *            callMeNowDefaultCallTimeout
 *            callMeNowRule
 */
class ServiceProviderCommunicationBarringProfileGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetResponse17sp3';
    public    $name                             = __CLASS__;
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
    protected $isDefault                        = null;


    /**
     * Communication Barring Profile description
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringProfileDescription)
             ? $description
             : new CommunicationBarringProfileDescription($description);
    }

    /**
     * Communication Barring Profile description
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Possible originating actions for Communication Barring.
     */
    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction($originatingDefaultAction);
    }

    /**
     * Possible originating actions for Communication Barring.
     */
    public function getOriginatingDefaultAction()
    {
        return (!$this->originatingDefaultAction) ?: $this->originatingDefaultAction->getValue();
    }

    /**
     * Configurable Treatment Name
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        $this->originatingDefaultTreatmentId = ($originatingDefaultTreatmentId InstanceOf TreatmentId)
             ? $originatingDefaultTreatmentId
             : new TreatmentId($originatingDefaultTreatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return (!$this->originatingDefaultTreatmentId) ?: $this->originatingDefaultTreatmentId->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        $this->originatingDefaultTransferNumber = ($originatingDefaultTransferNumber InstanceOf OutgoingDN)
             ? $originatingDefaultTransferNumber
             : new OutgoingDN($originatingDefaultTransferNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return (!$this->originatingDefaultTransferNumber) ?: $this->originatingDefaultTransferNumber->getValue();
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout = null)
    {
        $this->originatingDefaultCallTimeout = ($originatingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $originatingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return (!$this->originatingDefaultCallTimeout) ?: $this->originatingDefaultCallTimeout->getValue();
    }

    /**
     * Service Provider Communication Barring Hierarchical Originating Rule
     */
    public function setOriginatingRule(ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule = null)
    {
        $this->originatingRule = ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule;
    }

    /**
     * Service Provider Communication Barring Hierarchical Originating Rule
     */
    public function getOriginatingRule()
    {
        return (!$this->originatingRule) ?: $this->originatingRule->getValue();
    }

    /**
     * Possible redirecting actions for Communication Barring.
     */
    public function setRedirectingDefaultAction($redirectingDefaultAction = null)
    {
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction($redirectingDefaultAction);
    }

    /**
     * Possible redirecting actions for Communication Barring.
     */
    public function getRedirectingDefaultAction()
    {
        return (!$this->redirectingDefaultAction) ?: $this->redirectingDefaultAction->getValue();
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout = null)
    {
        $this->redirectingDefaultCallTimeout = ($redirectingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $redirectingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return (!$this->redirectingDefaultCallTimeout) ?: $this->redirectingDefaultCallTimeout->getValue();
    }

    /**
     * Service Provider Communication Barring Hierarchical Redirecting Rule
     */
    public function setRedirectingRule(ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule = null)
    {
        $this->redirectingRule = ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule;
    }

    /**
     * Service Provider Communication Barring Hierarchical Redirecting Rule
     */
    public function getRedirectingRule()
    {
        return (!$this->redirectingRule) ?: $this->redirectingRule->getValue();
    }

    /**
     * Possible Call Me Now actions for Communication Barring.
     */
    public function setCallMeNowDefaultAction($callMeNowDefaultAction = null)
    {
        $this->callMeNowDefaultAction = ($callMeNowDefaultAction InstanceOf CommunicationBarringCallMeNowAction)
             ? $callMeNowDefaultAction
             : new CommunicationBarringCallMeNowAction($callMeNowDefaultAction);
    }

    /**
     * Possible Call Me Now actions for Communication Barring.
     */
    public function getCallMeNowDefaultAction()
    {
        return (!$this->callMeNowDefaultAction) ?: $this->callMeNowDefaultAction->getValue();
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout = null)
    {
        $this->callMeNowDefaultCallTimeout = ($callMeNowDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $callMeNowDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($callMeNowDefaultCallTimeout);
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return (!$this->callMeNowDefaultCallTimeout) ?: $this->callMeNowDefaultCallTimeout->getValue();
    }

    /**
     * Service Provider Communication Barring Hierarchical Call Me Now Rule
     */
    public function setCallMeNowRule(ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $callMeNowRule = null)
    {
        $this->callMeNowRule = ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $callMeNowRule;
    }

    /**
     * Service Provider Communication Barring Hierarchical Call Me Now Rule
     */
    public function getCallMeNowRule()
    {
        return (!$this->callMeNowRule) ?: $this->callMeNowRule->getValue();
    }

    /**
     * Possible incoming call actions for Communication Barring.
     */
    public function setIncomingDefaultAction($incomingDefaultAction = null)
    {
        $this->incomingDefaultAction = ($incomingDefaultAction InstanceOf CommunicationBarringIncomingAction)
             ? $incomingDefaultAction
             : new CommunicationBarringIncomingAction($incomingDefaultAction);
    }

    /**
     * Possible incoming call actions for Communication Barring.
     */
    public function getIncomingDefaultAction()
    {
        return (!$this->incomingDefaultAction) ?: $this->incomingDefaultAction->getValue();
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout = null)
    {
        $this->incomingDefaultCallTimeout = ($incomingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $incomingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
    }

    /**
     * Time to wait before shutting down a call.
     */
    public function getIncomingDefaultCallTimeout()
    {
        return (!$this->incomingDefaultCallTimeout) ?: $this->incomingDefaultCallTimeout->getValue();
    }

    /**
     * Communication Barring Incoming Rule
     */
    public function setIncomingRule(CommunicationBarringIncomingRule $incomingRule = null)
    {
        $this->incomingRule = CommunicationBarringIncomingRule $incomingRule;
    }

    /**
     * Communication Barring Incoming Rule
     */
    public function getIncomingRule()
    {
        return (!$this->incomingRule) ?: $this->incomingRule->getValue();
    }

    /**
     * 
     */
    public function setIsDefault($isDefault = null)
    {
        $this->isDefault = (boolean) $isDefault;
    }

    /**
     * 
     */
    public function getIsDefault()
    {
        return (!$this->isDefault) ?: $this->isDefault->getValue();
    }
}