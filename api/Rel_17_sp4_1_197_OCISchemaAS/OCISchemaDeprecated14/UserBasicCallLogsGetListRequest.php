<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\BasicCallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserBasicCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserBasicCallLogsGetListRequest14sp4
 */
class UserBasicCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserBasicCallLogsGetListResponse';
    public    $name = 'UserBasicCallLogsGetListRequest';
    protected $userId;
    protected $callLogType;

    public function __construct(
         $userId = '',
         $callLogType = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserBasicCallLogsGetListResponse $response
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf BasicCallLogsType)
             ? $callLogType
             : new BasicCallLogsType($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return BasicCallLogsType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType) ? $this->callLogType->getValue() : null;
    }
}
