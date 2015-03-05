<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $entranceMessageSelection=null,
             LabeledFileResource $entranceMessageAudioFile=null,
             LabeledFileResource $entranceMessageVideoFile=null,
             $periodicComfortMessageSelection=null,
             LabeledFileResource $periodicComfortMessageAudioFile=null,
             LabeledFileResource $periodicComfortMessageVideoFile=null,
             $onHoldMessageSelection=null,
             LabeledFileResource $onHoldMessageAudioFile=null,
             LabeledFileResource $onHoldMessageVideoFile=null
    ) {
        $this->serviceUserId                   = new UserId($serviceUserId);
        $this->entranceMessageSelection        = $entranceMessageSelection;
        $this->entranceMessageAudioFile        = $entranceMessageAudioFile;
        $this->entranceMessageVideoFile        = $entranceMessageVideoFile;
        $this->periodicComfortMessageSelection = $periodicComfortMessageSelection;
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        $this->onHoldMessageSelection          = $onHoldMessageSelection;
        $this->onHoldMessageAudioFile          = $onHoldMessageAudioFile;
        $this->onHoldMessageVideoFile          = $onHoldMessageVideoFile;
        $this->args                            = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEntranceMessageSelection($entranceMessageSelection)
    {
        $entranceMessageSelection and $this->entranceMessageSelection = new CallCenterAnnouncementSelection($entranceMessageSelection);
    }

    public function getEntranceMessageSelection()
    {
        return (!$this->entranceMessageSelection) ?: $this->entranceMessageSelection->value();
    }

    public function setEntranceMessageAudioFile($entranceMessageAudioFile)
    {
        $entranceMessageAudioFile and $this->entranceMessageAudioFile = new LabeledFileResource($entranceMessageAudioFile);
    }

    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->value();
    }

    public function setEntranceMessageVideoFile($entranceMessageVideoFile)
    {
        $entranceMessageVideoFile and $this->entranceMessageVideoFile = new LabeledFileResource($entranceMessageVideoFile);
    }

    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->value();
    }

    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection)
    {
        $periodicComfortMessageSelection and $this->periodicComfortMessageSelection = new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
    }

    public function getPeriodicComfortMessageSelection()
    {
        return (!$this->periodicComfortMessageSelection) ?: $this->periodicComfortMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile)
    {
        $periodicComfortMessageAudioFile and $this->periodicComfortMessageAudioFile = new LabeledFileResource($periodicComfortMessageAudioFile);
    }

    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->value();
    }

    public function setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile)
    {
        $periodicComfortMessageVideoFile and $this->periodicComfortMessageVideoFile = new LabeledFileResource($periodicComfortMessageVideoFile);
    }

    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->value();
    }

    public function setOnHoldMessageSelection($onHoldMessageSelection)
    {
        $onHoldMessageSelection and $this->onHoldMessageSelection = new CallCenterAnnouncementSelection($onHoldMessageSelection);
    }

    public function getOnHoldMessageSelection()
    {
        return (!$this->onHoldMessageSelection) ?: $this->onHoldMessageSelection->value();
    }

    public function setOnHoldMessageAudioFile($onHoldMessageAudioFile)
    {
        $onHoldMessageAudioFile and $this->onHoldMessageAudioFile = new LabeledFileResource($onHoldMessageAudioFile);
    }

    public function getOnHoldMessageAudioFile()
    {
        return (!$this->onHoldMessageAudioFile) ?: $this->onHoldMessageAudioFile->value();
    }

    public function setOnHoldMessageVideoFile($onHoldMessageVideoFile)
    {
        $onHoldMessageVideoFile and $this->onHoldMessageVideoFile = new LabeledFileResource($onHoldMessageVideoFile);
    }

    public function getOnHoldMessageVideoFile()
    {
        return (!$this->onHoldMessageVideoFile) ?: $this->onHoldMessageVideoFile->value();
    }
}
