<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\EnhancedCallLogsMaxLoggedCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\EnhancedCallLogsOffset;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnhancedCallLogsType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *         by specifying a starting offset and the number of calls to get.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserEnhancedCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserEnhancedCallLogsGetListRequest14sp4
 */
class UserEnhancedCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserEnhancedCallLogsGetListResponse';
    public    $elementName = 'UserEnhancedCallLogsGetListRequest';
    protected $userId;
    protected $callLogType;
    protected $startingOffset;
    protected $numCalls;

    public function __construct(
         $userId = '',
         $callLogType = null,
         $startingOffset = '',
         $numCalls = ''
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setStartingOffset($startingOffset);
        $this->setNumCalls($numCalls);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserEnhancedCallLogsGetListResponse $response
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
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsType)
             ? $callLogType
             : new EnhancedCallLogsType($callLogType);
        $this->callLogType->setElementName('callLogType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType)
            ? $this->callLogType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartingOffset($startingOffset = null)
    {
        $this->startingOffset = ($startingOffset InstanceOf EnhancedCallLogsOffset)
             ? $startingOffset
             : new EnhancedCallLogsOffset($startingOffset);
        $this->startingOffset->setElementName('startingOffset');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsOffset $startingOffset
     */
    public function getStartingOffset()
    {
        return ($this->startingOffset)
            ? $this->startingOffset->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumCalls($numCalls = null)
    {
        $this->numCalls = ($numCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $numCalls
             : new EnhancedCallLogsMaxLoggedCalls($numCalls);
        $this->numCalls->setElementName('numCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls $numCalls
     */
    public function getNumCalls()
    {
        return ($this->numCalls)
            ? $this->numCalls->getElementValue()
            : null;
    }
}
