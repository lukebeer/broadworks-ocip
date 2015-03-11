<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
 */
class InstantConferencingConferenceKey extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey';
    public    $name                = 'InstantConferencingConferenceKey';
    protected $bridgeServiceUserId = null;
    protected $conferenceId        = null;

    public function __construct(
         $bridgeServiceUserId,
         $conferenceId
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceId($conferenceId);
    }

    /**
     * @return InstantConferencingConferenceKey
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        if (!$bridgeServiceUserId) return $this;
        $this->bridgeServiceUserId = new SimpleContent($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setConferenceId($conferenceId = null)
    {
        if (!$conferenceId) return $this;
        $this->conferenceId = new SimpleContent($conferenceId);
        $this->conferenceId->setName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConferenceId()
    {
        return $this->conferenceId->getValue();
    }
}
