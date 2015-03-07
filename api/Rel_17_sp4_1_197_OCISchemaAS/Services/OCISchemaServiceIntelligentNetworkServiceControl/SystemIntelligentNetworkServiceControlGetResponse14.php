<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Treatment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemIntelligentNetworkServiceControlGetRequest14.
 */
class SystemIntelligentNetworkServiceControlGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $preAnswerActionTimeoutSeconds  = null;
    protected $msgRejectNoVoiceMail           = null;
    protected $msgRejectVoiceMail             = null;
    protected $msgPreAnswerWait               = null;
    protected $msgBusy                        = null;
    protected $msgRelease                     = null;
    protected $msgNoAnswer                    = null;
    protected $msgOCPReject                   = null;
    protected $msgForwardLoop                 = null;
    protected $msgTemporarilyUnavailable      = null;


    public function setPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds = null)
    {
        $this->preAnswerActionTimeoutSeconds = ($preAnswerActionTimeoutSeconds InstanceOf IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds)
             ? $preAnswerActionTimeoutSeconds
             : new IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds);
    }

    public function getPreAnswerActionTimeoutSeconds()
    {
        return (!$this->preAnswerActionTimeoutSeconds) ?: $this->preAnswerActionTimeoutSeconds->value();
    }

    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail = null)
    {
        $this->msgRejectNoVoiceMail = ($msgRejectNoVoiceMail InstanceOf Treatment)
             ? $msgRejectNoVoiceMail
             : new Treatment($msgRejectNoVoiceMail);
    }

    public function getMsgRejectNoVoiceMail()
    {
        return (!$this->msgRejectNoVoiceMail) ?: $this->msgRejectNoVoiceMail->value();
    }

    public function setMsgRejectVoiceMail($msgRejectVoiceMail = null)
    {
        $this->msgRejectVoiceMail = ($msgRejectVoiceMail InstanceOf Treatment)
             ? $msgRejectVoiceMail
             : new Treatment($msgRejectVoiceMail);
    }

    public function getMsgRejectVoiceMail()
    {
        return (!$this->msgRejectVoiceMail) ?: $this->msgRejectVoiceMail->value();
    }

    public function setMsgPreAnswerWait($msgPreAnswerWait = null)
    {
        $this->msgPreAnswerWait = ($msgPreAnswerWait InstanceOf Treatment)
             ? $msgPreAnswerWait
             : new Treatment($msgPreAnswerWait);
    }

    public function getMsgPreAnswerWait()
    {
        return (!$this->msgPreAnswerWait) ?: $this->msgPreAnswerWait->value();
    }

    public function setMsgBusy($msgBusy = null)
    {
        $this->msgBusy = ($msgBusy InstanceOf Treatment)
             ? $msgBusy
             : new Treatment($msgBusy);
    }

    public function getMsgBusy()
    {
        return (!$this->msgBusy) ?: $this->msgBusy->value();
    }

    public function setMsgRelease($msgRelease = null)
    {
        $this->msgRelease = ($msgRelease InstanceOf Treatment)
             ? $msgRelease
             : new Treatment($msgRelease);
    }

    public function getMsgRelease()
    {
        return (!$this->msgRelease) ?: $this->msgRelease->value();
    }

    public function setMsgNoAnswer($msgNoAnswer = null)
    {
        $this->msgNoAnswer = ($msgNoAnswer InstanceOf Treatment)
             ? $msgNoAnswer
             : new Treatment($msgNoAnswer);
    }

    public function getMsgNoAnswer()
    {
        return (!$this->msgNoAnswer) ?: $this->msgNoAnswer->value();
    }

    public function setMsgOCPReject($msgOCPReject = null)
    {
        $this->msgOCPReject = ($msgOCPReject InstanceOf Treatment)
             ? $msgOCPReject
             : new Treatment($msgOCPReject);
    }

    public function getMsgOCPReject()
    {
        return (!$this->msgOCPReject) ?: $this->msgOCPReject->value();
    }

    public function setMsgForwardLoop($msgForwardLoop = null)
    {
        $this->msgForwardLoop = ($msgForwardLoop InstanceOf Treatment)
             ? $msgForwardLoop
             : new Treatment($msgForwardLoop);
    }

    public function getMsgForwardLoop()
    {
        return (!$this->msgForwardLoop) ?: $this->msgForwardLoop->value();
    }

    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable = null)
    {
        $this->msgTemporarilyUnavailable = ($msgTemporarilyUnavailable InstanceOf Treatment)
             ? $msgTemporarilyUnavailable
             : new Treatment($msgTemporarilyUnavailable);
    }

    public function getMsgTemporarilyUnavailable()
    {
        return (!$this->msgTemporarilyUnavailable) ?: $this->msgTemporarilyUnavailable->value();
    }
}
