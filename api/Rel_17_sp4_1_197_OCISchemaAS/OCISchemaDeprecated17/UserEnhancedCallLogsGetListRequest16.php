<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl.
 *         The response is either a UserEnhancedCallLogsGetListResponse16 or an ErrorResponse.
 */
class UserEnhancedCallLogsGetListRequest16 extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16';
    public    $name                  = 'UserEnhancedCallLogsGetListRequest16';
    protected $userId                = null;
    protected $callLogType           = null;
    protected $responsePagingControl = null;

    public function __construct(
         $userId,
         $callLogType = null,
         ResponsePagingControl $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16 $response
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
    public function setCallLogType($callLogType = null)
    {
        if (!$callLogType) return $this;
        $this->callLogType = ($callLogType InstanceOf CallLogsType)
             ? $callLogType
             : new CallLogsType($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return CallLogsType $callLogType
     */
    public function getCallLogType()
    {
        return $this->callLogType->getValue();
    }

    /**
     * 
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        if (!$responsePagingControl) return $this;
        $this->responsePagingControl = $responsePagingControl;
        $this->responsePagingControl->setName('responsePagingControl');
        return $this;
    }

    /**
     * 
     * @return ResponsePagingControl $responsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }
}
