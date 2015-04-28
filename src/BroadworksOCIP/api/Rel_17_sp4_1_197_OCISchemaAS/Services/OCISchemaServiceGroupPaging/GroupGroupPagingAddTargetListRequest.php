<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add target(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingAddTargetListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGroupPagingAddTargetListRequest';
    protected $serviceUserId;
    protected $targetUserId;

    public function __construct(
         $serviceUserId = '',
         $targetUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTargetUserId($targetUserId);
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
    public function setTargetUserId($targetUserId = null)
    {
        $this->targetUserId = ($targetUserId InstanceOf UserId)
             ? $targetUserId
             : new UserId($targetUserId);
        $this->targetUserId->setElementName('targetUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $targetUserId
     */
    public function getTargetUserId()
    {
        return ($this->targetUserId)
            ? $this->targetUserId->getElementValue()
            : null;
    }
}
