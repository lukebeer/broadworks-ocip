<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPolycomPhoneServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'GroupPolycomPhoneServicesModifyRequest';
    protected $serviceProviderId                             = null;
    protected $groupId                                       = null;
    protected $includeGroupCommonPhoneListInDirectory        = null;
    protected $includeGroupCustomContactDirectoryInDirectory = null;
    protected $groupCustomContactDirectory                   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $includeGroupCommonPhoneListInDirectory = null,
         $includeGroupCustomContactDirectoryInDirectory = null,
         $groupCustomContactDirectory = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory);
        $this->setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory);
        $this->setGroupCustomContactDirectory($groupCustomContactDirectory);
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
     * @return ServiceProviderId
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
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory = null)
    {
        if (!$includeGroupCommonPhoneListInDirectory) return $this;
        $this->includeGroupCommonPhoneListInDirectory = new PrimitiveType($includeGroupCommonPhoneListInDirectory);
        $this->includeGroupCommonPhoneListInDirectory->setName('includeGroupCommonPhoneListInDirectory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return $this->includeGroupCommonPhoneListInDirectory->getValue();
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        if (!$includeGroupCustomContactDirectoryInDirectory) return $this;
        $this->includeGroupCustomContactDirectoryInDirectory = new PrimitiveType($includeGroupCustomContactDirectoryInDirectory);
        $this->includeGroupCustomContactDirectoryInDirectory->setName('includeGroupCustomContactDirectoryInDirectory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return $this->includeGroupCustomContactDirectoryInDirectory->getValue();
    }

    /**
     * 
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        if (!$groupCustomContactDirectory) return $this;
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->groupCustomContactDirectory->setName('groupCustomContactDirectory');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName
     */
    public function getGroupCustomContactDirectory()
    {
        return $this->groupCustomContactDirectory->getValue();
    }
}
