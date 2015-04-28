<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalOriginatingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalRedirectingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalCallMeNowRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallMeNowAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'ServiceProviderCommunicationBarringProfileGetResponse17sp3';
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
    protected $isDefault;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetResponse17sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setOriginatingRule(ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule = null)
    {
        $this->originatingRule = ($originatingRule InstanceOf ServiceProviderCommunicationBarringHierarchicalOriginatingRule)
             ? $originatingRule
             : new ServiceProviderCommunicationBarringHierarchicalOriginatingRule($originatingRule);
        $this->originatingRule->setElementName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule
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
    public function setRedirectingRule(ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule = null)
    {
        $this->redirectingRule = ($redirectingRule InstanceOf ServiceProviderCommunicationBarringHierarchicalRedirectingRule)
             ? $redirectingRule
             : new ServiceProviderCommunicationBarringHierarchicalRedirectingRule($redirectingRule);
        $this->redirectingRule->setElementName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule
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
    public function setCallMeNowRule(ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $callMeNowRule = null)
    {
        $this->callMeNowRule = ($callMeNowRule InstanceOf ServiceProviderCommunicationBarringHierarchicalCallMeNowRule)
             ? $callMeNowRule
             : new ServiceProviderCommunicationBarringHierarchicalCallMeNowRule($callMeNowRule);
        $this->callMeNowRule->setElementName('callMeNowRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderCommunicationBarringHierarchicalCallMeNowRule $callMeNowRule
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
    public function setIncomingRule(CommunicationBarringIncomingRule $incomingRule = null)
    {
        $this->incomingRule = ($incomingRule InstanceOf CommunicationBarringIncomingRule)
             ? $incomingRule
             : new CommunicationBarringIncomingRule($incomingRule);
        $this->incomingRule->setElementName('incomingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringIncomingRule $incomingRule
     */
    public function getIncomingRule()
    {
        return $this->incomingRule;
    }

    /**
     * 
     */
    public function setIsDefault($isDefault = null)
    {
        $this->isDefault = new PrimitiveType($isDefault);
        $this->isDefault->setElementName('isDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $isDefault
     */
    public function getIsDefault()
    {
        return ($this->isDefault)
            ? $this->isDefault->getElementValue()
            : null;
    }
}
