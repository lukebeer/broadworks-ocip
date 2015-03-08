<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupThirdPartyVoiceMailSupportGetRequest.
 */
class GroupThirdPartyVoiceMailSupportGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport\GroupThirdPartyVoiceMailSupportGetResponse';
    public    $name        = __CLASS__;
    protected $isActive    = null;
    protected $groupServer = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Uniquely identifies an external voice mail server.
     */
    public function setGroupServer($groupServer = null)
    {
        $this->groupServer = ($groupServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $groupServer
             : new ThirdPartyVoiceMailSupportMailServer($groupServer);
    }

    /**
     * Uniquely identifies an external voice mail server.
     */
    public function getGroupServer()
    {
        return (!$this->groupServer) ?: $this->groupServer->getValue();
    }
}