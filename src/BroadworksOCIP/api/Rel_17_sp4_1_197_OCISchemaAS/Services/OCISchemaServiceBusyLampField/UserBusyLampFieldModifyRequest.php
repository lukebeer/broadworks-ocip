<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the settings for the busy lamp field service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBusyLampFieldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBusyLampFieldModifyRequest';
    protected $userId;
    protected $listURI;
    protected $monitoredUserIdList;
    protected $enableCallParkNotification;

    public function __construct(
         $userId = '',
         $listURI = null,
         $monitoredUserIdList = null,
         $enableCallParkNotification = null
    ) {
        $this->setUserId($userId);
        $this->setListURI($listURI);
        $this->setMonitoredUserIdList($monitoredUserIdList);
        $this->setEnableCallParkNotification($enableCallParkNotification);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setListURI($listURI = null)
    {
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
        $this->listURI->setElementName('listURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $listURI
     */
    public function getListURI()
    {
        return ($this->listURI)
            ? $this->listURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMonitoredUserIdList(ReplacementUserIdList $monitoredUserIdList = null)
    {
        $this->monitoredUserIdList = ($monitoredUserIdList InstanceOf ReplacementUserIdList)
             ? $monitoredUserIdList
             : new ReplacementUserIdList($monitoredUserIdList);
        $this->monitoredUserIdList->setElementName('monitoredUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $monitoredUserIdList
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        $this->enableCallParkNotification = new PrimitiveType($enableCallParkNotification);
        $this->enableCallParkNotification->setElementName('enableCallParkNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallParkNotification
     */
    public function getEnableCallParkNotification()
    {
        return ($this->enableCallParkNotification)
            ? $this->enableCallParkNotification->getElementValue()
            : null;
    }
}
