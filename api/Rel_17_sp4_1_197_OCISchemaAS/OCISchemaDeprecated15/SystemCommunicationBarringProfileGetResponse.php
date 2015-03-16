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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemCommunicationBarringProfileGetRequest.
 *         The response contains the Communication Barring Profile information.
 *         Replaced by: SystemCommunicationBarringProfileGetResponse16
 */
class SystemCommunicationBarringProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCommunicationBarringProfileGetResponse';
    protected $description;
    protected $originatingDefaultAction;
    protected $originatingDefaultTreatmentId;
    protected $originatingDefaultTransferNumber;
    protected $originatingRule;
    protected $redirectingDefaultAction;
    protected $redirectingRule;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemCommunicationBarringProfileGetResponse $response
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
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction15sp2)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction15sp2($originatingDefaultAction);
        $this->originatingDefaultAction->setName('originatingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingAction15sp2 $originatingDefaultAction
     */
    public function getOriginatingDefaultAction()
    {
        return ($this->originatingDefaultAction) ? $this->originatingDefaultAction->getValue() : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
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
        return ($this->originatingDefaultTreatmentId) ? $this->originatingDefaultTreatmentId->getValue() : null;
    }

    /**
     * 
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
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
        return ($this->originatingDefaultTransferNumber) ? $this->originatingDefaultTransferNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setOriginatingRule(CommunicationBarringOriginatingRule15sp2 $originatingRule = null)
    {
        $this->originatingRule = ($originatingRule InstanceOf CommunicationBarringOriginatingRule15sp2)
             ? $originatingRule
             : new CommunicationBarringOriginatingRule15sp2($originatingRule);
        $this->originatingRule->setName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingRule15sp2 $originatingRule
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
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction15sp2)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction15sp2($redirectingDefaultAction);
        $this->redirectingDefaultAction->setName('redirectingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingAction15sp2 $redirectingDefaultAction
     */
    public function getRedirectingDefaultAction()
    {
        return ($this->redirectingDefaultAction) ? $this->redirectingDefaultAction->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectingRule(CommunicationBarringRedirectingRule15sp2 $redirectingRule = null)
    {
        $this->redirectingRule = ($redirectingRule InstanceOf CommunicationBarringRedirectingRule15sp2)
             ? $redirectingRule
             : new CommunicationBarringRedirectingRule15sp2($redirectingRule);
        $this->redirectingRule->setName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingRule15sp2 $redirectingRule
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }
}
