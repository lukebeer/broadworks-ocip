<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the input parameter info for a call center report template.
 *         The response is either a UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $reportTemplate  = null;

    public function __construct(
         CallCenterReportTemplateKey $reportTemplate
    ) {
        $this->setReportTemplate($reportTemplate);
    }

    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
    }

    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->value();
    }
}
