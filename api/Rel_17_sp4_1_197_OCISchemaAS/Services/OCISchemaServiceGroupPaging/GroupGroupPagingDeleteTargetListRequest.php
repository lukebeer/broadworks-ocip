<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete target(s) from a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingDeleteTargetListRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'GroupGroupPagingDeleteTargetListRequest';
    protected $serviceUserId = null;
    protected $targetUserId  = null;

    public function __construct(
         $serviceUserId,
         $targetUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTargetUserId($targetUserId);
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
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setTargetUserId($targetUserId = null)
    {
        if (!$targetUserId) return $this;
        $this->targetUserId = ($targetUserId InstanceOf UserId)
             ? $targetUserId
             : new UserId($targetUserId);
        $this->targetUserId->setName('targetUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getTargetUserId()
    {
        return $this->targetUserId->getValue();
    }
}
