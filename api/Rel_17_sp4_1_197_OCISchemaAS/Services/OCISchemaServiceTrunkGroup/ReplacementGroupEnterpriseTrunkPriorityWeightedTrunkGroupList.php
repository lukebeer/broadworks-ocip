<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of enterprise trunk priority weighted trunk groups in a group that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList';
    public    $name       = 'ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList';
    protected $trunkGroup = null;

    public function __construct(
         $trunkGroup = null
    ) {
        $this->setTrunkGroup($trunkGroup);
    }

    /**
     * @return ReplacementGroupEnterpriseTrunkPriorityWeightedTrunkGroupList
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroup($trunkGroup = null)
    {
        if (!$trunkGroup) return $this;
        $this->trunkGroup = new SimpleContent($trunkGroup);
        $this->trunkGroup->setName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup->getValue();
    }
}
