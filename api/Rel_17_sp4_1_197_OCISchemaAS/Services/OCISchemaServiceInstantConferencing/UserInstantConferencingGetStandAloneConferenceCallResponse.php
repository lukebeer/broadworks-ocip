<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingTitle;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserInstantConferencingGetStandAloneConferenceCallRequest.
 *         Contains the information of a conference call.
 *         The conferenceLegTable contains a table with column headings:
 *         "Is Leader", "Phone Number", "User Name", "Status" and "Leg Id".
 *         The "User Name" is whatever was specified in the UserInstantConferencingControlCallRequest.
 */
class UserInstantConferencingGetStandAloneConferenceCallResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $isBridgeActive     = null;
    protected $title              = null;
    protected $isLocked           = null;
    protected $isRecording        = null;
    protected $isExpired          = null;
    protected $isPaused           = null;
    protected $conferenceLegTable = null;


    /**
     * 
     */
    public function setIsBridgeActive($isBridgeActive = null)
    {
        $this->isBridgeActive = (boolean) $isBridgeActive;
    }

    /**
     * 
     */
    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive->getValue();
    }

    /**
     * Title of instant conference.
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    /**
     * Title of instant conference.
     */
    public function getTitle()
    {
        return (!$this->title) ?: $this->title->getValue();
    }

    /**
     * 
     */
    public function setIsLocked($isLocked = null)
    {
        $this->isLocked = (boolean) $isLocked;
    }

    /**
     * 
     */
    public function getIsLocked()
    {
        return (!$this->isLocked) ?: $this->isLocked->getValue();
    }

    /**
     * 
     */
    public function setIsRecording($isRecording = null)
    {
        $this->isRecording = (boolean) $isRecording;
    }

    /**
     * 
     */
    public function getIsRecording()
    {
        return (!$this->isRecording) ?: $this->isRecording->getValue();
    }

    /**
     * 
     */
    public function setIsExpired($isExpired = null)
    {
        $this->isExpired = (boolean) $isExpired;
    }

    /**
     * 
     */
    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->getValue();
    }

    /**
     * 
     */
    public function setIsPaused($isPaused = null)
    {
        $this->isPaused = (boolean) $isPaused;
    }

    /**
     * 
     */
    public function getIsPaused()
    {
        return (!$this->isPaused) ?: $this->isPaused->getValue();
    }

    /**
     * 
     */
    public function setConferenceLegTable(core:OCITable $conferenceLegTable = null)
    {
        $this->conferenceLegTable =  $conferenceLegTable;
    }

    /**
     * 
     */
    public function getConferenceLegTable()
    {
        return (!$this->conferenceLegTable) ?: $this->conferenceLegTable->getValue();
    }
}
