<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse';
    protected $codeEntry = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCodeEntry(OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = null)
    {
        if (!$codeEntry) return $this;
        $this->codeEntry = $codeEntry;
        $this->codeEntry->setName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}
