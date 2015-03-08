<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupInterceptGroupGetRequest.
 *         Replaced By: GroupInterceptGroupGetResponse16
 */
class GroupInterceptGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $isActive                    = null;
    protected $announcementSelection       = null;
    protected $audioFileDescription        = null;
    protected $videoFileDescription        = null;
    protected $playNewPhoneNumber          = null;
    protected $newPhoneNumber              = null;
    protected $transferOnZeroToPhoneNumber = null;
    protected $transferPhoneNumber         = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Announcement Selection.
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
    }

    /**
     * Announcement Selection.
     */
    public function getAnnouncementSelection()
    {
        return (!$this->announcementSelection) ?: $this->announcementSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getAudioFileDescription()
    {
        return (!$this->audioFileDescription) ?: $this->audioFileDescription->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getVideoFileDescription()
    {
        return (!$this->videoFileDescription) ?: $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber = null)
    {
        $this->playNewPhoneNumber = (boolean) $playNewPhoneNumber;
    }

    /**
     * 
     */
    public function getPlayNewPhoneNumber()
    {
        return (!$this->playNewPhoneNumber) ?: $this->playNewPhoneNumber->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getNewPhoneNumber()
    {
        return (!$this->newPhoneNumber) ?: $this->newPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = (boolean) $transferOnZeroToPhoneNumber;
    }

    /**
     * 
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->getValue();
    }
}
