<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCallTypeGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallTypeGetListRequest.
 */
class SystemCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $callType = null;

    /**
     * @return SystemCallTypeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * System Call Type
     */
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf SystemCallType)
             ? $callType
             : new SystemCallType($callType);
    }

    /**
     * System Call Type
     */
    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->getValue();
    }
}
