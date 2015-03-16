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
    public    $name = 'GroupPolycomPhoneServicesModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $includeGroupCommonPhoneListInDirectory;
    protected $includeGroupCustomContactDirectoryInDirectory;
    protected $groupCustomContactDirectory;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
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
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory = null)
    {
        $this->includeGroupCommonPhoneListInDirectory = new PrimitiveType($includeGroupCommonPhoneListInDirectory);
        $this->includeGroupCommonPhoneListInDirectory->setName('includeGroupCommonPhoneListInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupCommonPhoneListInDirectory
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return ($this->includeGroupCommonPhoneListInDirectory) ? $this->includeGroupCommonPhoneListInDirectory->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = new PrimitiveType($includeGroupCustomContactDirectoryInDirectory);
        $this->includeGroupCustomContactDirectoryInDirectory->setName('includeGroupCustomContactDirectoryInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupCustomContactDirectoryInDirectory
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return ($this->includeGroupCustomContactDirectoryInDirectory) ? $this->includeGroupCustomContactDirectoryInDirectory->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->groupCustomContactDirectory->setName('groupCustomContactDirectory');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $groupCustomContactDirectory
     */
    public function getGroupCustomContactDirectory()
    {
        return ($this->groupCustomContactDirectory) ? $this->groupCustomContactDirectory->getValue() : null;
    }
}
