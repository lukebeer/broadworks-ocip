<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Replace the BroadWorks Receptionist - Enterprise monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksReceptionistEnterpriseModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksReceptionistEnterpriseModifyRequest';
    protected $userId;
    protected $monitoredUserIdList;

    public function __construct(
         $userId = '',
         $monitoredUserIdList = null
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
}
