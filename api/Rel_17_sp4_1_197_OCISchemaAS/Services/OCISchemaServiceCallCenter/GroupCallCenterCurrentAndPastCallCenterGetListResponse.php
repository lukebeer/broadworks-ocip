<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterCurrentAndPastCallCenterGetListRequest.
 */
class GroupCallCenterCurrentAndPastCallCenterGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'GroupCallCenterCurrentAndPastCallCenterGetListResponse';
    protected $serviceUserId        = null;
    protected $deletedServiceUserId = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastCallCenterGetListResponse $response
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
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDeletedServiceUserId($deletedServiceUserId = null)
    {
        if (!$deletedServiceUserId) return $this;
        $this->deletedServiceUserId = ($deletedServiceUserId InstanceOf UserId)
             ? $deletedServiceUserId
             : new UserId($deletedServiceUserId);
        $this->deletedServiceUserId->setName('deletedServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $deletedServiceUserId
     */
    public function getDeletedServiceUserId()
    {
        return $this->deletedServiceUserId->getValue();
    }
}
