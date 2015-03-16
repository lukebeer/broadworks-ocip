<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptInboundCall;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
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
 * Response to the UserInterceptUserGetRequest16sp1.
 */
class UserInterceptUserGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInterceptUserGetResponse16sp1';
    protected $isActive;
    protected $announcementSelection;
    protected $audioFileDescription;
    protected $audioMediaType;
    protected $videoFileDescription;
    protected $videoMediaType;
    protected $playNewPhoneNumber;
    protected $newPhoneNumber;
    protected $transferOnZeroToPhoneNumber;
    protected $transferPhoneNumber;
    protected $rerouteOutboundCalls;
    protected $outboundReroutePhoneNumber;
    protected $allowOutboundLocalCalls;
    protected $inboundCallMode;
    protected $alternateBlockingAnnouncement;
    protected $routeToVoiceMail;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\UserInterceptUserGetResponse16sp1 $response
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
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
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
        return ($this->announcementSelection) ? $this->announcementSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
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
        return ($this->audioFileDescription) ? $this->audioFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
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
        return ($this->audioMediaType) ? $this->audioMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
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
        return ($this->videoFileDescription) ? $this->videoFileDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
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
        return ($this->videoMediaType) ? $this->videoMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber = null)
    {
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
        return ($this->playNewPhoneNumber) ? $this->playNewPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
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
        return ($this->newPhoneNumber) ? $this->newPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
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
        return ($this->transferOnZeroToPhoneNumber) ? $this->transferOnZeroToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
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
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls = null)
    {
        $this->rerouteOutboundCalls = new PrimitiveType($rerouteOutboundCalls);
        $this->rerouteOutboundCalls->setName('rerouteOutboundCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $rerouteOutboundCalls
     */
    public function getRerouteOutboundCalls()
    {
        return ($this->rerouteOutboundCalls) ? $this->rerouteOutboundCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        $this->outboundReroutePhoneNumber = ($outboundReroutePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundReroutePhoneNumber
             : new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
        $this->outboundReroutePhoneNumber->setName('outboundReroutePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $outboundReroutePhoneNumber
     */
    public function getOutboundReroutePhoneNumber()
    {
        return ($this->outboundReroutePhoneNumber) ? $this->outboundReroutePhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls = null)
    {
        $this->allowOutboundLocalCalls = new PrimitiveType($allowOutboundLocalCalls);
        $this->allowOutboundLocalCalls->setName('allowOutboundLocalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutboundLocalCalls
     */
    public function getAllowOutboundLocalCalls()
    {
        return ($this->allowOutboundLocalCalls) ? $this->allowOutboundLocalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setInboundCallMode($inboundCallMode = null)
    {
        $this->inboundCallMode = ($inboundCallMode InstanceOf InterceptInboundCall)
             ? $inboundCallMode
             : new InterceptInboundCall($inboundCallMode);
        $this->inboundCallMode->setName('inboundCallMode');
        return $this;
    }

    /**
     * 
     * @return InterceptInboundCall $inboundCallMode
     */
    public function getInboundCallMode()
    {
        return ($this->inboundCallMode) ? $this->inboundCallMode->getValue() : null;
    }

    /**
     * 
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement = null)
    {
        $this->alternateBlockingAnnouncement = new PrimitiveType($alternateBlockingAnnouncement);
        $this->alternateBlockingAnnouncement->setName('alternateBlockingAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $alternateBlockingAnnouncement
     */
    public function getAlternateBlockingAnnouncement()
    {
        return ($this->alternateBlockingAnnouncement) ? $this->alternateBlockingAnnouncement->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteToVoiceMail($routeToVoiceMail = null)
    {
        $this->routeToVoiceMail = new PrimitiveType($routeToVoiceMail);
        $this->routeToVoiceMail->setName('routeToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $routeToVoiceMail
     */
    public function getRouteToVoiceMail()
    {
        return ($this->routeToVoiceMail) ? $this->routeToVoiceMail->getValue() : null;
    }
}
