<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupDnGetDetailedAvailableListRequest.
 *         The response contains a table with columns: "Phone Number", "Department".
 *         The "Phone Numbers" column contains a single DN.
 *         The "Department" column contains the department of the DN if the DN is part of the department.
 */
class GroupDnGetDetailedAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = 'GroupDnGetDetailedAvailableListResponse';
    protected $dnTable = null;

    /**
     * @return GroupDnGetDetailedAvailableListResponse
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
        if (!$dnTable) return $this;
        $this->dnTable->setName('dnTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDnTable()
    {
        return $this->dnTable->getValue();
    }
}
