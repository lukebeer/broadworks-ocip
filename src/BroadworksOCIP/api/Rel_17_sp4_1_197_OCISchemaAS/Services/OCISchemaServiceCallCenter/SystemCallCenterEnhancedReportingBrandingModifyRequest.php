<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingBrandingModifyRequest';
    protected $brandingChoice;
    protected $customBrandingFile;

    public function __construct(
         $brandingChoice = null,
         $customBrandingFile = null
    ) {
        $this->setBrandingChoice($brandingChoice);
        $this->setCustomBrandingFile($customBrandingFile);
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
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
        $this->brandingChoice->setElementName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice
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
    public function setCustomBrandingFile(LabeledFileResource $customBrandingFile = null)
    {
        $this->customBrandingFile = ($customBrandingFile InstanceOf LabeledFileResource)
             ? $customBrandingFile
             : new LabeledFileResource($customBrandingFile);
        $this->customBrandingFile->setElementName('customBrandingFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $customBrandingFile
     */
    public function getCustomBrandingFile()
    {
        return $this->customBrandingFile;
    }
}
