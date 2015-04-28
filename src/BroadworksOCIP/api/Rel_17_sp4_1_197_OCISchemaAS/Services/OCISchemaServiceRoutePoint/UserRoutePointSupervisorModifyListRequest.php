<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the Route Point supervisor list for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserRoutePointSupervisorModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserRoutePointSupervisorModifyListRequest';
    protected $userId;
    protected $supervisorUserIdList;

    public function __construct(
         $userId = '',
         $supervisorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setSupervisorUserIdList($supervisorUserIdList);
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
    public function setSupervisorUserIdList(ReplacementUserIdList $supervisorUserIdList = null)
    {
        $this->supervisorUserIdList = ($supervisorUserIdList InstanceOf ReplacementUserIdList)
             ? $supervisorUserIdList
             : new ReplacementUserIdList($supervisorUserIdList);
        $this->supervisorUserIdList->setElementName('supervisorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $supervisorUserIdList
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }
}
