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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyAnnouncementRequest16
 */
class GroupCallCenterModifyAnnouncementRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterModifyAnnouncementRequest14sp6';
    protected $serviceUserId;
    protected $entranceMessageSelection;
    protected $entranceMessageAudioFile;
    protected $entranceMessageVideoFile;
    protected $periodicComfortMessageSelection;
    protected $periodicComfortMessageAudioFile;
    protected $periodicComfortMessageVideoFile;
    protected $onHoldSource;
    protected $onHoldUseAlternateSourceForInternalCalls;
    protected $onHoldInternalSource;

    public function __construct(
         $serviceUserId = '',
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
        $this->entranceMessageSelection->setName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $entranceMessageSelection
     */
    public function getEntranceMessageSelection()
    {
        return ($this->entranceMessageSelection) ? $this->entranceMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFile(LabeledFileResource $entranceMessageAudioFile = null)
    {
        $this->entranceMessageAudioFile = ($entranceMessageAudioFile InstanceOf LabeledFileResource)
             ? $entranceMessageAudioFile
             : new LabeledFileResource($entranceMessageAudioFile);
        $this->entranceMessageAudioFile->setName('entranceMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $entranceMessageAudioFile
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFile(LabeledFileResource $entranceMessageVideoFile = null)
    {
        $this->entranceMessageVideoFile = ($entranceMessageVideoFile InstanceOf LabeledFileResource)
             ? $entranceMessageVideoFile
             : new LabeledFileResource($entranceMessageVideoFile);
        $this->entranceMessageVideoFile->setName('entranceMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $entranceMessageVideoFile
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $periodicComfortMessageSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return ($this->periodicComfortMessageSelection) ? $this->periodicComfortMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFile(LabeledFileResource $periodicComfortMessageAudioFile = null)
    {
        $this->periodicComfortMessageAudioFile = ($periodicComfortMessageAudioFile InstanceOf LabeledFileResource)
             ? $periodicComfortMessageAudioFile
             : new LabeledFileResource($periodicComfortMessageAudioFile);
        $this->periodicComfortMessageAudioFile->setName('periodicComfortMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $periodicComfortMessageAudioFile
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFile(LabeledFileResource $periodicComfortMessageVideoFile = null)
    {
        $this->periodicComfortMessageVideoFile = ($periodicComfortMessageVideoFile InstanceOf LabeledFileResource)
             ? $periodicComfortMessageVideoFile
             : new LabeledFileResource($periodicComfortMessageVideoFile);
        $this->periodicComfortMessageVideoFile->setName('periodicComfortMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $periodicComfortMessageVideoFile
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
    }

    /**
     * 
     */
    public function setOnHoldSource(CallCenterMusicOnHoldSourceModify $onHoldSource = null)
    {
        $this->onHoldSource = ($onHoldSource InstanceOf CallCenterMusicOnHoldSourceModify)
             ? $onHoldSource
             : new CallCenterMusicOnHoldSourceModify($onHoldSource);
        $this->onHoldSource->setName('onHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMusicOnHoldSourceModify $onHoldSource
     */
    public function getOnHoldSource()
    {
        return $this->onHoldSource;
    }

    /**
     * 
     */
    public function setOnHoldUseAlternateSourceForInternalCalls($onHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->onHoldUseAlternateSourceForInternalCalls = new PrimitiveType($onHoldUseAlternateSourceForInternalCalls);
        $this->onHoldUseAlternateSourceForInternalCalls->setName('onHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $onHoldUseAlternateSourceForInternalCalls
     */
    public function getOnHoldUseAlternateSourceForInternalCalls()
    {
        return ($this->onHoldUseAlternateSourceForInternalCalls) ? $this->onHoldUseAlternateSourceForInternalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setOnHoldInternalSource(CallCenterMusicOnHoldSourceModify $onHoldInternalSource = null)
    {
        $this->onHoldInternalSource = ($onHoldInternalSource InstanceOf CallCenterMusicOnHoldSourceModify)
             ? $onHoldInternalSource
             : new CallCenterMusicOnHoldSourceModify($onHoldInternalSource);
        $this->onHoldInternalSource->setName('onHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMusicOnHoldSourceModify $onHoldInternalSource
     */
    public function getOnHoldInternalSource()
    {
        return $this->onHoldInternalSource;
    }
}
