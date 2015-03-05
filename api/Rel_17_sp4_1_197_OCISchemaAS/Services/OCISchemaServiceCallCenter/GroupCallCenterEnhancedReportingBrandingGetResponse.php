<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterEnhancedReportingBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterEnhancedReportingBrandingGetRequest.
 */
class GroupCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $brandingChoice,
             $brandingFileDescription=null
    ) {
        $this->brandingChoice          = $brandingChoice;
        $this->brandingFileDescription = new FileDescription($brandingFileDescription);
        $this->args                    = func_get_args();
    }

    public function setBrandingChoice($brandingChoice)
    {
        $brandingChoice and $this->brandingChoice = new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
    }

    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->value();
    }

    public function setBrandingFileDescription($brandingFileDescription)
    {
        $brandingFileDescription and $this->brandingFileDescription = new FileDescription($brandingFileDescription);
    }

    public function getBrandingFileDescription()
    {
        return (!$this->brandingFileDescription) ?: $this->brandingFileDescription->value();
    }
}
