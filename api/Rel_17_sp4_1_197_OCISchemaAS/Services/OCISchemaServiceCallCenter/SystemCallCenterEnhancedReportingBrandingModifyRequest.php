<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'SystemCallCenterEnhancedReportingBrandingModifyRequest';
    protected $brandingChoice     = null;
    protected $customBrandingFile = null;

    public function __construct(
         $brandingChoice = null,
         LabeledFileResource $customBrandingFile = null
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
        if (!$brandingChoice) return $this;
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
        $this->brandingChoice->setName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice->getValue();
    }

    /**
     * 
     */
    public function setCustomBrandingFile(LabeledFileResource $customBrandingFile = null)
    {
        if (!$customBrandingFile) return $this;
        $this->customBrandingFile = $customBrandingFile;
        $this->customBrandingFile->setName('customBrandingFile');
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
