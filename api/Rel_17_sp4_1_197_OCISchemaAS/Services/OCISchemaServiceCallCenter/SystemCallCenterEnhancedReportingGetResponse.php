<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterEnhancedReportingGetRequest.
 */
class SystemCallCenterEnhancedReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $archiveReports            = null;
    protected $reportApplicationURL      = null;
    protected $repositoryApplicationURL  = null;


    public function setArchiveReports(xs:boolean $archiveReports = null)
    {
    }

    public function getArchiveReports()
    {
        return (!$this->archiveReports) ?: $this->archiveReports->value();
    }

    public function setReportApplicationURL($reportApplicationURL = null)
    {
        $this->reportApplicationURL = ($reportApplicationURL InstanceOf URL)
             ? $reportApplicationURL
             : new URL($reportApplicationURL);
    }

    public function getReportApplicationURL()
    {
        return (!$this->reportApplicationURL) ?: $this->reportApplicationURL->value();
    }

    public function setRepositoryApplicationURL($repositoryApplicationURL = null)
    {
        $this->repositoryApplicationURL = ($repositoryApplicationURL InstanceOf URL)
             ? $repositoryApplicationURL
             : new URL($repositoryApplicationURL);
    }

    public function getRepositoryApplicationURL()
    {
        return (!$this->repositoryApplicationURL) ?: $this->repositoryApplicationURL->value();
    }
}
