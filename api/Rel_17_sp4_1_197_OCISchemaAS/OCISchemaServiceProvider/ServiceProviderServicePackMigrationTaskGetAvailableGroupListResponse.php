<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest.
 *         The groupTable column headings are: "Group Id", "Group Name", "User Count".
 */
class ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse';
    protected $groupTable = null;

    /**
     * @return ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        if (!$groupTable) return $this;
        $this->groupTable = $groupTable;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }
}
