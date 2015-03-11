<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the user-level settings for the BroadWorks Anywhere service for a specified user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserBroadWorksAnywhereModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'UserBroadWorksAnywhereModifyRequest';
    protected $userId                               = null;
    protected $alertAllLocationsForClickToDialCalls = null;
    protected $alertAllLocationsForGroupPagingCalls = null;

    public function __construct(
         $userId,
         $alertAllLocationsForClickToDialCalls = null,
         $alertAllLocationsForGroupPagingCalls = null
    ) {
        $this->setUserId($userId);
        $this->setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls);
        $this->setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls);
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
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls = null)
    {
        if (!$alertAllLocationsForClickToDialCalls) return $this;
        $this->alertAllLocationsForClickToDialCalls = new PrimitiveType($alertAllLocationsForClickToDialCalls);
        $this->alertAllLocationsForClickToDialCalls->setName('alertAllLocationsForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls = null)
    {
        if (!$alertAllLocationsForGroupPagingCalls) return $this;
        $this->alertAllLocationsForGroupPagingCalls = new PrimitiveType($alertAllLocationsForGroupPagingCalls);
        $this->alertAllLocationsForGroupPagingCalls->setName('alertAllLocationsForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return $this->alertAllLocationsForGroupPagingCalls->getValue();
    }
}
