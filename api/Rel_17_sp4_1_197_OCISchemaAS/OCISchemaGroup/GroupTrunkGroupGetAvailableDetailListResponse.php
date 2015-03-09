<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupTrunkGroupGetAvailableDetailListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $trunkGroup = null;

    /**
     * @return GroupTrunkGroupGetAvailableDetailListResponse
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
        $this->trunkGroup = $trunkGroup;
    }

    /**
     * 
     */
    public function getTrunkGroup()
    {
        return (!$this->trunkGroup) ?: $this->trunkGroup;
    }
}
