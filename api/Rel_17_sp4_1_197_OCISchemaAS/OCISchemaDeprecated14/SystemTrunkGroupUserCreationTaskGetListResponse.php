<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemTrunkGroupUserCreationTaskGetListRequest.
 *         Contains a table with a row for each user creation task and column headings :
 *         "Service User Id", "Group Id", "Organization Id", "Organization Type", "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 */
class SystemTrunkGroupUserCreationTaskGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemTrunkGroupUserCreationTaskGetListResponse';
    protected $taskTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemTrunkGroupUserCreationTaskGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTaskTable(TableType $taskTable = null)
    {
        if (!$taskTable) return $this;
        $this->taskTable = $taskTable;
        $this->taskTable->setName('taskTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTaskTable()
    {
        return $this->taskTable;
    }
}
