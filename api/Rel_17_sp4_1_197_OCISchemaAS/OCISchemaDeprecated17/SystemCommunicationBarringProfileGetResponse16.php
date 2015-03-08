<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringOriginatingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringRedirectingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemCommunicationBarringProfileGetRequest16.
 *         The response contains the Communication Barring Profile information.
 */
class SystemCommunicationBarringProfileGetResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemCommunicationBarringProfileGetResponse16';
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
     * Communication Barring Originating Rule
     */
    public function setOriginatingRule(CommunicationBarringOriginatingRule $originatingRule = null)
    {
        $this->originatingRule = CommunicationBarringOriginatingRule $originatingRule;
    }

    /**
     * Communication Barring Originating Rule
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
     * Communication Barring Redirecting Rule
     */
    public function setRedirectingRule(CommunicationBarringRedirectingRule $redirectingRule = null)
    {
        $this->redirectingRule = CommunicationBarringRedirectingRule $redirectingRule;
    }

    /**
     * Communication Barring Redirecting Rule
     */
    public function getRedirectingRule()
    {
        return (!$this->redirectingRule) ?: $this->redirectingRule->getValue();
    }
}
