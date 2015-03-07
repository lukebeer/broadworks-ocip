<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseCallCenterEnhancedReportingBrandingGetRequest.
 */
class EnterpriseCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $brandingChoice           = null;
    protected $brandingFileDescription  = null;


    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
    }

    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->value();
    }

    public function setBrandingFileDescription($brandingFileDescription = null)
    {
        $this->brandingFileDescription = ($brandingFileDescription InstanceOf FileDescription)
             ? $brandingFileDescription
             : new FileDescription($brandingFileDescription);
    }

    public function getBrandingFileDescription()
    {
        return (!$this->brandingFileDescription) ?: $this->brandingFileDescription->value();
    }
}
