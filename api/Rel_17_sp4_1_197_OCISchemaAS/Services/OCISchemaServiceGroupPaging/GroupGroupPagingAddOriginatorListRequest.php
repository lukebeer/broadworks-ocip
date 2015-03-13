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
 * Add originator(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingAddOriginatorListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'GroupGroupPagingAddOriginatorListRequest';
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
     * @return UserId $originatorUserId
     */
    public function getOriginatorUserId()
    {
        return $this->originatorUserId->getValue();
    }
}
