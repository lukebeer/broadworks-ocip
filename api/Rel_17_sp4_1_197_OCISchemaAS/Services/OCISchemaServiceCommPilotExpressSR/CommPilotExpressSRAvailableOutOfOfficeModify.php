<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR Available Out Of Office Configuration used in the context of a modify.
 */
class CommPilotExpressSRAvailableOutOfOfficeModify extends ComplexType implements ComplexInterface
{
    public    $name               = 'CommPilotExpressSRAvailableOutOfOfficeModify';
    protected $remotePhoneNumber  = null;
    protected $noAnswerSetting    = null;
    protected $incomingCallNotify = null;

    public function __construct(
         $remotePhoneNumber = null,
         $noAnswerSetting = null,
         $incomingCallNotify = null
    ) {
        $this->setRemotePhoneNumber($remotePhoneNumber);
        $this->setNoAnswerSetting($noAnswerSetting);
        $this->setIncomingCallNotify($incomingCallNotify);
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
    public function setRemotePhoneNumber($remotePhoneNumber = null)
    {
        if (!$remotePhoneNumber) return $this;
        $this->remotePhoneNumber = new SimpleContent($remotePhoneNumber);
        $this->remotePhoneNumber->setName('remotePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $remotePhoneNumber
     */
    public function getRemotePhoneNumber()
    {
        return $this->remotePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerSetting($noAnswerSetting = null)
    {
        if (!$noAnswerSetting) return $this;
        $this->noAnswerSetting = new SimpleContent($noAnswerSetting);
        $this->noAnswerSetting->setName('noAnswerSetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $noAnswerSetting
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting->getValue();
    }

    /**
     * 
     */
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
        if (!$incomingCallNotify) return $this;
        $this->incomingCallNotify = new SimpleContent($incomingCallNotify);
        $this->incomingCallNotify->setName('incomingCallNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCallNotify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify->getValue();
    }
}
