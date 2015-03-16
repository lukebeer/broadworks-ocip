<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterModifyAnnouncementRequest';
    protected $serviceUserId;
    protected $entranceMessageSelection;
    protected $entranceMessageAudioFile;
    protected $entranceMessageVideoFile;
    protected $periodicComfortMessageSelection;
    protected $periodicComfortMessageAudioFile;
    protected $periodicComfortMessageVideoFile;
    protected $onHoldMessageSelection;
    protected $onHoldMessageAudioFile;
    protected $onHoldMessageVideoFile;

    public function __construct(
         $serviceUserId = '',
         $entranceMessageSelection = null,
         LabeledFileResource $entranceMessageAudioFile = null,
         LabeledFileResource $entranceMessageVideoFile = null,
         $periodicComfortMessageSelection = null,
         LabeledFileResource $periodicComfortMessageAudioFile = null,
         LabeledFileResource $periodicComfortMessageVideoFile = null,
         $onHoldMessageSelection = null,
         LabeledFileResource $onHoldMessageAudioFile = null,
         LabeledFileResource $onHoldMessageVideoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEntranceMessageSelection($entranceMessageSelection);
        $this->setEntranceMessageAudioFile($entranceMessageAudioFile);
        $this->setEntranceMessageVideoFile($entranceMessageVideoFile);
        $this->setPeriodicComfortMessageSelection($periodicComfortMessageSelection);
        $this->setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile);
        $this->setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile);
        $this->setOnHoldMessageSelection($onHoldMessageSelection);
        $this->setOnHoldMessageAudioFile($onHoldMessageAudioFile);
        $this->setOnHoldMessageVideoFile($onHoldMessageVideoFile);
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
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
        $this->onHoldMessageSelection->setName('onHoldMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $onHoldMessageSelection
     */
    public function getOnHoldMessageSelection()
    {
        return ($this->onHoldMessageSelection) ? $this->onHoldMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setOnHoldMessageAudioFile(LabeledFileResource $onHoldMessageAudioFile = null)
    {
        $this->onHoldMessageAudioFile = ($onHoldMessageAudioFile InstanceOf LabeledFileResource)
             ? $onHoldMessageAudioFile
             : new LabeledFileResource($onHoldMessageAudioFile);
        $this->onHoldMessageAudioFile->setName('onHoldMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $onHoldMessageAudioFile
     */
    public function getOnHoldMessageAudioFile()
    {
        return $this->onHoldMessageAudioFile;
    }

    /**
     * 
     */
    public function setOnHoldMessageVideoFile(LabeledFileResource $onHoldMessageVideoFile = null)
    {
        $this->onHoldMessageVideoFile = ($onHoldMessageVideoFile InstanceOf LabeledFileResource)
             ? $onHoldMessageVideoFile
             : new LabeledFileResource($onHoldMessageVideoFile);
        $this->onHoldMessageVideoFile->setName('onHoldMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $onHoldMessageVideoFile
     */
    public function getOnHoldMessageVideoFile()
    {
        return $this->onHoldMessageVideoFile;
    }
}
