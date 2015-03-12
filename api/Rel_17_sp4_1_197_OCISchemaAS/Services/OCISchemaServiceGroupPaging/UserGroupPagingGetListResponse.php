<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserGroupPagingGetListRequest.
 *         The groupPagingTable contains columns: "Name", "Phone Number", "Extension" and "Is Active"
 *         The column value for "Is Active" can either be true, or false.
 */
class UserGroupPagingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserGroupPagingGetListResponse';
    protected $pagingGroupTable = null;

    /**
     * @return UserGroupPagingGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPagingGroupTable(TableType $pagingGroupTable = null)
    {
        if (!$pagingGroupTable) return $this;
        $this->pagingGroupTable = $pagingGroupTable;
        $this->pagingGroupTable->setName('pagingGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPagingGroupTable()
    {
        return $this->pagingGroupTable;
    }
}
