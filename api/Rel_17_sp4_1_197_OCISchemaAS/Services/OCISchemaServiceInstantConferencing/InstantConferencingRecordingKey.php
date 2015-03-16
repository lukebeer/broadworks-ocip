<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Identifier for conference recording.
 */
class InstantConferencingRecordingKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingRecordingKey';
    protected $bridgeServiceUserId;
    protected $recordingId;

    public function __construct(
         $bridgeServiceUserId = '',
         $recordingId = ''
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setRecordingId($recordingId);
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
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = new SimpleContent($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId)
            ? $this->bridgeServiceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordingId($recordingId = null)
    {
        $this->recordingId = new SimpleContent($recordingId);
        $this->recordingId->setElementName('recordingId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $recordingId
     */
    public function getRecordingId()
    {
        return ($this->recordingId)
            ? $this->recordingId->getElementValue()
            : null;
    }
}
