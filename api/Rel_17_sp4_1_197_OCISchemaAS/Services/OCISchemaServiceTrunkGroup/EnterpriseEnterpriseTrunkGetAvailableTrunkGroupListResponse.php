<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkTrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    protected $trunkGroup;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse $response
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
