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
 * Response to GroupGetListInServiceProviderRequest.
 *         Contains a 3 column table with column headings: "Group Id", "Group Name", "User Limit"
 *         and a row for each group.
 */
class GroupGetListInServiceProviderResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'GroupGetListInServiceProviderResponse';
    protected $groupTable = null;

    /**
     * @return GroupGetListInServiceProviderResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(core:OCITable $groupTable = null)
    {
        if (!$groupTable) return $this;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable->getValue();
    }
}
