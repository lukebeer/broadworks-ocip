<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringOriginatingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringRedirectingRule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemCommunicationBarringProfileGetRequest17sp1.
 *          The response contains the Communication Barring Profile information.
 *          The incoming rules are returned in ascending priority order.
 *          The following elements are only used in HSS data mode:
 *  	   incomingDefaultAction
 *  	   incomingDefaultCallTimeout
 *  	   incomingRule
 */
class SystemCommunicationBarringProfileGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringProfileGetResponse17sp1';
    protected $description;
    protected $originatingDefaultAction;
    protected $originatingDefaultTreatmentId;
    protected $originatingDefaultTransferNumber;
    protected $originatingDefaultCallTimeout;
    protected $originatingRule;
    protected $redirectingDefaultAction;
    protected $redirectingDefaultCallTimeout;
    protected $redirectingRule;
    protected $incomingDefaultAction;
    protected $incomingDefaultCallTimeout;
    protected $incomingRule;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemCommunicationBarringProfileGetResponse17sp1 $response
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
    public function setOriginatingRule(CommunicationBarringOriginatingRule $originatingRule = null)
    {
        $this->originatingRule = ($originatingRule InstanceOf CommunicationBarringOriginatingRule)
             ? $originatingRule
             : new CommunicationBarringOriginatingRule($originatingRule);
        $this->originatingRule->setElementName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingRule $originatingRule
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
    public function setRedirectingRule(CommunicationBarringRedirectingRule $redirectingRule = null)
    {
        $this->redirectingRule = ($redirectingRule InstanceOf CommunicationBarringRedirectingRule)
             ? $redirectingRule
             : new CommunicationBarringRedirectingRule($redirectingRule);
        $this->redirectingRule->setElementName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingRule $redirectingRule
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
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
}
