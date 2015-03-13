<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'GroupTrunkGroupGetAvailableDetailListResponse';
    protected $trunkGroup = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupTrunkGroupGetAvailableDetailListResponse $response
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
        $this->trunkGroup->setName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return  $trunkGroup
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup->getValue();
    }
}
