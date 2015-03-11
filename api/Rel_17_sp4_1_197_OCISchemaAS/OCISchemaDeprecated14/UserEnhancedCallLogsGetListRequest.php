<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\EnhancedCallLogsMaxLoggedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\EnhancedCallLogsOffset;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnhancedCallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserEnhancedCallLogsGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *         by specifying a starting offset and the number of calls to get.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserEnhancedCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserEnhancedCallLogsGetListRequest14sp4
 */
class UserEnhancedCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserEnhancedCallLogsGetListResponse';
    public    $name           = 'UserEnhancedCallLogsGetListRequest';
    protected $userId         = null;
    protected $callLogType    = null;
    protected $startingOffset = null;
    protected $numCalls       = null;

    public function __construct(
         $userId,
         $callLogType = null,
         $startingOffset,
         $numCalls
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setStartingOffset($startingOffset);
        $this->setNumCalls($numCalls);
    }

    /**
     * @return UserEnhancedCallLogsGetListResponse
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
    public function setCallLogType($callLogType = null)
    {
        if (!$callLogType) return $this;
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsType)
             ? $callLogType
             : new EnhancedCallLogsType($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsType
     */
    public function getCallLogType()
    {
        return $this->callLogType->getValue();
    }

    /**
     * 
     */
    public function setStartingOffset($startingOffset = null)
    {
        if (!$startingOffset) return $this;
        $this->startingOffset = ($startingOffset InstanceOf EnhancedCallLogsOffset)
             ? $startingOffset
             : new EnhancedCallLogsOffset($startingOffset);
        $this->startingOffset->setName('startingOffset');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsOffset
     */
    public function getStartingOffset()
    {
        return $this->startingOffset->getValue();
    }

    /**
     * 
     */
    public function setNumCalls($numCalls = null)
    {
        if (!$numCalls) return $this;
        $this->numCalls = ($numCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $numCalls
             : new EnhancedCallLogsMaxLoggedCalls($numCalls);
        $this->numCalls->setName('numCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls
     */
    public function getNumCalls()
    {
        return $this->numCalls->getValue();
    }
}
