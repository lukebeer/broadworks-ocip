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
    public    $name                           = __CLASS__;
    protected $brandingChoice                 = null;
    protected $customBrandingFileDescription  = null;


    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
    }

    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->value();
    }

    public function setCustomBrandingFileDescription($customBrandingFileDescription = null)
    {
        $this->customBrandingFileDescription = ($customBrandingFileDescription InstanceOf FileDescription)
             ? $customBrandingFileDescription
             : new FileDescription($customBrandingFileDescription);
    }

    public function getCustomBrandingFileDescription()
    {
        return (!$this->customBrandingFileDescription) ?: $this->customBrandingFileDescription->value();
    }
}
