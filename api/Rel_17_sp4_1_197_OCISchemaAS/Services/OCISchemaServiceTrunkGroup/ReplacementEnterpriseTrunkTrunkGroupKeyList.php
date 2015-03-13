<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Enterprise Trunk Krunk Group Keys that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementEnterpriseTrunkTrunkGroupKeyList extends ComplexType implements ComplexInterface
{
    public    $name           = 'ReplacementEnterpriseTrunkTrunkGroupKeyList';
    protected $trunkGroupList = null;

    public function __construct(
         $trunkGroupList = null
    ) {
        $this->setTrunkGroupList($trunkGroupList);
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
    public function setTrunkGroupList($trunkGroupList = null)
    {
        if (!$trunkGroupList) return $this;
        $this->trunkGroupList = new SimpleContent($trunkGroupList);
        $this->trunkGroupList->setName('trunkGroupList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroupList
     */
    public function getTrunkGroupList()
    {
        return $this->trunkGroupList->getValue();
    }
}
