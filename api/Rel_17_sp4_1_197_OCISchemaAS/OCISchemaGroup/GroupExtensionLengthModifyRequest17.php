<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupExtensionLengthModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupExtensionLengthModifyRequest17';
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $minExtensionLength     = null;
    protected $maxExtensionLength     = null;
    protected $defaultExtensionLength = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $minExtensionLength = null,
         $maxExtensionLength = null,
         $defaultExtensionLength = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setMinExtensionLength($minExtensionLength);
        $this->setMaxExtensionLength($maxExtensionLength);
        $this->setDefaultExtensionLength($defaultExtensionLength);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        if (!$minExtensionLength) return $this;
        $this->minExtensionLength = ($minExtensionLength InstanceOf ExtensionLength)
             ? $minExtensionLength
             : new ExtensionLength($minExtensionLength);
        $this->minExtensionLength->setName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength->getValue();
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        if (!$maxExtensionLength) return $this;
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf ExtensionLength)
             ? $maxExtensionLength
             : new ExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength->getValue();
    }

    /**
     * 
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        if (!$defaultExtensionLength) return $this;
        $this->defaultExtensionLength = ($defaultExtensionLength InstanceOf ExtensionLength)
             ? $defaultExtensionLength
             : new ExtensionLength($defaultExtensionLength);
        $this->defaultExtensionLength->setName('defaultExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $defaultExtensionLength
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength->getValue();
    }
}
