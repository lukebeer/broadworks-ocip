<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Identifier for conference recording.
 */
class InstantConferencingRecordingKey extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey';
    public    $name                = 'InstantConferencingRecordingKey';
    protected $bridgeServiceUserId = null;
    protected $recordingId         = null;

    public function __construct(
         $bridgeServiceUserId,
         $recordingId
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setRecordingId($recordingId);
    }

    /**
     * @return InstantConferencingRecordingKey
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
    public function setRecordingId($recordingId = null)
    {
        if (!$recordingId) return $this;
        $this->recordingId = new SimpleContent($recordingId);
        $this->recordingId->setName('recordingId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRecordingId()
    {
        return $this->recordingId->getValue();
    }
}
