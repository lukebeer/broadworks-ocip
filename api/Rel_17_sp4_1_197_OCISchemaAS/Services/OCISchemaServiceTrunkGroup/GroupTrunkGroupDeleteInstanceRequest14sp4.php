<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Trunk Group Instance from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupDeleteInstanceRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupTrunkGroupDeleteInstanceRequest14sp4';
    protected $trunkGroupKey;

    public function __construct(
         TrunkGroupKey $trunkGroupKey = ''
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
    }

    /**
     * @return mixed $response
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
        $this->trunkGroupKey = ($trunkGroupKey InstanceOf TrunkGroupKey)
             ? $trunkGroupKey
             : new TrunkGroupKey($trunkGroupKey);
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $trunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }
}
