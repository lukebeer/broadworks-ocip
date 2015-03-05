<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingTitle;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
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
    public    $name = __CLASS__;

    public function __construct(
             $isBridgeActive,
             $title,
             $isLocked,
             $isRecording,
             $isExpired,
             $isPaused,
             $conferenceLegTable
    ) {
        $this->isBridgeActive     = $isBridgeActive;
        $this->title              = $title;
        $this->isLocked           = $isLocked;
        $this->isRecording        = $isRecording;
        $this->isExpired          = $isExpired;
        $this->isPaused           = $isPaused;
        $this->conferenceLegTable = $conferenceLegTable;
        $this->args               = func_get_args();
    }

    public function setIsBridgeActive($isBridgeActive)
    {
        $isBridgeActive and $this->isBridgeActive = new xs:boolean($isBridgeActive);
    }

    public function getIsBridgeActive()
    {
        return (!$this->isBridgeActive) ?: $this->isBridgeActive->value();
    }

    public function setTitle($title)
    {
        $title and $this->title = new InstantConferencingTitle($title);
    }

    public function getTitle()
    {
        return (!$this->title) ?: $this->title->value();
    }

    public function setIsLocked($isLocked)
    {
        $isLocked and $this->isLocked = new xs:boolean($isLocked);
    }

    public function getIsLocked()
    {
        return (!$this->isLocked) ?: $this->isLocked->value();
    }

    public function setIsRecording($isRecording)
    {
        $isRecording and $this->isRecording = new xs:boolean($isRecording);
    }

    public function getIsRecording()
    {
        return (!$this->isRecording) ?: $this->isRecording->value();
    }

    public function setIsExpired($isExpired)
    {
        $isExpired and $this->isExpired = new xs:boolean($isExpired);
    }

    public function getIsExpired()
    {
        return (!$this->isExpired) ?: $this->isExpired->value();
    }

    public function setIsPaused($isPaused)
    {
        $isPaused and $this->isPaused = new xs:boolean($isPaused);
    }

    public function getIsPaused()
    {
        return (!$this->isPaused) ?: $this->isPaused->value();
    }

    public function setConferenceLegTable($conferenceLegTable)
    {
        $conferenceLegTable and $this->conferenceLegTable = new core:OCITable($conferenceLegTable);
    }

    public function getConferenceLegTable()
    {
        return (!$this->conferenceLegTable) ?: $this->conferenceLegTable->value();
    }
}
