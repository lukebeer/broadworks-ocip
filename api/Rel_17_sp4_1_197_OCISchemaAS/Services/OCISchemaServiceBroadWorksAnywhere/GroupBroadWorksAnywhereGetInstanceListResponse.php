<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupBroadWorksAnywhereGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 */
class GroupBroadWorksAnywhereGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupBroadWorksAnywhereGetInstanceListResponse';
    protected $broadWorksAnywhereTable = null;

    /**
     * @return GroupBroadWorksAnywhereGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBroadWorksAnywhereTable(core:OCITable $broadWorksAnywhereTable = null)
    {
        if (!$broadWorksAnywhereTable) return $this;
        $this->broadWorksAnywhereTable->setName('broadWorksAnywhereTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getBroadWorksAnywhereTable()
    {
        return $this->broadWorksAnywhereTable->getValue();
    }
}
