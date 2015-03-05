<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMusicOnHoldSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
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
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $entranceMessageSelection=null,
             LabeledFileResource $entranceMessageAudioFile=null,
             LabeledFileResource $entranceMessageVideoFile=null,
             $periodicComfortMessageSelection=null,
             LabeledFileResource $periodicComfortMessageAudioFile=null,
             LabeledFileResource $periodicComfortMessageVideoFile=null,
             $onHoldSource=null,
             $onHoldUseAlternateSourceForInternalCalls=null,
             $onHoldInternalSource=null
    ) {
        $this->serviceUserId                            = new UserId($serviceUserId);
        $this->entranceMessageSelection                 = $entranceMessageSelection;
        $this->entranceMessageAudioFile                 = $entranceMessageAudioFile;
        $this->entranceMessageVideoFile                 = $entranceMessageVideoFile;
        $this->periodicComfortMessageSelection          = $periodicComfortMessageSelection;
        $this->periodicComfortMessageAudioFile          = $periodicComfortMessageAudioFile;
        $this->periodicComfortMessageVideoFile          = $periodicComfortMessageVideoFile;
        $this->onHoldSource                             = $onHoldSource;
        $this->onHoldUseAlternateSourceForInternalCalls = $onHoldUseAlternateSourceForInternalCalls;
        $this->onHoldInternalSource                     = $onHoldInternalSource;
        $this->args                                     = func_get_args();
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

    public function setOnHoldSource($onHoldSource)
    {
        $onHoldSource and $this->onHoldSource = new CallCenterMusicOnHoldSourceModify($onHoldSource);
    }

    public function getOnHoldSource()
    {
        return (!$this->onHoldSource) ?: $this->onHoldSource->value();
    }

    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls)
    {
        $onHoldUseAlternateSourceForInternalCalls and $this->onHoldUseAlternateSourceForInternalCalls = new xs:boolean($onHoldUseAlternateSourceForInternalCalls);
    }

    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->onHoldUseAlternateSourceForInternalCalls) ?: $this->onHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setOnHoldInternalSource($onHoldInternalSource)
    {
        $onHoldInternalSource and $this->onHoldInternalSource = new CallCenterMusicOnHoldSourceModify($onHoldInternalSource);
    }

    public function getOnHoldInternalSource()
    {
        return (!$this->onHoldInternalSource) ?: $this->onHoldInternalSource->value();
    }
}
