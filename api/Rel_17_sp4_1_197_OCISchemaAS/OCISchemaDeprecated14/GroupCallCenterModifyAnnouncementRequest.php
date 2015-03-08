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


/**
     * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
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
          $entranceMessageAudioFile = null,
          $entranceMessageVideoFile = null,
         $periodicComfortMessageSelection = null,
          $periodicComfortMessageAudioFile = null,
          $periodicComfortMessageVideoFile = null,
         $onHoldMessageSelection = null,
          $onHoldMessageAudioFile = null,
          $onHoldMessageVideoFile = null
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Call Center Announcement Selection.
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getEntranceMessageSelection()
    {
        return (!$this->entranceMessageSelection) ?: $this->entranceMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setEntranceMessageAudioFile(LabeledFileResource $entranceMessageAudioFile = null)
    {
        $this->entranceMessageAudioFile =  $entranceMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setEntranceMessageVideoFile(LabeledFileResource $entranceMessageVideoFile = null)
    {
        $this->entranceMessageVideoFile =  $entranceMessageVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->getValue();
    }

    /**
     * Call Center Announcement Selection.
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getPeriodicComfortMessageSelection()
    {
        return (!$this->periodicComfortMessageSelection) ?: $this->periodicComfortMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setPeriodicComfortMessageAudioFile(LabeledFileResource $periodicComfortMessageAudioFile = null)
    {
        $this->periodicComfortMessageAudioFile =  $periodicComfortMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setPeriodicComfortMessageVideoFile(LabeledFileResource $periodicComfortMessageVideoFile = null)
    {
        $this->periodicComfortMessageVideoFile =  $periodicComfortMessageVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->getValue();
    }

    /**
     * Call Center Announcement Selection.
     */
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
    }

    /**
     * Call Center Announcement Selection.
     */
    public function getOnHoldMessageSelection()
    {
        return (!$this->onHoldMessageSelection) ?: $this->onHoldMessageSelection->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setOnHoldMessageAudioFile(LabeledFileResource $onHoldMessageAudioFile = null)
    {
        $this->onHoldMessageAudioFile =  $onHoldMessageAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getOnHoldMessageAudioFile()
    {
        return (!$this->onHoldMessageAudioFile) ?: $this->onHoldMessageAudioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setOnHoldMessageVideoFile(LabeledFileResource $onHoldMessageVideoFile = null)
    {
        $this->onHoldMessageVideoFile =  $onHoldMessageVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getOnHoldMessageVideoFile()
    {
        return (!$this->onHoldMessageVideoFile) ?: $this->onHoldMessageVideoFile->getValue();
    }
}
