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
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCallCenterReportTemplateKey';
    public    $name           = __CLASS__;
    protected $reportTemplate = null;

    public function __construct(
         CallCenterReportTemplateKey $reportTemplate
    ) {
        $this->setReportTemplate($reportTemplate);
    }

    /**
     * Uniquely identifies a call center report template created in the system.
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        $this->reportTemplate = CallCenterReportTemplateKey $reportTemplate;
    }

    /**
     * Uniquely identifies a call center report template created in the system.
     */
    public function getReportTemplate()
    {
        return (!$this->reportTemplate) ?: $this->reportTemplate->getValue();
    }
}
