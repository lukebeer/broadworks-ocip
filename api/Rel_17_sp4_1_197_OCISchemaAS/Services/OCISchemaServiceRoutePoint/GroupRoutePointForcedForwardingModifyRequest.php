<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a route point's forced forwarding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointForcedForwardingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointForcedForwardingModifyRequest';
    protected $serviceUserId;
    protected $isActive;
    protected $forwardToPhoneNumber;
    protected $playAnnouncementBeforeForwarding;
    protected $audioMessageSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $videoMessageSelection;
    protected $videoUrlList;
    protected $videoFileList;

    public function __construct(
         $serviceUserId = '',
         $isActive = null,
         $forwardToPhoneNumber = null,
         $playAnnouncementBeforeForwarding = null,
         $audioMessageSelection = null,
         CallCenterAnnouncementURLListModify $audioUrlList = null,
         CallCenterAnnouncementFileListModify $audioFileList = null,
         $videoMessageSelection = null,
         CallCenterAnnouncementURLListModify $videoUrlList = null,
         CallCenterAnnouncementFileListModify $videoFileList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding);
        $this->setAudioMessageSelection($audioMessageSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setVideoMessageSelection($videoMessageSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
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
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber) ? $this->forwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementBeforeForwarding($playAnnouncementBeforeForwarding = null)
    {
        $this->playAnnouncementBeforeForwarding = new PrimitiveType($playAnnouncementBeforeForwarding);
        $this->playAnnouncementBeforeForwarding->setName('playAnnouncementBeforeForwarding');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementBeforeForwarding
     */
    public function getPlayAnnouncementBeforeForwarding()
    {
        return ($this->playAnnouncementBeforeForwarding) ? $this->playAnnouncementBeforeForwarding->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection) ? $this->audioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLListModify $audioUrlList = null)
    {
        $this->audioUrlList = ($audioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $audioUrlList
             : new CallCenterAnnouncementURLListModify($audioUrlList);
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $audioUrlList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementFileListModify $audioFileList = null)
    {
        $this->audioFileList = ($audioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $audioFileList
             : new CallCenterAnnouncementFileListModify($audioFileList);
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $audioFileList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection) ? $this->videoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLListModify $videoUrlList = null)
    {
        $this->videoUrlList = ($videoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $videoUrlList
             : new CallCenterAnnouncementURLListModify($videoUrlList);
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $videoUrlList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementFileListModify $videoFileList = null)
    {
        $this->videoFileList = ($videoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $videoFileList
             : new CallCenterAnnouncementFileListModify($videoFileList);
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $videoFileList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }
}
