<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetSupervisorListRequest16.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCenterGetSupervisorListResponse16 extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupCallCenterGetSupervisorListResponse16';
    protected $supervisorTable = null;

    /**
     * @return GroupCallCenterGetSupervisorListResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupervisorTable(TableType $supervisorTable = null)
    {
        if (!$supervisorTable) return $this;
        $this->supervisorTable = $supervisorTable;
        $this->supervisorTable->setName('supervisorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable->getValue();
    }
}
