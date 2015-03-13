<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    protected $trunkGroupName = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupName($trunkGroupName = null)
    {
        if (!$trunkGroupName) return $this;
        $this->trunkGroupName = ($trunkGroupName InstanceOf TrunkGroupName)
             ? $trunkGroupName
             : new TrunkGroupName($trunkGroupName);
        $this->trunkGroupName->setName('trunkGroupName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName $trunkGroupName
     */
    public function getTrunkGroupName()
    {
        return $this->trunkGroupName->getValue();
    }
}
