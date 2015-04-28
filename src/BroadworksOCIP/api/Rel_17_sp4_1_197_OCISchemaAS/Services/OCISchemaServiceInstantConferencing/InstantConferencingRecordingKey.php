<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
