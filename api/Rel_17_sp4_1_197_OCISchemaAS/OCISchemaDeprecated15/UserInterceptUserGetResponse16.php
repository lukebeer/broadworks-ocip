<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserInterceptUserGetRequest16.
 *         Replaced By: UserInterceptUserGetResponse16sp1
 */
class UserInterceptUserGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                        = 'UserInterceptUserGetResponse16';
    protected $isActive                    = null;
    protected $announcementSelection       = null;
    protected $audioFileDescription        = null;
    protected $audioMediaType              = null;
    protected $videoFileDescription        = null;
    protected $videoMediaType              = null;
    protected $playNewPhoneNumber          = null;
    protected $newPhoneNumber              = null;
    protected $transferOnZeroToPhoneNumber = null;
    protected $transferPhoneNumber         = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserInterceptUserGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
        if (!$announcementSelection) return $this;
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
        $this->announcementSelection->setName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $announcementSelection
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        if (!$audioFileDescription) return $this;
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        if (!$audioMediaType) return $this;
        $this->audioMediaType = ($audioMediaType InstanceOf MediaFileType)
             ? $audioMediaType
             : new MediaFileType($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $audioMediaType
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType->getValue();
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        if (!$videoFileDescription) return $this;
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        if (!$videoMediaType) return $this;
        $this->videoMediaType = ($videoMediaType InstanceOf MediaFileType)
             ? $videoMediaType
             : new MediaFileType($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $videoMediaType
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType->getValue();
    }

    /**
     * 
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber = null)
    {
        if (!$playNewPhoneNumber) return $this;
        $this->playNewPhoneNumber = new PrimitiveType($playNewPhoneNumber);
        $this->playNewPhoneNumber->setName('playNewPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $playNewPhoneNumber
     */
    public function getPlayNewPhoneNumber()
    {
        return $this->playNewPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        if (!$newPhoneNumber) return $this;
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
        $this->newPhoneNumber->setName('newPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $newPhoneNumber
     */
    public function getNewPhoneNumber()
    {
        return $this->newPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        if (!$transferOnZeroToPhoneNumber) return $this;
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }
}
