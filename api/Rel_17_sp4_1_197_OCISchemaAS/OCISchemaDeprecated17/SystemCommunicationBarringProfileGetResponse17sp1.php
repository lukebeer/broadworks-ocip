<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingRule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $originatingDefaultAction,
             $originatingDefaultTreatmentId=null,
             $originatingDefaultTransferNumber=null,
             $originatingDefaultCallTimeout=null,
             $originatingRule=null,
             $redirectingDefaultAction,
             $redirectingDefaultCallTimeout=null,
             $redirectingRule=null,
             $incomingDefaultAction,
             $incomingDefaultCallTimeout=null,
             CommunicationBarringIncomingRule $incomingRule=null
    ) {
        $this->description                      = new CommunicationBarringProfileDescription($description);
        $this->originatingDefaultAction         = new CommunicationBarringOriginatingAction($originatingDefaultAction);
        $this->originatingDefaultTreatmentId    = new TreatmentId($originatingDefaultTreatmentId);
        $this->originatingDefaultTransferNumber = new OutgoingDN($originatingDefaultTransferNumber);
        $this->originatingDefaultCallTimeout    = new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
        $this->originatingRule                  = $originatingRule;
        $this->redirectingDefaultAction         = new CommunicationBarringRedirectingAction($redirectingDefaultAction);
        $this->redirectingDefaultCallTimeout    = new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
        $this->redirectingRule                  = $redirectingRule;
        $this->incomingDefaultAction            = new CommunicationBarringIncomingAction($incomingDefaultAction);
        $this->incomingDefaultCallTimeout       = new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
        $this->incomingRule                     = $incomingRule;
        $this->args                             = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CommunicationBarringProfileDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setOriginatingDefaultAction($originatingDefaultAction)
    {
        $originatingDefaultAction and $this->originatingDefaultAction = new CommunicationBarringOriginatingAction($originatingDefaultAction);
    }

    public function getOriginatingDefaultAction()
    {
        return (!$this->originatingDefaultAction) ?: $this->originatingDefaultAction->value();
    }

    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId)
    {
        $originatingDefaultTreatmentId and $this->originatingDefaultTreatmentId = new TreatmentId($originatingDefaultTreatmentId);
    }

    public function getOriginatingDefaultTreatmentId()
    {
        return (!$this->originatingDefaultTreatmentId) ?: $this->originatingDefaultTreatmentId->value();
    }

    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber)
    {
        $originatingDefaultTransferNumber and $this->originatingDefaultTransferNumber = new OutgoingDN($originatingDefaultTransferNumber);
    }

    public function getOriginatingDefaultTransferNumber()
    {
        return (!$this->originatingDefaultTransferNumber) ?: $this->originatingDefaultTransferNumber->value();
    }

    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout)
    {
        $originatingDefaultCallTimeout and $this->originatingDefaultCallTimeout = new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
    }

    public function getOriginatingDefaultCallTimeout()
    {
        return (!$this->originatingDefaultCallTimeout) ?: $this->originatingDefaultCallTimeout->value();
    }

    public function setOriginatingRule($originatingRule)
    {
        $originatingRule and $this->originatingRule = new CommunicationBarringOriginatingRule($originatingRule);
    }

    public function getOriginatingRule()
    {
        return (!$this->originatingRule) ?: $this->originatingRule->value();
    }

    public function setRedirectingDefaultAction($redirectingDefaultAction)
    {
        $redirectingDefaultAction and $this->redirectingDefaultAction = new CommunicationBarringRedirectingAction($redirectingDefaultAction);
    }

    public function getRedirectingDefaultAction()
    {
        return (!$this->redirectingDefaultAction) ?: $this->redirectingDefaultAction->value();
    }

    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout)
    {
        $redirectingDefaultCallTimeout and $this->redirectingDefaultCallTimeout = new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
    }

    public function getRedirectingDefaultCallTimeout()
    {
        return (!$this->redirectingDefaultCallTimeout) ?: $this->redirectingDefaultCallTimeout->value();
    }

    public function setRedirectingRule($redirectingRule)
    {
        $redirectingRule and $this->redirectingRule = new CommunicationBarringRedirectingRule($redirectingRule);
    }

    public function getRedirectingRule()
    {
        return (!$this->redirectingRule) ?: $this->redirectingRule->value();
    }

    public function setIncomingDefaultAction($incomingDefaultAction)
    {
        $incomingDefaultAction and $this->incomingDefaultAction = new CommunicationBarringIncomingAction($incomingDefaultAction);
    }

    public function getIncomingDefaultAction()
    {
        return (!$this->incomingDefaultAction) ?: $this->incomingDefaultAction->value();
    }

    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout)
    {
        $incomingDefaultCallTimeout and $this->incomingDefaultCallTimeout = new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
    }

    public function getIncomingDefaultCallTimeout()
    {
        return (!$this->incomingDefaultCallTimeout) ?: $this->incomingDefaultCallTimeout->value();
    }

    public function setIncomingRule($incomingRule)
    {
        $incomingRule and $this->incomingRule = new CommunicationBarringIncomingRule($incomingRule);
    }

    public function getIncomingRule()
    {
        return (!$this->incomingRule) ?: $this->incomingRule->value();
    }
}
