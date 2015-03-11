<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptInboundCall;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserInterceptUserModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                          = 'UserInterceptUserModifyRequest16';
    protected $userId                        = null;
    protected $isActive                      = null;
    protected $announcementSelection         = null;
    protected $audioFile                     = null;
    protected $videoFile                     = null;
    protected $playNewPhoneNumber            = null;
    protected $newPhoneNumber                = null;
    protected $transferOnZeroToPhoneNumber   = null;
    protected $transferPhoneNumber           = null;
    protected $rerouteOutboundCalls          = null;
    protected $outboundReroutePhoneNumber    = null;
    protected $allowOutboundLocalCalls       = null;
    protected $inboundCallMode               = null;
    protected $alternateBlockingAnnouncement = null;
    protected $routeToVoiceMail              = null;

    public function __construct(
         $userId,
         $isActive = null,
         $announcementSelection = null,
         LabeledMediaFileResource $audioFile = null,
         LabeledMediaFileResource $videoFile = null,
         $playNewPhoneNumber = null,
         $newPhoneNumber = null,
         $transferOnZeroToPhoneNumber = null,
         $transferPhoneNumber = null,
         $rerouteOutboundCalls = null,
         $outboundReroutePhoneNumber = null,
         $allowOutboundLocalCalls = null,
         $inboundCallMode = null,
         $alternateBlockingAnnouncement = null,
         $routeToVoiceMail = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
        $this->setPlayNewPhoneNumber($playNewPhoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setRerouteOutboundCalls($rerouteOutboundCalls);
        $this->setOutboundReroutePhoneNumber($outboundReroutePhoneNumber);
        $this->setAllowOutboundLocalCalls($allowOutboundLocalCalls);
        $this->setInboundCallMode($inboundCallMode);
        $this->setAlternateBlockingAnnouncement($alternateBlockingAnnouncement);
        $this->setRouteToVoiceMail($routeToVoiceMail);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return xs:boolean
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
     * @return AnnouncementSelection
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFile(LabeledMediaFileResource $audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = $audioFile;
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoFile(LabeledMediaFileResource $videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = $videoFile;
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile;
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
     * @return xs:boolean
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
     * @return DN
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
     * @return xs:boolean
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
     * @return OutgoingDN
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls = null)
    {
        if (!$rerouteOutboundCalls) return $this;
        $this->rerouteOutboundCalls = new PrimitiveType($rerouteOutboundCalls);
        $this->rerouteOutboundCalls->setName('rerouteOutboundCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRerouteOutboundCalls()
    {
        return $this->rerouteOutboundCalls->getValue();
    }

    /**
     * 
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        if (!$outboundReroutePhoneNumber) return $this;
        $this->outboundReroutePhoneNumber = ($outboundReroutePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundReroutePhoneNumber
             : new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
        $this->outboundReroutePhoneNumber->setName('outboundReroutePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getOutboundReroutePhoneNumber()
    {
        return $this->outboundReroutePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls = null)
    {
        if (!$allowOutboundLocalCalls) return $this;
        $this->allowOutboundLocalCalls = new PrimitiveType($allowOutboundLocalCalls);
        $this->allowOutboundLocalCalls->setName('allowOutboundLocalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOutboundLocalCalls()
    {
        return $this->allowOutboundLocalCalls->getValue();
    }

    /**
     * 
     */
    public function setInboundCallMode($inboundCallMode = null)
    {
        if (!$inboundCallMode) return $this;
        $this->inboundCallMode = ($inboundCallMode InstanceOf InterceptInboundCall)
             ? $inboundCallMode
             : new InterceptInboundCall($inboundCallMode);
        $this->inboundCallMode->setName('inboundCallMode');
        return $this;
    }

    /**
     * 
     * @return InterceptInboundCall
     */
    public function getInboundCallMode()
    {
        return $this->inboundCallMode->getValue();
    }

    /**
     * 
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement = null)
    {
        if (!$alternateBlockingAnnouncement) return $this;
        $this->alternateBlockingAnnouncement = new PrimitiveType($alternateBlockingAnnouncement);
        $this->alternateBlockingAnnouncement->setName('alternateBlockingAnnouncement');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlternateBlockingAnnouncement()
    {
        return $this->alternateBlockingAnnouncement->getValue();
    }

    /**
     * 
     */
    public function setRouteToVoiceMail($routeToVoiceMail = null)
    {
        if (!$routeToVoiceMail) return $this;
        $this->routeToVoiceMail = new PrimitiveType($routeToVoiceMail);
        $this->routeToVoiceMail->setName('routeToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRouteToVoiceMail()
    {
        return $this->routeToVoiceMail->getValue();
    }
}
