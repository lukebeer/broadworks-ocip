<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingBrandingChoice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the group branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterEnhancedReportingBrandingModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $brandingChoice;
    protected $brandingFile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $brandingChoice = null,
         $brandingFile = null
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
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
        $this->brandingChoice->setElementName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return ($this->brandingChoice)
            ? $this->brandingChoice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBrandingFile(LabeledFileResource $brandingFile = null)
    {
        $this->brandingFile = ($brandingFile InstanceOf LabeledFileResource)
             ? $brandingFile
             : new LabeledFileResource($brandingFile);
        $this->brandingFile->setElementName('brandingFile');
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
