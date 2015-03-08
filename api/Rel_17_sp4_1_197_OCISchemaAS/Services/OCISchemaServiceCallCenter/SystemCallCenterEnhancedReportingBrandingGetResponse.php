<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemCallCenterEnhancedReportingBrandingGetRequest.
 */
class SystemCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingBrandingGetResponse';
    public    $name                          = __CLASS__;
    protected $brandingChoice                = null;
    protected $customBrandingFileDescription = null;


    /**
     * The call center enhanced reporting system level branding choice.
     */
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
    }

    /**
     * The call center enhanced reporting system level branding choice.
     */
    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setCustomBrandingFileDescription($customBrandingFileDescription = null)
    {
        $this->customBrandingFileDescription = ($customBrandingFileDescription InstanceOf FileDescription)
             ? $customBrandingFileDescription
             : new FileDescription($customBrandingFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getCustomBrandingFileDescription()
    {
        return (!$this->customBrandingFileDescription) ?: $this->customBrandingFileDescription->getValue();
    }
}
