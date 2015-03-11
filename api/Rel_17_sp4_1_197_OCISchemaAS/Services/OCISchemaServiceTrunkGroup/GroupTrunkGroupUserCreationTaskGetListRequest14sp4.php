<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetListResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of user creation tasks for a trunk group.
 *         The response is either GroupTrunkGroupUserCreationTaskGetListResponse14sp4 or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskGetListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupUserCreationTaskGetListResponse14sp4';
    public    $name          = 'GroupTrunkGroupUserCreationTaskGetListRequest14sp4';
    protected $trunkGroupKey = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
    }

    /**
     * @return GroupTrunkGroupUserCreationTaskGetListResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        if (!$trunkGroupKey) return $this;
        $this->trunkGroupKey = $trunkGroupKey;
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }
}
