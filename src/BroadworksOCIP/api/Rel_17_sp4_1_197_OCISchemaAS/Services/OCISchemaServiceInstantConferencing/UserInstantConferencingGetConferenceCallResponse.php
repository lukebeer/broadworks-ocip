<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserInstantConferencingGetConferenceCallRequest.
 *         Contains the information of a conference call.
 *         The conferenceLegTable contains a table with column headings:
 *         "Is Leader", "Phone Number", "User Name", "Status" and "Leg Id".
 *         The "User Name" is whatever was specified in the UserInstantConferencingControlCallRequest.
 */
class UserInstantConferencingGetConferenceCallResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetConferenceCallResponse';
    protected $isBridgeActive;
    protected $title;
    protected $isLocked;
    protected $isRecording;
    protected $isExpired;
    protected $isPaused;
    protected $conferenceLegTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceCallResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        $this->isBridgeActive = new PrimitiveType($isBridgeActive);
        $this->isBridgeActive->setElementName('isBridgeActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isBridgeActive
     */
    public function getIsBridgeActive()
    {
        return ($this->isBridgeActive)
            ? $this->isBridgeActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
     */
    public function getTitle()
    {
        return ($this->title)
            ? $this->title->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsLocked($isLocked = null)
    {
        $this->isLocked = new PrimitiveType($isLocked);
        $this->isLocked->setElementName('isLocked');
        return $this;
    }

    /**
     * 
     * @return boolean $isLocked
     */
    public function getIsLocked()
    {
        return ($this->isLocked)
            ? $this->isLocked->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsRecording($isRecording = null)
    {
        $this->isRecording = new PrimitiveType($isRecording);
        $this->isRecording->setElementName('isRecording');
        return $this;
    }

    /**
     * 
     * @return boolean $isRecording
     */
    public function getIsRecording()
    {
        return ($this->isRecording)
            ? $this->isRecording->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setElementName('isExpired');
        return $this;
    }

    /**
     * 
     * @return boolean $isExpired
     */
    public function getIsExpired()
    {
        return ($this->isExpired)
            ? $this->isExpired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsPaused($isPaused = null)
    {
        $this->isPaused = new PrimitiveType($isPaused);
        $this->isPaused->setElementName('isPaused');
        return $this;
    }

    /**
     * 
     * @return boolean $isPaused
     */
    public function getIsPaused()
    {
        return ($this->isPaused)
            ? $this->isPaused->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceLegTable(TableType $conferenceLegTable = null)
    {
        $this->conferenceLegTable = $conferenceLegTable;
        $this->conferenceLegTable->setElementName('conferenceLegTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceLegTable()
    {
        return $this->conferenceLegTable;
    }
}
