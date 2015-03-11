<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the target list for a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyTargetListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'GroupGroupPagingModifyTargetListRequest';
    protected $serviceUserId    = null;
    protected $targetUserIdList = null;

    public function __construct(
         $serviceUserId,
         ReplacementUserIdList $targetUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setTargetUserIdList($targetUserIdList);
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
    public function setTargetUserIdList(ReplacementUserIdList $targetUserIdList = null)
    {
        if (!$targetUserIdList) return $this;
        $this->targetUserIdList = $targetUserIdList;
        $this->targetUserIdList->setName('targetUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getTargetUserIdList()
    {
        return $this->targetUserIdList;
    }
}
