<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupThirdPartyVoiceMailSupportGetRequest.
 */
class GroupThirdPartyVoiceMailSupportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'GroupThirdPartyVoiceMailSupportGetResponse';
    protected $isActive    = null;
    protected $groupServer = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\GroupThirdPartyVoiceMailSupportGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setGroupServer($groupServer = null)
    {
        if (!$groupServer) return $this;
        $this->groupServer = ($groupServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $groupServer
             : new ThirdPartyVoiceMailSupportMailServer($groupServer);
        $this->groupServer->setName('groupServer');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailServer $groupServer
     */
    public function getGroupServer()
    {
        return $this->groupServer->getValue();
    }
}
