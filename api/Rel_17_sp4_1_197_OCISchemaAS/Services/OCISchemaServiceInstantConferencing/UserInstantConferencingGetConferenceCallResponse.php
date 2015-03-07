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
 * Response to UserInstantConferencingGetConferenceCallRequest.
 *         Contains the information of a conference call.
 *         The conferenceLegTable contains a table with column headings:
 *         "Is Leader", "Phone Number", "User Name", "Status" and "Leg Id".
 *         The "User Name" is whatever was specified in the UserInstantConferencingControlCallRequest.
 */
class UserInstantConferencingGetConferenceCallResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $isBridgeActive      = null;
    protected $title               = null;
    protected $isLocked            = null;
    protected $isRecording         = null;
    protected $isExpired           = null;
    protected $isPaused            = null;
    protected $conferenceLegTable  = null;


    public function setIsBridgeActive(xs:boolean $isBridgeActive = null)
    {
    }

    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive->value();
    }

    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf InstantConferencingTitle)
             ? $title
             : new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setIsLocked(xs:boolean $isLocked = null)
    {
    }

    public function getIsLocked()
    {
        return (!$this->isLocked) ?: $this->isLocked->value();
    }

    public function setIsRecording(xs:boolean $isRecording = null)
    {
    }

    public function getIsRecording()
    {
        return (!$this->isRecording) ?: $this->isRecording->value();
    }

    public function setIsExpired(xs:boolean $isExpired = null)
    {
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setIsPaused(xs:boolean $isPaused = null)
    {
    }

    public function getIsPaused()
    {
        return (!$this->isPaused) ?: $this->isPaused->value();
    }

    public function setConferenceLegTable(core:OCITable $conferenceLegTable = null)
    {
    }

    public function getConferenceLegTable()
    {
        return (!$this->conferenceLegTable) ?: $this->conferenceLegTable->value();
    }
}
