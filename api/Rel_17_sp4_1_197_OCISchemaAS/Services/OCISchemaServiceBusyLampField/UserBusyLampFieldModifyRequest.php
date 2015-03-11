<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the settings for the busy lamp field service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBusyLampFieldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserBusyLampFieldModifyRequest';
    protected $userId                     = null;
    protected $listURI                    = null;
    protected $monitoredUserIdList        = null;
    protected $enableCallParkNotification = null;

    public function __construct(
         $userId,
         $listURI = null,
         ReplacementUserIdList $monitoredUserIdList = null,
         $enableCallParkNotification = null
    ) {
        $this->setUserId($userId);
        $this->setListURI($listURI);
        $this->setMonitoredUserIdList($monitoredUserIdList);
        $this->setEnableCallParkNotification($enableCallParkNotification);
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
    public function setListURI($listURI = null)
    {
        if (!$listURI) return $this;
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
        $this->listURI->setName('listURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI
     */
    public function getListURI()
    {
        return $this->listURI->getValue();
    }

    /**
     * 
     */
    public function setMonitoredUserIdList(ReplacementUserIdList $monitoredUserIdList = null)
    {
        if (!$monitoredUserIdList) return $this;
        $this->monitoredUserIdList = $monitoredUserIdList;
        $this->monitoredUserIdList->setName('monitoredUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
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
        if (!$enableCallParkNotification) return $this;
        $this->enableCallParkNotification = new PrimitiveType($enableCallParkNotification);
        $this->enableCallParkNotification->setName('enableCallParkNotification');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification->getValue();
    }
}
