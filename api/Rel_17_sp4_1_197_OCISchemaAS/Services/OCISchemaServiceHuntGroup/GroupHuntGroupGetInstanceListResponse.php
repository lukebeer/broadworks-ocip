<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupHuntGroupGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 */
class GroupHuntGroupGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'GroupHuntGroupGetInstanceListResponse';
    protected $huntGroupTable = null;

    /**
     * @return GroupHuntGroupGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHuntGroupTable(TableType $huntGroupTable = null)
    {
        if (!$huntGroupTable) return $this;
        $this->huntGroupTable = $huntGroupTable;
        $this->huntGroupTable->setName('huntGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHuntGroupTable()
    {
        return $this->huntGroupTable->getValue();
    }
}
