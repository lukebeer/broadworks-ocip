<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterruptDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterrupt;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the enterprise level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterprisePreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterprisePreAlertingAnnouncementModifyRequest';
    protected $serviceProviderId;
    protected $announcementInterruption;
    protected $interruptionDigitSequence;
    protected $audioSelection;
    protected $audioFile;
    protected $videoSelection;
    protected $videoFile;

    public function __construct(
         $serviceProviderId = '',
         $announcementInterruption = null,
         $interruptionDigitSequence = null,
         $audioSelection = null,
         $audioFile = null,
         $videoSelection = null,
         $videoFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setAnnouncementInterruption($announcementInterruption);
        $this->setInterruptionDigitSequence($interruptionDigitSequence);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnnouncementInterruption($announcementInterruption = null)
    {
        $this->announcementInterruption = ($announcementInterruption InstanceOf PreAlertingAnnouncementInterrupt)
             ? $announcementInterruption
             : new PreAlertingAnnouncementInterrupt($announcementInterruption);
        $this->announcementInterruption->setElementName('announcementInterruption');
        return $this;
    }

    /**
     * 
     * @return PreAlertingAnnouncementInterrupt $announcementInterruption
     */
    public function getAnnouncementInterruption()
    {
        return ($this->announcementInterruption)
            ? $this->announcementInterruption->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence = null)
    {
        $this->interruptionDigitSequence = ($interruptionDigitSequence InstanceOf PreAlertingAnnouncementInterruptDigits)
             ? $interruptionDigitSequence
             : new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
        $this->interruptionDigitSequence->setElementName('interruptionDigitSequence');
        return $this;
    }

    /**
     * 
     * @return PreAlertingAnnouncementInterruptDigits $interruptionDigitSequence
     */
    public function getInterruptionDigitSequence()
    {
        return ($this->interruptionDigitSequence)
            ? $this->interruptionDigitSequence->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setElementName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioSelection
     */
    public function getAudioSelection()
    {
        return ($this->audioSelection)
            ? $this->audioSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf ExtendedMediaFileResource)
             ? $audioFile
             : new ExtendedMediaFileResource($audioFile);
        $this->audioFile->setElementName('audioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setElementName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoSelection
     */
    public function getVideoSelection()
    {
        return ($this->videoSelection)
            ? $this->videoSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf ExtendedMediaFileResource)
             ? $videoFile
             : new ExtendedMediaFileResource($videoFile);
        $this->videoFile->setElementName('videoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}
