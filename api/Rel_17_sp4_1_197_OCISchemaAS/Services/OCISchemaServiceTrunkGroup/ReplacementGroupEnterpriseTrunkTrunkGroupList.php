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
 * A list of Group Trunk Krunk Group Names that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementGroupEnterpriseTrunkTrunkGroupList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementGroupEnterpriseTrunkTrunkGroupList';
    protected $trunkGroup;

    public function __construct(
         $trunkGroup = null
    ) {
        $this->setTrunkGroup($trunkGroup);
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
    public function setTrunkGroup($trunkGroup = null)
    {
        $this->trunkGroup = new SimpleContent($trunkGroup);
        $this->trunkGroup->setElementName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroup
     */
    public function getTrunkGroup()
    {
        return ($this->trunkGroup)
            ? $this->trunkGroup->getElementValue()
            : null;
    }
}
