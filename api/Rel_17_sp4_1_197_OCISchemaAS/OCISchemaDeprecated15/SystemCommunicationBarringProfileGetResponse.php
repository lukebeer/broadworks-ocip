<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringRedirectingAction15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringOriginatingAction15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringOriginatingRule15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringRedirectingRule15sp2;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemCommunicationBarringProfileGetRequest.
 *         The response contains the Communication Barring Profile information.
 *         Replaced by: SystemCommunicationBarringProfileGetResponse16
 */
class SystemCommunicationBarringProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $description                       = null;
    protected $originatingDefaultAction          = null;
    protected $originatingDefaultTreatmentId     = null;
    protected $originatingDefaultTransferNumber  = null;
    protected $originatingRule                   = null;
    protected $redirectingDefaultAction          = null;
    protected $redirectingRule                   = null;


    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringProfileDescription)
             ? $description
             : new CommunicationBarringProfileDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction15sp2)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction15sp2($originatingDefaultAction);
    }

    public function getOriginatingDefaultAction()
    {
        return (!$this->originatingDefaultAction) ?: $this->originatingDefaultAction->value();
    }

    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        $this->originatingDefaultTreatmentId = ($originatingDefaultTreatmentId InstanceOf TreatmentId)
             ? $originatingDefaultTreatmentId
             : new TreatmentId($originatingDefaultTreatmentId);
    }

    public function getOriginatingDefaultTreatmentId()
    {
        return (!$this->originatingDefaultTreatmentId) ?: $this->originatingDefaultTreatmentId->value();
    }

    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        $this->originatingDefaultTransferNumber = ($originatingDefaultTransferNumber InstanceOf OutgoingDN)
             ? $originatingDefaultTransferNumber
             : new OutgoingDN($originatingDefaultTransferNumber);
    }

    public function getOriginatingDefaultTransferNumber()
    {
        return (!$this->originatingDefaultTransferNumber) ?: $this->originatingDefaultTransferNumber->value();
    }

    public function setOriginatingRule(CommunicationBarringOriginatingRule15sp2 $originatingRule = null)
    {
    }

    public function getOriginatingRule()
    {
        return (!$this->originatingRule) ?: $this->originatingRule->value();
    }

    public function setRedirectingDefaultAction($redirectingDefaultAction = null)
    {
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction15sp2)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction15sp2($redirectingDefaultAction);
    }

    public function getRedirectingDefaultAction()
    {
        return (!$this->redirectingDefaultAction) ?: $this->redirectingDefaultAction->value();
    }

    public function setRedirectingRule(CommunicationBarringRedirectingRule15sp2 $redirectingRule = null)
    {
    }

    public function getRedirectingRule()
    {
        return (!$this->redirectingRule) ?: $this->redirectingRule->value();
    }
}
