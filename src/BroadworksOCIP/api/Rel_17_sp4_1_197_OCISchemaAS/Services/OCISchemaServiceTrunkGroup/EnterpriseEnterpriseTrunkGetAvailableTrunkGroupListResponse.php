<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkTrunkGroupKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    protected $trunkGroup;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroup(EnterpriseTrunkTrunkGroupKey $trunkGroup = null)
    {
        $this->trunkGroup = ($trunkGroup InstanceOf EnterpriseTrunkTrunkGroupKey)
             ? $trunkGroup
             : new EnterpriseTrunkTrunkGroupKey($trunkGroup);
        $this->trunkGroup->setElementName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkTrunkGroupKey $trunkGroup
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }
}
