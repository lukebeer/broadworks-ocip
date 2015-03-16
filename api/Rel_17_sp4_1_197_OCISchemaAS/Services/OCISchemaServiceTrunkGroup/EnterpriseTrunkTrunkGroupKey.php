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
 * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
 */
class EnterpriseTrunkTrunkGroupKey extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseTrunkTrunkGroupKey';
    protected $groupId;
    protected $trunkGroupName;

    public function __construct(
         $groupId = '',
         $trunkGroupName = ''
    ) {
        $this->setGroupId($groupId);
        $this->setTrunkGroupName($trunkGroupName);
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
    public function setGroupId($groupId = null)
    {
        $this->groupId = new SimpleContent($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setTrunkGroupName($trunkGroupName = null)
    {
        $this->trunkGroupName = new SimpleContent($trunkGroupName);
        $this->trunkGroupName->setName('trunkGroupName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroupName
     */
    public function getTrunkGroupName()
    {
        return ($this->trunkGroupName) ? $this->trunkGroupName->getValue() : null;
    }
}
