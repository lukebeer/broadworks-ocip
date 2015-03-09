<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterruptDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreAlertingAnnouncement\PreAlertingAnnouncementInterrupt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreAlertingAnnouncement\GroupPreAlertingAnnouncementModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPreAlertingAnnouncementModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $announcementInterruption  = null;
    protected $interruptionDigitSequence = null;
    protected $audioSelection            = null;
    protected $audioFile                 = null;
    protected $videoSelection            = null;
    protected $videoFile                 = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $announcementInterruption = null,
         $interruptionDigitSequence = null,
         $audioSelection = null,
          $audioFile = null,
         $videoSelection = null,
          $videoFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setAnnouncementInterruption($announcementInterruption);
        $this->setInterruptionDigitSequence($interruptionDigitSequence);
        $this->setAudioSelection($audioSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoSelection($videoSelection);
        $this->setVideoFile($videoFile);
    }

    /**
     * @return GroupPreAlertingAnnouncementModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Pre-alerting Announcement interrupt type.
     */
    public function setAnnouncementInterruption($announcementInterruption = null)
    {
        $this->announcementInterruption = ($announcementInterruption InstanceOf PreAlertingAnnouncementInterrupt)
             ? $announcementInterruption
             : new PreAlertingAnnouncementInterrupt($announcementInterruption);
    }

    /**
     * Pre-alerting Announcement interrupt type.
     */
    public function getAnnouncementInterruption()
    {
        return (!$this->announcementInterruption) ?: $this->announcementInterruption->getValue();
    }

    /**
     * Pre-alerting Announcement Interrupt digit sequence.
     *         The Interrupt digit sequence may contain digits 0-9, *, and #.
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence = null)
    {
        $this->interruptionDigitSequence = ($interruptionDigitSequence InstanceOf PreAlertingAnnouncementInterruptDigits)
             ? $interruptionDigitSequence
             : new PreAlertingAnnouncementInterruptDigits($interruptionDigitSequence);
    }

    /**
     * Pre-alerting Announcement Interrupt digit sequence.
     *         The Interrupt digit sequence may contain digits 0-9, *, and #.
     */
    public function getInterruptionDigitSequence()
    {
        return (!$this->interruptionDigitSequence) ?: $this->interruptionDigitSequence->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setAudioSelection($audioSelection = null)
    {
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getAudioSelection()
    {
        return (!$this->audioSelection) ?: $this->audioSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setAudioFile(ExtendedMediaFileResource $audioFile = null)
    {
        $this->audioFile =  $audioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getAudioFile()
    {
        return (!$this->audioFile) ?: $this->audioFile->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setVideoSelection($videoSelection = null)
    {
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getVideoSelection()
    {
        return (!$this->videoSelection) ?: $this->videoSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function setVideoFile(ExtendedMediaFileResource $videoFile = null)
    {
        $this->videoFile =  $videoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *           the contents of a file to transfer and an URL.
     */
    public function getVideoFile()
    {
        return (!$this->videoFile) ?: $this->videoFile->getValue();
    }
}
