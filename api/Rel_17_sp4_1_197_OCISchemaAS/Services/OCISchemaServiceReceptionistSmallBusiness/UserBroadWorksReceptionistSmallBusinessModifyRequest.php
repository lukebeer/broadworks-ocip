<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistSmallBusiness; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replace the Receptionist Small Business monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksReceptionistSmallBusinessModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'UserBroadWorksReceptionistSmallBusinessModifyRequest';
    protected $userId              = null;
    protected $monitoredUserIdList = null;

    public function __construct(
         $userId,
         ReplacementUserIdList $monitoredUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setMonitoredUserIdList($monitoredUserIdList);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return ReplacementUserIdList $monitoredUserIdList
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }
}
