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
 * CommPilot Express SR Available In Office Settings used in the context of a get.
 */
class CommPilotExpressSRAvailableInOffice extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressSRAvailableInOffice';
    protected $busySetting;
    protected $noAnswerSetting;
    protected $incomingCallNotify;

    public function __construct(
         $busySetting = '',
         $noAnswerSetting = '',
         $incomingCallNotify = ''
    ) {
        $this->setBusySetting($busySetting);
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
    public function setBusySetting($busySetting = null)
    {
        $this->busySetting = new SimpleContent($busySetting);
        $this->busySetting->setName('busySetting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $busySetting
     */
    public function getBusySetting()
    {
        return ($this->busySetting) ? $this->busySetting->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerSetting($noAnswerSetting = null)
    {
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
        return ($this->noAnswerSetting) ? $this->noAnswerSetting->getValue() : null;
    }

    /**
     * 
     */
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
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
        return ($this->incomingCallNotify) ? $this->incomingCallNotify->getValue() : null;
    }
}
