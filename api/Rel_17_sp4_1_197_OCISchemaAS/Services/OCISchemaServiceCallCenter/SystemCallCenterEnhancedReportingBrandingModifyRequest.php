<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $brandingChoice=null,
             LabeledFileResource $customBrandingFile=null
    ) {
        $this->brandingChoice     = $brandingChoice;
        $this->customBrandingFile = $customBrandingFile;
        $this->args               = func_get_args();
    }

    public function setBrandingChoice($brandingChoice)
    {
        $brandingChoice and $this->brandingChoice = new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
    }

    public function getBrandingChoice()
    {
        return (!$this->brandingChoice) ?: $this->brandingChoice->value();
    }

    public function setCustomBrandingFile($customBrandingFile)
    {
        $customBrandingFile and $this->customBrandingFile = new LabeledFileResource($customBrandingFile);
    }

    public function getCustomBrandingFile()
    {
        return (!$this->customBrandingFile) ?: $this->customBrandingFile->value();
    }
}
