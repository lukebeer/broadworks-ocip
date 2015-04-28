<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingGetRequest.
 */
class SystemCallCenterEnhancedReportingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingGetResponse';
    protected $archiveReports;
    protected $reportApplicationURL;
    protected $repositoryApplicationURL;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setArchiveReports($archiveReports = null)
    {
        $this->archiveReports = new PrimitiveType($archiveReports);
        $this->archiveReports->setElementName('archiveReports');
        return $this;
    }

    /**
     * 
     * @return boolean $archiveReports
     */
    public function getArchiveReports()
    {
        return ($this->archiveReports)
            ? $this->archiveReports->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportApplicationURL($reportApplicationURL = null)
    {
        $this->reportApplicationURL = ($reportApplicationURL InstanceOf URL)
             ? $reportApplicationURL
             : new URL($reportApplicationURL);
        $this->reportApplicationURL->setElementName('reportApplicationURL');
        return $this;
    }

    /**
     * 
     * @return URL $reportApplicationURL
     */
    public function getReportApplicationURL()
    {
        return ($this->reportApplicationURL)
            ? $this->reportApplicationURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL = null)
    {
        $this->repositoryApplicationURL = ($repositoryApplicationURL InstanceOf URL)
             ? $repositoryApplicationURL
             : new URL($repositoryApplicationURL);
        $this->repositoryApplicationURL->setElementName('repositoryApplicationURL');
        return $this;
    }

    /**
     * 
     * @return URL $repositoryApplicationURL
     */
    public function getRepositoryApplicationURL()
    {
        return ($this->repositoryApplicationURL)
            ? $this->repositoryApplicationURL->getElementValue()
            : null;
    }
}
