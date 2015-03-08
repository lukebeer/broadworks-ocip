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
    const     RESPONSE_TYPE             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingGetResponse';
    public    $name                     = __CLASS__;
    protected $archiveReports           = null;
    protected $reportApplicationURL     = null;
    protected $repositoryApplicationURL = null;


    /**
     * 
     */
    public function setArchiveReports($archiveReports = null)
    {
        $this->archiveReports = (boolean) $archiveReports;
    }

    /**
     * 
     */
    public function getArchiveReports()
    {
        return (!$this->archiveReports) ?: $this->archiveReports->getValue();
    }

    /**
     * URL.
     */
    public function setReportApplicationURL($reportApplicationURL = null)
    {
        $this->reportApplicationURL = ($reportApplicationURL InstanceOf URL)
             ? $reportApplicationURL
             : new URL($reportApplicationURL);
    }

    /**
     * URL.
     */
    public function getReportApplicationURL()
    {
        return (!$this->reportApplicationURL) ?: $this->reportApplicationURL->getValue();
    }

    /**
     * URL.
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL = null)
    {
        $this->repositoryApplicationURL = ($repositoryApplicationURL InstanceOf URL)
             ? $repositoryApplicationURL
             : new URL($repositoryApplicationURL);
    }

    /**
     * URL.
     */
    public function getRepositoryApplicationURL()
    {
        return (!$this->repositoryApplicationURL) ?: $this->repositoryApplicationURL->getValue();
    }
}