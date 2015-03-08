<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierNameModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies the currently configured carriers for a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupPreferredCarrierGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serviceProviderId    = null;
    protected $groupId              = null;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
          $intraLataCarrier = null,
          $interLataCarrier = null,
          $internationalCarrier = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function setIntraLataCarrier(GroupPreferredCarrierNameModify $intraLataCarrier = null)
    {
        $this->intraLataCarrier =  $intraLataCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function setInterLataCarrier(GroupPreferredCarrierNameModify $interLataCarrier = null)
    {
        $this->interLataCarrier =  $interLataCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function setInternationalCarrier(GroupPreferredCarrierNameModify $internationalCarrier = null)
    {
        $this->internationalCarrier =  $internationalCarrier;
    }

    /**
     * Group can either use it's service provider/enterprise's preferred carrier or use it's own.
     *         You can use the Service Provider preferred carrier without clearing the group
     *         carrier name -- in this case, the group carrier name is retained.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
