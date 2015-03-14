<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: GroupCallCenterSupervisorReportingModifyRequest
 */
class GroupCallCenterModifySupervisorListRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'GroupCallCenterModifySupervisorListRequest';
    protected $serviceUserId        = null;
    protected $reportingServerURL   = null;
    protected $supervisorUserIdList = null;

    public function __construct(
         $serviceUserId,
         $reportingServerURL = null,
         ReplacementUserIdList $supervisorUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setReportingServerURL($reportingServerURL);
        $this->setSupervisorUserIdList($supervisorUserIdList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setReportingServerURL($reportingServerURL = null)
    {
        if (!$reportingServerURL) return $this;
        $this->reportingServerURL = ($reportingServerURL InstanceOf URL)
             ? $reportingServerURL
             : new URL($reportingServerURL);
        $this->reportingServerURL->setName('reportingServerURL');
        return $this;
    }

    /**
     * 
     * @return URL $reportingServerURL
     */
    public function getReportingServerURL()
    {
        return $this->reportingServerURL->getValue();
    }

    /**
     * 
     */
    public function setSupervisorUserIdList(ReplacementUserIdList $supervisorUserIdList = null)
    {
        if (!$supervisorUserIdList) return $this;
        $this->supervisorUserIdList = $supervisorUserIdList;
        $this->supervisorUserIdList->setName('supervisorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $supervisorUserIdList
     */
    public function getSupervisorUserIdList()
    {
        return $this->supervisorUserIdList;
    }
}
