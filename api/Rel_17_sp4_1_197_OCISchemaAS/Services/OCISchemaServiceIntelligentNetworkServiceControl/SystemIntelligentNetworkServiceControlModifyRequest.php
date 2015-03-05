<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Treatment;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Intelligent Network Service Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemIntelligentNetworkServiceControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $preAnswerActionTimeoutSeconds=null,
             $msgRejectNoVoiceMail=null,
             $msgRejectVoiceMail=null,
             $msgPreAnswerWait=null,
             $msgBusy=null,
             $msgRelease=null,
             $msgNoAnswer=null,
             $msgOCPReject=null,
             $msgForwardLoop=null,
             $msgTemporarilyUnavailable=null
    ) {
        $this->preAnswerActionTimeoutSeconds = $preAnswerActionTimeoutSeconds;
        $this->msgRejectNoVoiceMail          = new Treatment($msgRejectNoVoiceMail);
        $this->msgRejectVoiceMail            = new Treatment($msgRejectVoiceMail);
        $this->msgPreAnswerWait              = new Treatment($msgPreAnswerWait);
        $this->msgBusy                       = new Treatment($msgBusy);
        $this->msgRelease                    = new Treatment($msgRelease);
        $this->msgNoAnswer                   = new Treatment($msgNoAnswer);
        $this->msgOCPReject                  = new Treatment($msgOCPReject);
        $this->msgForwardLoop                = new Treatment($msgForwardLoop);
        $this->msgTemporarilyUnavailable     = new Treatment($msgTemporarilyUnavailable);
        $this->args                          = func_get_args();
    }

    public function setPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds)
    {
        $preAnswerActionTimeoutSeconds and $this->preAnswerActionTimeoutSeconds = new IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds($preAnswerActionTimeoutSeconds);
    }

    public function getPreAnswerActionTimeoutSeconds()
    {
        return (!$this->preAnswerActionTimeoutSeconds) ?: $this->preAnswerActionTimeoutSeconds->value();
    }

    public function setMsgRejectNoVoiceMail($msgRejectNoVoiceMail)
    {
        $msgRejectNoVoiceMail and $this->msgRejectNoVoiceMail = new Treatment($msgRejectNoVoiceMail);
    }

    public function getMsgRejectNoVoiceMail()
    {
        return (!$this->msgRejectNoVoiceMail) ?: $this->msgRejectNoVoiceMail->value();
    }

    public function setMsgRejectVoiceMail($msgRejectVoiceMail)
    {
        $msgRejectVoiceMail and $this->msgRejectVoiceMail = new Treatment($msgRejectVoiceMail);
    }

    public function getMsgRejectVoiceMail()
    {
        return (!$this->msgRejectVoiceMail) ?: $this->msgRejectVoiceMail->value();
    }

    public function setMsgPreAnswerWait($msgPreAnswerWait)
    {
        $msgPreAnswerWait and $this->msgPreAnswerWait = new Treatment($msgPreAnswerWait);
    }

    public function getMsgPreAnswerWait()
    {
        return (!$this->msgPreAnswerWait) ?: $this->msgPreAnswerWait->value();
    }

    public function setMsgBusy($msgBusy)
    {
        $msgBusy and $this->msgBusy = new Treatment($msgBusy);
    }

    public function getMsgBusy()
    {
        return (!$this->msgBusy) ?: $this->msgBusy->value();
    }

    public function setMsgRelease($msgRelease)
    {
        $msgRelease and $this->msgRelease = new Treatment($msgRelease);
    }

    public function getMsgRelease()
    {
        return (!$this->msgRelease) ?: $this->msgRelease->value();
    }

    public function setMsgNoAnswer($msgNoAnswer)
    {
        $msgNoAnswer and $this->msgNoAnswer = new Treatment($msgNoAnswer);
    }

    public function getMsgNoAnswer()
    {
        return (!$this->msgNoAnswer) ?: $this->msgNoAnswer->value();
    }

    public function setMsgOCPReject($msgOCPReject)
    {
        $msgOCPReject and $this->msgOCPReject = new Treatment($msgOCPReject);
    }

    public function getMsgOCPReject()
    {
        return (!$this->msgOCPReject) ?: $this->msgOCPReject->value();
    }

    public function setMsgForwardLoop($msgForwardLoop)
    {
        $msgForwardLoop and $this->msgForwardLoop = new Treatment($msgForwardLoop);
    }

    public function getMsgForwardLoop()
    {
        return (!$this->msgForwardLoop) ?: $this->msgForwardLoop->value();
    }

    public function setMsgTemporarilyUnavailable($msgTemporarilyUnavailable)
    {
        $msgTemporarilyUnavailable and $this->msgTemporarilyUnavailable = new Treatment($msgTemporarilyUnavailable);
    }

    public function getMsgTemporarilyUnavailable()
    {
        return (!$this->msgTemporarilyUnavailable) ?: $this->msgTemporarilyUnavailable->value();
    }
}
