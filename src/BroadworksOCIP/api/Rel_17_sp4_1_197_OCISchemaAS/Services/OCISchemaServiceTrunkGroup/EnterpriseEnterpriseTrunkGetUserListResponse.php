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
 * Response to EnterpriseEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name".
 */
class EnterpriseEnterpriseTrunkGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseEnterpriseTrunkGetUserListResponse';
    protected $enterpriseTrunkUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetUserListResponse $response
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
