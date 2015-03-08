<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $brandingChoice     = null;
    protected $customBrandingFile = null;

    public function __construct(
         $brandingChoice = null,
          $customBrandingFile = null
    ) {
        $this->setBrandingChoice($brandingChoice);
        $this->setCustomBrandingFile($customBrandingFile);
    }

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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setCustomBrandingFile(LabeledFileResource $customBrandingFile = null)
    {
        $this->customBrandingFile =  $customBrandingFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getCustomBrandingFile()
    {
        return (!$this->customBrandingFile) ?: $this->customBrandingFile->getValue();
    }
}
