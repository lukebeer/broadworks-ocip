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
 * Response to SystemIntelligentNetworkServiceControlGetRequest14.
 */
class SystemIntelligentNetworkServiceControlGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemIntelligentNetworkServiceControlGetResponse14';
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\SystemIntelligentNetworkServiceControlGetResponse14 $response
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
        $this->preAnswerActionTimeoutSeconds->setName('preAnswerActionTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds $preAnswerActionTimeoutSeconds
     */
    public function getPreAnswerActionTimeoutSeconds()
    {
        return ($this->preAnswerActionTimeoutSeconds) ? $this->preAnswerActionTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail = null)
    {
        $this->msgRejectNoVoiceMail = ($msgRejectNoVoiceMail InstanceOf Treatment)
             ? $msgRejectNoVoiceMail
             : new Treatment($msgRejectNoVoiceMail);
        $this->msgRejectNoVoiceMail->setName('msgRejectNoVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRejectNoVoiceMail
     */
    public function getMsgRejectNoVoiceMail()
    {
        return ($this->msgRejectNoVoiceMail) ? $this->msgRejectNoVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgRejectVoiceMail($msgRejectVoiceMail = null)
    {
        $this->msgRejectVoiceMail = ($msgRejectVoiceMail InstanceOf Treatment)
             ? $msgRejectVoiceMail
             : new Treatment($msgRejectVoiceMail);
        $this->msgRejectVoiceMail->setName('msgRejectVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRejectVoiceMail
     */
    public function getMsgRejectVoiceMail()
    {
        return ($this->msgRejectVoiceMail) ? $this->msgRejectVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgPreAnswerWait($msgPreAnswerWait = null)
    {
        $this->msgPreAnswerWait = ($msgPreAnswerWait InstanceOf Treatment)
             ? $msgPreAnswerWait
             : new Treatment($msgPreAnswerWait);
        $this->msgPreAnswerWait->setName('msgPreAnswerWait');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgPreAnswerWait
     */
    public function getMsgPreAnswerWait()
    {
        return ($this->msgPreAnswerWait) ? $this->msgPreAnswerWait->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgBusy($msgBusy = null)
    {
        $this->msgBusy = ($msgBusy InstanceOf Treatment)
             ? $msgBusy
             : new Treatment($msgBusy);
        $this->msgBusy->setName('msgBusy');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgBusy
     */
    public function getMsgBusy()
    {
        return ($this->msgBusy) ? $this->msgBusy->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgRelease($msgRelease = null)
    {
        $this->msgRelease = ($msgRelease InstanceOf Treatment)
             ? $msgRelease
             : new Treatment($msgRelease);
        $this->msgRelease->setName('msgRelease');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgRelease
     */
    public function getMsgRelease()
    {
        return ($this->msgRelease) ? $this->msgRelease->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgNoAnswer($msgNoAnswer = null)
    {
        $this->msgNoAnswer = ($msgNoAnswer InstanceOf Treatment)
             ? $msgNoAnswer
             : new Treatment($msgNoAnswer);
        $this->msgNoAnswer->setName('msgNoAnswer');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgNoAnswer
     */
    public function getMsgNoAnswer()
    {
        return ($this->msgNoAnswer) ? $this->msgNoAnswer->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgOCPReject($msgOCPReject = null)
    {
        $this->msgOCPReject = ($msgOCPReject InstanceOf Treatment)
             ? $msgOCPReject
             : new Treatment($msgOCPReject);
        $this->msgOCPReject->setName('msgOCPReject');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgOCPReject
     */
    public function getMsgOCPReject()
    {
        return ($this->msgOCPReject) ? $this->msgOCPReject->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgForwardLoop($msgForwardLoop = null)
    {
        $this->msgForwardLoop = ($msgForwardLoop InstanceOf Treatment)
             ? $msgForwardLoop
             : new Treatment($msgForwardLoop);
        $this->msgForwardLoop->setName('msgForwardLoop');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgForwardLoop
     */
    public function getMsgForwardLoop()
    {
        return ($this->msgForwardLoop) ? $this->msgForwardLoop->getValue() : null;
    }

    /**
     * 
     */
    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable = null)
    {
        $this->msgTemporarilyUnavailable = ($msgTemporarilyUnavailable InstanceOf Treatment)
             ? $msgTemporarilyUnavailable
             : new Treatment($msgTemporarilyUnavailable);
        $this->msgTemporarilyUnavailable->setName('msgTemporarilyUnavailable');
        return $this;
    }

    /**
     * 
     * @return Treatment $msgTemporarilyUnavailable
     */
    public function getMsgTemporarilyUnavailable()
    {
        return ($this->msgTemporarilyUnavailable) ? $this->msgTemporarilyUnavailable->getValue() : null;
    }
}
