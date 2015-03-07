<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallCenterMusicOnHoldSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyAnnouncementRequest16
 */
class GroupCallCenterModifyAnnouncementRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $serviceUserId                             = null;
    protected $entranceMessageSelection                  = null;
    protected $entranceMessageAudioFile                  = null;
    protected $entranceMessageVideoFile                  = null;
    protected $periodicComfortMessageSelection           = null;
    protected $periodicComfortMessageAudioFile           = null;
    protected $periodicComfortMessageVideoFile           = null;
    protected $onHoldSource                              = null;
    protected $onHoldUseAlternateSourceForInternalCalls  = null;
    protected $onHoldInternalSource                      = null;

    public function __construct(
         $serviceUserId,
         $entranceMessageSelection = null,
         LabeledFileResource $entranceMessageAudioFile = null,
         LabeledFileResource $entranceMessageVideoFile = null,
         $periodicComfortMessageSelection = null,
         LabeledFileResource $periodicComfortMessageAudioFile = null,
         LabeledFileResource $periodicComfortMessageVideoFile = null,
         CallCenterMusicOnHoldSourceModify $onHoldSource = null,
         $onHoldUseAlternateSourceForInternalCalls = null,
         CallCenterMusicOnHoldSourceModify $onHoldInternalSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEntranceMessageSelection($entranceMessageSelection);
        $this->setEntranceMessageAudioFile($entranceMessageAudioFile);
        $this->setEntranceMessageVideoFile($entranceMessageVideoFile);
        $this->setPeriodicComfortMessageSelection($periodicComfortMessageSelection);
        $this->setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile);
        $this->setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile);
        $this->setOnHoldSource($onHoldSource);
        $this->setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls);
        $this->setOnHoldInternalSource($onHoldInternalSource);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
    }

    public function getEntranceMessageSelection()
    {
        return (!$this->entranceMessageSelection) ?: $this->entranceMessageSelection->value();
    }

    public function setEntranceMessageAudioFile(LabeledFileResource $entranceMessageAudioFile = null)
    {
    }

    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->value();
    }

    public function setEntranceMessageVideoFile(LabeledFileResource $entranceMessageVideoFile = null)
    {
    }

    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->value();
    }

    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
    }

    public function getPeriodicComfortMessageSelection()
    {
        return (!$this->periodicComfortMessageSelection) ?: $this->periodicComfortMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioFile(LabeledFileResource $periodicComfortMessageAudioFile = null)
    {
    }

    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->value();
    }

    public function setPeriodicComfortMessageVideoFile(LabeledFileResource $periodicComfortMessageVideoFile = null)
    {
    }

    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->value();
    }

    public function setOnHoldSource(CallCenterMusicOnHoldSourceModify $onHoldSource = null)
    {
    }

    public function getOnHoldSource()
    {
        return (!$this->onHoldSource) ?: $this->onHoldSource->value();
    }

    public function setOnHoldUseAlternateSourceForInternalCalls(xs:boolean $onHoldUseAlternateSourceForInternalCalls = null)
    {
    }

    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->onHoldUseAlternateSourceForInternalCalls) ?: $this->onHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setOnHoldInternalSource(CallCenterMusicOnHoldSourceModify $onHoldInternalSource = null)
    {
    }

    public function getOnHoldInternalSource()
    {
        return (!$this->onHoldInternalSource) ?: $this->onHoldInternalSource->value();
    }
}
