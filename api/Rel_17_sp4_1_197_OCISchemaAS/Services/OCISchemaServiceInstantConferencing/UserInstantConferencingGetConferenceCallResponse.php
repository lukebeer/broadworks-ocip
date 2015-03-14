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
 * Response to UserInstantConferencingGetConferenceCallRequest.
 *         Contains the information of a conference call.
 *         The conferenceLegTable contains a table with column headings:
 *         "Is Leader", "Phone Number", "User Name", "Status" and "Leg Id".
 *         The "User Name" is whatever was specified in the UserInstantConferencingControlCallRequest.
 */
class UserInstantConferencingGetConferenceCallResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserInstantConferencingGetConferenceCallResponse';
    protected $isBridgeActive     = null;
    protected $title              = null;
    protected $isLocked           = null;
    protected $isRecording        = null;
    protected $isExpired          = null;
    protected $isPaused           = null;
    protected $conferenceLegTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceCallResponse $response
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
        if (!$isBridgeActive) return $this;
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
        return $this->isBridgeActive->getValue();
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        if (!$title) return $this;
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
        return $this->title->getValue();
    }

    /**
     * 
     */
    public function setIsLocked($isLocked = null)
    {
        if (!$isLocked) return $this;
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
        return $this->isLocked->getValue();
    }

    /**
     * 
     */
    public function setIsRecording($isRecording = null)
    {
        if (!$isRecording) return $this;
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
        return $this->isRecording->getValue();
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        if (!$isExpired) return $this;
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
        return $this->isExpired->getValue();
    }

    /**
     * 
     */
    public function setIsPaused($isPaused = null)
    {
        if (!$isPaused) return $this;
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
        return $this->isPaused->getValue();
    }

    /**
     * 
     */
    public function setConferenceLegTable(TableType $conferenceLegTable = null)
    {
        if (!$conferenceLegTable) return $this;
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
