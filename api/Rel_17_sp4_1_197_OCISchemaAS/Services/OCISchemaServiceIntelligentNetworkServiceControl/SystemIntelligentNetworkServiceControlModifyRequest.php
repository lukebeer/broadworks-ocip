<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Treatment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Intelligent Network Service Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemIntelligentNetworkServiceControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemIntelligentNetworkServiceControlModifyRequest';
    protected $preAnswerActionTimeoutSeconds;
    protected $msgRejectNoVoiceMail;
    protected $msgRejectVoiceMail;
    protected $msgPreAnswerWait;
    protected $msgBusy;
    protected $msgRelease;
    protected $msgNoAnswer;
    protected $msgOCPReject;
    protected $msgForwardLoop;
    protected $msgTemporarilyUnavailable;

    public function __construct(
         $preAnswerActionTimeoutSeconds = null,
         $msgRejectNoVoiceMail = null,
         $msgRejectVoiceMail = null,
         $msgPreAnswerWait = null,
         $msgBusy = null,
         $msgRelease = null,
         $msgNoAnswer = null,
         $msgOCPReject = null,
         $msgForwardLoop = null,
         $msgTemporarilyUnavailable = null
    ) {
        $this->setPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds);
        $this->setMsgRejectNoVoiceMail($msgRejectNoVoiceMail);
        $this->setMsgRejectVoiceMail($msgRejectVoiceMail);
        $this->setMsgPreAnswerWait($msgPreAnswerWait);
        $this->setMsgBusy($msgBusy);
        $this->setMsgRelease($msgRelease);
        $this->setMsgNoAnswer($msgNoAnswer);
        $this->setMsgOCPReject($msgOCPReject);
        $this->setMsgForwardLoop($msgForwardLoop);
        $this->setMsgTemporarilyUnavailable($msgTemporarilyUnavailable);
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
    public function setPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds = null)
    {
        $this->preAnswerActionTimeoutSeconds = ($preAnswerActionTimeoutSeconds InstanceOf IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds)
             ? $preAnswerActionTimeoutSeconds
             : new IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds);
        $this->preAnswerActionTimeoutSeconds->setElementName('preAnswerActionTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds $preAnswerActionTimeoutSeconds
     */
    public function getPreAnswerActionTimeoutSeconds()
    {
        return ($this->preAnswerActionTimeoutSeconds)
            ? $this->preAnswerActionTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail = null)
    {
        $this->msgRejectNoVoiceMail = ($msgRejectNoVoiceMail InstanceOf Treatment)
             ? $msgRejectNoVoiceMail
             : new Treatment($msgRejectNoVoiceMail);
        $this->msgRejectNoVoiceMail->setElementName('msgRejectNoVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRejectNoVoiceMail
     */
    public function getMsgRejectNoVoiceMail()
    {
        return ($this->msgRejectNoVoiceMail)
            ? $this->msgRejectNoVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgRejectVoiceMail($msgRejectVoiceMail = null)
    {
        $this->msgRejectVoiceMail = ($msgRejectVoiceMail InstanceOf Treatment)
             ? $msgRejectVoiceMail
             : new Treatment($msgRejectVoiceMail);
        $this->msgRejectVoiceMail->setElementName('msgRejectVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRejectVoiceMail
     */
    public function getMsgRejectVoiceMail()
    {
        return ($this->msgRejectVoiceMail)
            ? $this->msgRejectVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgPreAnswerWait($msgPreAnswerWait = null)
    {
        $this->msgPreAnswerWait = ($msgPreAnswerWait InstanceOf Treatment)
             ? $msgPreAnswerWait
             : new Treatment($msgPreAnswerWait);
        $this->msgPreAnswerWait->setElementName('msgPreAnswerWait');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgPreAnswerWait
     */
    public function getMsgPreAnswerWait()
    {
        return ($this->msgPreAnswerWait)
            ? $this->msgPreAnswerWait->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgBusy($msgBusy = null)
    {
        $this->msgBusy = ($msgBusy InstanceOf Treatment)
             ? $msgBusy
             : new Treatment($msgBusy);
        $this->msgBusy->setElementName('msgBusy');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgBusy
     */
    public function getMsgBusy()
    {
        return ($this->msgBusy)
            ? $this->msgBusy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgRelease($msgRelease = null)
    {
        $this->msgRelease = ($msgRelease InstanceOf Treatment)
             ? $msgRelease
             : new Treatment($msgRelease);
        $this->msgRelease->setElementName('msgRelease');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRelease
     */
    public function getMsgRelease()
    {
        return ($this->msgRelease)
            ? $this->msgRelease->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgNoAnswer($msgNoAnswer = null)
    {
        $this->msgNoAnswer = ($msgNoAnswer InstanceOf Treatment)
             ? $msgNoAnswer
             : new Treatment($msgNoAnswer);
        $this->msgNoAnswer->setElementName('msgNoAnswer');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgNoAnswer
     */
    public function getMsgNoAnswer()
    {
        return ($this->msgNoAnswer)
            ? $this->msgNoAnswer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgOCPReject($msgOCPReject = null)
    {
        $this->msgOCPReject = ($msgOCPReject InstanceOf Treatment)
             ? $msgOCPReject
             : new Treatment($msgOCPReject);
        $this->msgOCPReject->setElementName('msgOCPReject');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgOCPReject
     */
    public function getMsgOCPReject()
    {
        return ($this->msgOCPReject)
            ? $this->msgOCPReject->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgForwardLoop($msgForwardLoop = null)
    {
        $this->msgForwardLoop = ($msgForwardLoop InstanceOf Treatment)
             ? $msgForwardLoop
             : new Treatment($msgForwardLoop);
        $this->msgForwardLoop->setElementName('msgForwardLoop');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgForwardLoop
     */
    public function getMsgForwardLoop()
    {
        return ($this->msgForwardLoop)
            ? $this->msgForwardLoop->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable = null)
    {
        $this->msgTemporarilyUnavailable = ($msgTemporarilyUnavailable InstanceOf Treatment)
             ? $msgTemporarilyUnavailable
             : new Treatment($msgTemporarilyUnavailable);
        $this->msgTemporarilyUnavailable->setElementName('msgTemporarilyUnavailable');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgTemporarilyUnavailable
     */
    public function getMsgTemporarilyUnavailable()
    {
        return ($this->msgTemporarilyUnavailable)
            ? $this->msgTemporarilyUnavailable->getElementValue()
            : null;
    }
}
