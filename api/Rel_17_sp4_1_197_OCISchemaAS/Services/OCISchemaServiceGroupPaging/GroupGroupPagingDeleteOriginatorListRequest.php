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
 * Delete originator(s) from a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingDeleteOriginatorListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'GroupGroupPagingDeleteOriginatorListRequest';
    protected $serviceUserId    = null;
    protected $originatorUserId = null;

    public function __construct(
         $serviceUserId,
         $originatorUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setOriginatorUserId($originatorUserId);
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
    public function setOriginatorUserId($originatorUserId = null)
    {
        if (!$originatorUserId) return $this;
        $this->originatorUserId = ($originatorUserId InstanceOf UserId)
             ? $originatorUserId
             : new UserId($originatorUserId);
        $this->originatorUserId->setName('originatorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getOriginatorUserId()
    {
        return $this->originatorUserId->getValue();
    }
}
