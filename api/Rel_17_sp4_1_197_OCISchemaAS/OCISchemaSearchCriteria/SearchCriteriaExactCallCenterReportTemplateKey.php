<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular call center enhanced reporting report template.
 */
class SearchCriteriaExactCallCenterReportTemplateKey extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             CallCenterReportTemplateKey $reportTemplate
    ) {
        $this->reportTemplate = $reportTemplate;
        $this->args           = func_get_args();
    }

    public function setReportTemplate($reportTemplate)
    {
        $reportTemplate and $this->reportTemplate = new CallCenterReportTemplateKey($reportTemplate);
    }

    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->value();
    }
}
