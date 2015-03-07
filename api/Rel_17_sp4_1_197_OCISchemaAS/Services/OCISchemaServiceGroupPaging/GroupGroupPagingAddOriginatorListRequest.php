<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add originator(s) to a paging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingAddOriginatorListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceUserId     = null;
    protected $originatorUserId  = null;

    public function __construct(
         $serviceUserId,
         $originatorUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setOriginatorUserId($originatorUserId);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setOriginatorUserId($originatorUserId = null)
    {
        $this->originatorUserId = ($originatorUserId InstanceOf UserId)
             ? $originatorUserId
             : new UserId($originatorUserId);
    }

    public function getOriginatorUserId()
    {
        return (!$this->originatorUserId) ?: $this->originatorUserId->value();
    }
}
