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
    public    $name                            = 'GroupCallCenterModifyAnnouncementRequest';
    protected $serviceUserId                   = null;
    protected $entranceMessageSelection        = null;
    protected $entranceMessageAudioFile        = null;
    protected $entranceMessageVideoFile        = null;
    protected $periodicComfortMessageSelection = null;
    protected $periodicComfortMessageAudioFile = null;
    protected $periodicComfortMessageVideoFile = null;
    protected $onHoldMessageSelection          = null;
    protected $onHoldMessageAudioFile          = null;
    protected $onHoldMessageVideoFile          = null;

    public function __construct(
         $serviceUserId,
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
     * @return 
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
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        if (!$entranceMessageSelection) return $this;
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
        $this->entranceMessageSelection->setName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getEntranceMessageSelection()
    {
        return $this->entranceMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFile(LabeledFileResource $entranceMessageAudioFile = null)
    {
        if (!$entranceMessageAudioFile) return $this;
        $this->entranceMessageAudioFile = $entranceMessageAudioFile;
        $this->entranceMessageAudioFile->setName('entranceMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
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
        if (!$entranceMessageVideoFile) return $this;
        $this->entranceMessageVideoFile = $entranceMessageVideoFile;
        $this->entranceMessageVideoFile->setName('entranceMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
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
        if (!$periodicComfortMessageSelection) return $this;
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return $this->periodicComfortMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFile(LabeledFileResource $periodicComfortMessageAudioFile = null)
    {
        if (!$periodicComfortMessageAudioFile) return $this;
        $this->periodicComfortMessageAudioFile = $periodicComfortMessageAudioFile;
        $this->periodicComfortMessageAudioFile->setName('periodicComfortMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
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
        if (!$periodicComfortMessageVideoFile) return $this;
        $this->periodicComfortMessageVideoFile = $periodicComfortMessageVideoFile;
        $this->periodicComfortMessageVideoFile->setName('periodicComfortMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
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
        if (!$onHoldMessageSelection) return $this;
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
        $this->onHoldMessageSelection->setName('onHoldMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection
     */
    public function getOnHoldMessageSelection()
    {
        return $this->onHoldMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setOnHoldMessageAudioFile(LabeledFileResource $onHoldMessageAudioFile = null)
    {
        if (!$onHoldMessageAudioFile) return $this;
        $this->onHoldMessageAudioFile = $onHoldMessageAudioFile;
        $this->onHoldMessageAudioFile->setName('onHoldMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
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
        if (!$onHoldMessageVideoFile) return $this;
        $this->onHoldMessageVideoFile = $onHoldMessageVideoFile;
        $this->onHoldMessageVideoFile->setName('onHoldMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource
     */
    public function getOnHoldMessageVideoFile()
    {
        return $this->onHoldMessageVideoFile;
    }
}
