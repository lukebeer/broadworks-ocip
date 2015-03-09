<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetSummaryListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupDnGetSummaryListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Assigned" column contains a boolean flag indicating if the DN(s) are
 *         currently assigned to a user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.  Only has a value if the DN(s) is assigned to a user.
 */
class GroupDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $dnTable = null;

    /**
     * @return GroupDnGetSummaryListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnTable(core:OCITable $dnTable = null)
    {
        $this->dnTable =  $dnTable;
    }

    /**
     * 
     */
    public function getDnTable()
    {
        return (!$this->dnTable) ?: $this->dnTable->getValue();
    }
}
