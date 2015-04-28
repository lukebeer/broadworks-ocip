<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the group's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupExtensionLengthModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupExtensionLengthModifyRequest17';
    protected $serviceProviderId;
    protected $groupId;
    protected $minExtensionLength;
    protected $maxExtensionLength;
    protected $defaultExtensionLength;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf ExtensionLength)
             ? $minExtensionLength
             : new ExtensionLength($minExtensionLength);
        $this->minExtensionLength->setElementName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return ($this->minExtensionLength)
            ? $this->minExtensionLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf ExtensionLength)
             ? $maxExtensionLength
             : new ExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setElementName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return ($this->maxExtensionLength)
            ? $this->maxExtensionLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        $this->defaultExtensionLength = ($defaultExtensionLength InstanceOf ExtensionLength)
             ? $defaultExtensionLength
             : new ExtensionLength($defaultExtensionLength);
        $this->defaultExtensionLength->setElementName('defaultExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $defaultExtensionLength
     */
    public function getDefaultExtensionLength()
    {
        return ($this->defaultExtensionLength)
            ? $this->defaultExtensionLength->getElementValue()
            : null;
    }
}
