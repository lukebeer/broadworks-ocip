<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the target list for a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyTargetListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGroupPagingModifyTargetListRequest';
    protected $serviceUserId;
    protected $targetUserIdList;

    public function __construct(
         $serviceUserId = '',
         $targetUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTargetUserIdList($targetUserIdList);
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
    public function setTargetUserIdList(ReplacementUserIdList $targetUserIdList = null)
    {
        $this->targetUserIdList = ($targetUserIdList InstanceOf ReplacementUserIdList)
             ? $targetUserIdList
             : new ReplacementUserIdList($targetUserIdList);
        $this->targetUserIdList->setElementName('targetUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $targetUserIdList
     */
    public function getTargetUserIdList()
    {
        return $this->targetUserIdList;
    }
}
