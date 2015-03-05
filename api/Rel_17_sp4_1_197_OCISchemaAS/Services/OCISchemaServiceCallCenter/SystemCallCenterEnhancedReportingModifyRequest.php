<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system settings for call center enhanced reporting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $archiveReports=null,
             $reportApplicationURL=null,
             $repositoryApplicationURL=null
    ) {
        $this->archiveReports           = $archiveReports;
        $this->reportApplicationURL     = new URL($reportApplicationURL);
        $this->repositoryApplicationURL = new URL($repositoryApplicationURL);
        $this->args                     = func_get_args();
    }

    public function setArchiveReports($archiveReports)
    {
        $archiveReports and $this->archiveReports = new xs:boolean($archiveReports);
    }

    public function getArchiveReports()
    {
        return (!$this->archiveReports) ?: $this->archiveReports->value();
    }

    public function setReportApplicationURL($reportApplicationURL)
    {
        $reportApplicationURL and $this->reportApplicationURL = new URL($reportApplicationURL);
    }

    public function getReportApplicationURL()
    {
        return (!$this->reportApplicationURL) ?: $this->reportApplicationURL->value();
    }

    public function setRepositoryApplicationURL($repositoryApplicationURL)
    {
        $repositoryApplicationURL and $this->repositoryApplicationURL = new URL($repositoryApplicationURL);
    }

    public function getRepositoryApplicationURL()
    {
        return (!$this->repositoryApplicationURL) ?: $this->repositoryApplicationURL->value();
    }
}
