<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupEnterpriseTrunkGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEnterpriseTrunkGetUserListResponse';
    protected $enterpriseTrunkUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnterpriseTrunkUserTable(TableType $enterpriseTrunkUserTable = null)
    {
        $this->enterpriseTrunkUserTable = $enterpriseTrunkUserTable;
        $this->enterpriseTrunkUserTable->setElementName('enterpriseTrunkUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getEnterpriseTrunkUserTable()
    {
        return $this->enterpriseTrunkUserTable;
    }
}
