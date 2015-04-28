<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get Call Center queue and agent statistics.
 *         The response is either GroupCallCenterGetInstanceStatisticsResponse14sp9 or ErrorResponse.
 */
class GroupCallCenterGetInstanceStatisticsRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsResponse14sp9';
    public    $elementName = 'GroupCallCenterGetInstanceStatisticsRequest14sp9';
    protected $serviceUserId;
    protected $statisticsRange;

    public function __construct(
         $serviceUserId = '',
         $statisticsRange = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setStatisticsRange($statisticsRange);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsResponse14sp9 $response
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
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatisticsRange(CallCenterStatisticsRange $statisticsRange = null)
    {
        $this->statisticsRange = ($statisticsRange InstanceOf CallCenterStatisticsRange)
             ? $statisticsRange
             : new CallCenterStatisticsRange($statisticsRange);
        $this->statisticsRange->setElementName('statisticsRange');
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
