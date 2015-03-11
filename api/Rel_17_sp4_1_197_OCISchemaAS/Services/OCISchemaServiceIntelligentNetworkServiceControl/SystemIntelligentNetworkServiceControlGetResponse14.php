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
    public    $name                          = 'SystemIntelligentNetworkServiceControlGetResponse14';
    protected $preAnswerActionTimeoutSeconds = null;
    protected $msgRejectNoVoiceMail          = null;
    protected $msgRejectVoiceMail            = null;
    protected $msgPreAnswerWait              = null;
    protected $msgBusy                       = null;
    protected $msgRelease                    = null;
    protected $msgNoAnswer                   = null;
    protected $msgOCPReject                  = null;
    protected $msgForwardLoop                = null;
    protected $msgTemporarilyUnavailable     = null;

    /**
     * @return SystemIntelligentNetworkServiceControlGetResponse14
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
        if (!$preAnswerActionTimeoutSeconds) return $this;
        $this->preAnswerActionTimeoutSeconds = ($preAnswerActionTimeoutSeconds InstanceOf IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds)
             ? $preAnswerActionTimeoutSeconds
             : new IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds);
        $this->preAnswerActionTimeoutSeconds->setName('preAnswerActionTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds
     */
    public function getPreAnswerActionTimeoutSeconds()
    {
        return $this->preAnswerActionTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail = null)
    {
        if (!$msgRejectNoVoiceMail) return $this;
        $this->msgRejectNoVoiceMail = ($msgRejectNoVoiceMail InstanceOf Treatment)
             ? $msgRejectNoVoiceMail
             : new Treatment($msgRejectNoVoiceMail);
        $this->msgRejectNoVoiceMail->setName('msgRejectNoVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgRejectNoVoiceMail()
    {
        return $this->msgRejectNoVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setMsgRejectVoiceMail($msgRejectVoiceMail = null)
    {
        if (!$msgRejectVoiceMail) return $this;
        $this->msgRejectVoiceMail = ($msgRejectVoiceMail InstanceOf Treatment)
             ? $msgRejectVoiceMail
             : new Treatment($msgRejectVoiceMail);
        $this->msgRejectVoiceMail->setName('msgRejectVoiceMail');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgRejectVoiceMail()
    {
        return $this->msgRejectVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setMsgPreAnswerWait($msgPreAnswerWait = null)
    {
        if (!$msgPreAnswerWait) return $this;
        $this->msgPreAnswerWait = ($msgPreAnswerWait InstanceOf Treatment)
             ? $msgPreAnswerWait
             : new Treatment($msgPreAnswerWait);
        $this->msgPreAnswerWait->setName('msgPreAnswerWait');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgPreAnswerWait()
    {
        return $this->msgPreAnswerWait->getValue();
    }

    /**
     * 
     */
    public function setMsgBusy($msgBusy = null)
    {
        if (!$msgBusy) return $this;
        $this->msgBusy = ($msgBusy InstanceOf Treatment)
             ? $msgBusy
             : new Treatment($msgBusy);
        $this->msgBusy->setName('msgBusy');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgBusy()
    {
        return $this->msgBusy->getValue();
    }

    /**
     * 
     */
    public function setMsgRelease($msgRelease = null)
    {
        if (!$msgRelease) return $this;
        $this->msgRelease = ($msgRelease InstanceOf Treatment)
             ? $msgRelease
             : new Treatment($msgRelease);
        $this->msgRelease->setName('msgRelease');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgRelease()
    {
        return $this->msgRelease->getValue();
    }

    /**
     * 
     */
    public function setMsgNoAnswer($msgNoAnswer = null)
    {
        if (!$msgNoAnswer) return $this;
        $this->msgNoAnswer = ($msgNoAnswer InstanceOf Treatment)
             ? $msgNoAnswer
             : new Treatment($msgNoAnswer);
        $this->msgNoAnswer->setName('msgNoAnswer');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgNoAnswer()
    {
        return $this->msgNoAnswer->getValue();
    }

    /**
     * 
     */
    public function setMsgOCPReject($msgOCPReject = null)
    {
        if (!$msgOCPReject) return $this;
        $this->msgOCPReject = ($msgOCPReject InstanceOf Treatment)
             ? $msgOCPReject
             : new Treatment($msgOCPReject);
        $this->msgOCPReject->setName('msgOCPReject');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgOCPReject()
    {
        return $this->msgOCPReject->getValue();
    }

    /**
     * 
     */
    public function setMsgForwardLoop($msgForwardLoop = null)
    {
        if (!$msgForwardLoop) return $this;
        $this->msgForwardLoop = ($msgForwardLoop InstanceOf Treatment)
             ? $msgForwardLoop
             : new Treatment($msgForwardLoop);
        $this->msgForwardLoop->setName('msgForwardLoop');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgForwardLoop()
    {
        return $this->msgForwardLoop->getValue();
    }

    /**
     * 
     */
    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable = null)
    {
        if (!$msgTemporarilyUnavailable) return $this;
        $this->msgTemporarilyUnavailable = ($msgTemporarilyUnavailable InstanceOf Treatment)
             ? $msgTemporarilyUnavailable
             : new Treatment($msgTemporarilyUnavailable);
        $this->msgTemporarilyUnavailable->setName('msgTemporarilyUnavailable');
        return $this;
    }

    /**
     * 
     * @return Treatment
     */
    public function getMsgTemporarilyUnavailable()
    {
        return $this->msgTemporarilyUnavailable->getValue();
    }
}
