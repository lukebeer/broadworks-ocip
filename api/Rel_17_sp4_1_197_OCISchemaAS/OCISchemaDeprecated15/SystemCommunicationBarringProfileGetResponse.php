<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingRule15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingRule15sp2;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemCommunicationBarringProfileGetRequest.
 *         The response contains the Communication Barring Profile information.
 *         Replaced by: SystemCommunicationBarringProfileGetResponse16
 */
class SystemCommunicationBarringProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $originatingDefaultAction,
             $originatingDefaultTreatmentId=null,
             $originatingDefaultTransferNumber=null,
             $originatingRule=null,
             $redirectingDefaultAction,
             $redirectingRule=null
    ) {
        $this->description                      = new CommunicationBarringProfileDescription($description);
        $this->originatingDefaultAction         = $originatingDefaultAction;
        $this->originatingDefaultTreatmentId    = new TreatmentId($originatingDefaultTreatmentId);
        $this->originatingDefaultTransferNumber = new OutgoingDN($originatingDefaultTransferNumber);
        $this->originatingRule                  = $originatingRule;
        $this->redirectingDefaultAction         = $redirectingDefaultAction;
        $this->redirectingRule                  = $redirectingRule;
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
        $originatingDefaultAction and $this->originatingDefaultAction = new CommunicationBarringOriginatingAction15sp2($originatingDefaultAction);
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

    public function setOriginatingRule($originatingRule)
    {
        $originatingRule and $this->originatingRule = new CommunicationBarringOriginatingRule15sp2($originatingRule);
    }

    public function getOriginatingRule()
    {
        return (!$this->originatingRule) ?: $this->originatingRule->value();
    }

    public function setRedirectingDefaultAction($redirectingDefaultAction)
    {
        $redirectingDefaultAction and $this->redirectingDefaultAction = new CommunicationBarringRedirectingAction15sp2($redirectingDefaultAction);
    }

    public function getRedirectingDefaultAction()
    {
        return (!$this->redirectingDefaultAction) ?: $this->redirectingDefaultAction->value();
    }

    public function setRedirectingRule($redirectingRule)
    {
        $redirectingRule and $this->redirectingRule = new CommunicationBarringRedirectingRule15sp2($redirectingRule);
    }

    public function getRedirectingRule()
    {
        return (!$this->redirectingRule) ?: $this->redirectingRule->value();
    }
}
