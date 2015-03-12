<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupAdminGetListResponse';
    protected $groupAdminTable = null;

    /**
     * @return GroupAdminGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupAdminTable(TableType $groupAdminTable = null)
    {
        if (!$groupAdminTable) return $this;
        $this->groupAdminTable = $groupAdminTable;
        $this->groupAdminTable->setName('groupAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupAdminTable()
    {
        return $this->groupAdminTable->getValue();
    }
}
