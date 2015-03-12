<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDialPlanPolicyGetAccessCodeListRequest
 *         Contains a table with column headings: "Access Code",
 *         "Enable Secondary Dial Tone", "Description"
 */
class GroupDialPlanPolicyGetAccessCodeListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupDialPlanPolicyGetAccessCodeListResponse';
    protected $accessCodeTable = null;

    /**
     * @return GroupDialPlanPolicyGetAccessCodeListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessCodeTable(TableType $accessCodeTable = null)
    {
        if (!$accessCodeTable) return $this;
        $this->accessCodeTable = $accessCodeTable;
        $this->accessCodeTable->setName('accessCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessCodeTable()
    {
        return $this->accessCodeTable;
    }
}
