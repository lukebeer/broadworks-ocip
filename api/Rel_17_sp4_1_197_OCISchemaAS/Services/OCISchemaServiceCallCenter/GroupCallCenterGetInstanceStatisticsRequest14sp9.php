<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse14sp9 or ErrorResponse.
 */
class GroupCallCenterGetInstanceStatisticsRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $responseType    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsResponse14sp9';
    public    $name = 'GroupCallCenterGetInstanceStatisticsRequest14sp9';
    protected $serviceUserId;
    protected $statisticsRange;

    public function __construct(
         $serviceUserId = '',
         CallCenterStatisticsRange $statisticsRange = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setStatisticsRange($statisticsRange);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsResponse14sp9 $response
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
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
        $this->statisticsRange = ($statisticsRange InstanceOf CallCenterStatisticsRange)
             ? $statisticsRange
             : new CallCenterStatisticsRange($statisticsRange);
        $this->statisticsRange->setName('statisticsRange');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsRange $statisticsRange
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange;
    }
}
