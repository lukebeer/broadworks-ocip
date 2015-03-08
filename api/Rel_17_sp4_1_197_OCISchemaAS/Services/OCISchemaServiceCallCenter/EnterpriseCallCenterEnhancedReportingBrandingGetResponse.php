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
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingBrandingGetResponse';
    public    $name                    = __CLASS__;
    protected $brandingChoice          = null;
    protected $brandingFileDescription = null;


    /**
     * The call center enhanced reporting Enterprise or Group level branding choice.
     */
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
    }

    /**
     * The call center enhanced reporting Enterprise or Group level branding choice.
     */
    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setBrandingFileDescription($brandingFileDescription = null)
    {
        $this->brandingFileDescription = ($brandingFileDescription InstanceOf FileDescription)
             ? $brandingFileDescription
             : new FileDescription($brandingFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getBrandingFileDescription()
    {
        return (!$this->brandingFileDescription) ?: $this->brandingFileDescription->getValue();
    }
}
