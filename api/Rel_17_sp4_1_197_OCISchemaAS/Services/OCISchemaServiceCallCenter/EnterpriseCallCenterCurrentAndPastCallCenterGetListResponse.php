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
 * Response to the EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest.
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse';
    protected $serviceUserId;
    protected $deletedServiceUserId;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse $response
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
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeletedServiceUserId($deletedServiceUserId = null)
    {
        $this->deletedServiceUserId = ($deletedServiceUserId InstanceOf UserId)
             ? $deletedServiceUserId
             : new UserId($deletedServiceUserId);
        $this->deletedServiceUserId->setElementName('deletedServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $deletedServiceUserId
     */
    public function getDeletedServiceUserId()
    {
        return ($this->deletedServiceUserId)
            ? $this->deletedServiceUserId->getElementValue()
            : null;
    }
}
