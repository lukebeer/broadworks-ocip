<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the group branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterEnhancedReportingBrandingModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $brandingChoice;
    protected $brandingFile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $brandingChoice = null,
         LabeledFileResource $brandingFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setBrandingChoice($brandingChoice);
        $this->setBrandingFile($brandingFile);
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
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
        $this->brandingChoice->setName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return ($this->brandingChoice) ? $this->brandingChoice->getValue() : null;
    }

    /**
     * 
     */
    public function setBrandingFile(LabeledFileResource $brandingFile = null)
    {
        $this->brandingFile = ($brandingFile InstanceOf LabeledFileResource)
             ? $brandingFile
             : new LabeledFileResource($brandingFile);
        $this->brandingFile->setName('brandingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $brandingFile
     */
    public function getBrandingFile()
    {
        return $this->brandingFile;
    }
}
