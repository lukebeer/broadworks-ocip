<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserInstantConferencingGetStandAloneConferenceCallRequest.
 *         Contains the information of a conference call.
 *         The conferenceLegTable contains a table with column headings:
 *         "Is Leader", "Phone Number", "User Name", "Status" and "Leg Id".
 *         The "User Name" is whatever was specified in the UserInstantConferencingControlCallRequest.
 */
class UserInstantConferencingGetStandAloneConferenceCallResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingGetStandAloneConferenceCallResponse';
    protected $isBridgeActive;
    protected $title;
    protected $isLocked;
    protected $isRecording;
    protected $isExpired;
    protected $isPaused;
    protected $conferenceLegTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneConferenceCallResponse $response
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
        $this->isBridgeActive->setName('isBridgeActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isBridgeActive
     */
    public function getIsBridgeActive()
    {
        return ($this->isBridgeActive) ? $this->isBridgeActive->getValue() : null;
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
        $this->title->setName('title');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingTitle $title
     */
    public function getTitle()
    {
        return ($this->title) ? $this->title->getValue() : null;
    }

    /**
     * 
     */
    public function setIsLocked($isLocked = null)
    {
        $this->isLocked = new PrimitiveType($isLocked);
        $this->isLocked->setName('isLocked');
        return $this;
    }

    /**
     * 
     * @return boolean $isLocked
     */
    public function getIsLocked()
    {
        return ($this->isLocked) ? $this->isLocked->getValue() : null;
    }

    /**
     * 
     */
    public function setIsRecording($isRecording = null)
    {
        $this->isRecording = new PrimitiveType($isRecording);
        $this->isRecording->setName('isRecording');
        return $this;
    }

    /**
     * 
     * @return boolean $isRecording
     */
    public function getIsRecording()
    {
        return ($this->isRecording) ? $this->isRecording->getValue() : null;
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = new PrimitiveType($isExpired);
        $this->isExpired->setName('isExpired');
        return $this;
    }

    /**
     * 
     * @return boolean $isExpired
     */
    public function getIsExpired()
    {
        return ($this->isExpired) ? $this->isExpired->getValue() : null;
    }

    /**
     * 
     */
    public function setIsPaused($isPaused = null)
    {
        $this->isPaused = new PrimitiveType($isPaused);
        $this->isPaused->setName('isPaused');
        return $this;
    }

    /**
     * 
     * @return boolean $isPaused
     */
    public function getIsPaused()
    {
        return ($this->isPaused) ? $this->isPaused->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceLegTable(TableType $conferenceLegTable = null)
    {
        $this->conferenceLegTable = $conferenceLegTable;
        $this->conferenceLegTable->setName('conferenceLegTable');
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
