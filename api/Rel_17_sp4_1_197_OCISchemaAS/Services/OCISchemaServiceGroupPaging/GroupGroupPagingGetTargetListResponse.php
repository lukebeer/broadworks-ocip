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
 * Response to the GroupGroupPagingGetTargetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupGroupPagingGetTargetListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'GroupGroupPagingGetTargetListResponse';
    protected $targetTable = null;

    /**
     * @return GroupGroupPagingGetTargetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTargetTable(TableType $targetTable = null)
    {
        if (!$targetTable) return $this;
        $this->targetTable = $targetTable;
        $this->targetTable->setName('targetTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTargetTable()
    {
        return $this->targetTable;
    }
}
