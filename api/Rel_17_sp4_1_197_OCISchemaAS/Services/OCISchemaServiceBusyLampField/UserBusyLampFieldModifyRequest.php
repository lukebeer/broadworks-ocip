<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBusyLampField; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the settings for the busy lamp field service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBusyLampFieldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $listURI=null,
             ReplacementUserIdList $monitoredUserIdList=null,
             $enableCallParkNotification=null
    ) {
        $this->userId                     = new UserId($userId);
        $this->listURI                    = new SIPURI($listURI);
        $this->monitoredUserIdList        = $monitoredUserIdList;
        $this->enableCallParkNotification = $enableCallParkNotification;
        $this->args                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setListURI($listURI)
    {
        $listURI and $this->listURI = new SIPURI($listURI);
    }

    public function getListURI()
    {
        return (!$this->listURI) ?: $this->listURI->value();
    }

    public function setMonitoredUserIdList($monitoredUserIdList)
    {
        $monitoredUserIdList and $this->monitoredUserIdList = new ReplacementUserIdList($monitoredUserIdList);
    }

    public function getMonitoredUserIdList()
    {
        return (!$this->monitoredUserIdList) ?: $this->monitoredUserIdList->value();
    }

    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $enableCallParkNotification and $this->enableCallParkNotification = new xs:boolean($enableCallParkNotification);
    }

    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->value();
    }
}
