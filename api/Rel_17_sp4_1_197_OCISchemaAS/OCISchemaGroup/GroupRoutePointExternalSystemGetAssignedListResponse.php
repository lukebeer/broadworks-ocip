<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointExternalSystemGetAssignedListRequest.
 *         Contains a table of all Route Point External Systems assigned to the
 * 	group.  The column headings are: "Name" and "Description".
 */
class GroupRoutePointExternalSystemGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $externalSystemTable = null;

    /**
     * @return GroupRoutePointExternalSystemGetAssignedListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExternalSystemTable(core:OCITable $externalSystemTable = null)
    {
        $this->externalSystemTable =  $externalSystemTable;
    }

    /**
     * 
     */
    public function getExternalSystemTable()
    {
        return (!$this->externalSystemTable) ?: $this->externalSystemTable->getValue();
    }
}
