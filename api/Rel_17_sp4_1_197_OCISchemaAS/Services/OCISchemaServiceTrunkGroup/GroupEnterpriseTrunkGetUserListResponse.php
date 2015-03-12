<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupEnterpriseTrunkGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupEnterpriseTrunkGetUserListResponse';
    protected $enterpriseTrunkUserTable = null;

    /**
     * @return GroupEnterpriseTrunkGetUserListResponse
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
        if (!$enterpriseTrunkUserTable) return $this;
        $this->enterpriseTrunkUserTable = $enterpriseTrunkUserTable;
        $this->enterpriseTrunkUserTable->setName('enterpriseTrunkUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getEnterpriseTrunkUserTable()
    {
        return $this->enterpriseTrunkUserTable->getValue();
    }
}
