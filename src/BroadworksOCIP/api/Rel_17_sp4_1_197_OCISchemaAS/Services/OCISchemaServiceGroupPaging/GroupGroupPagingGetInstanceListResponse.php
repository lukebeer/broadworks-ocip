<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupGroupPagingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 */
class GroupGroupPagingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGroupPagingGetInstanceListResponse';
    protected $pagingGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupGroupPagingGetInstanceListResponse $response
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
        $this->pagingGroupTable = $pagingGroupTable;
        $this->pagingGroupTable->setElementName('pagingGroupTable');
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
