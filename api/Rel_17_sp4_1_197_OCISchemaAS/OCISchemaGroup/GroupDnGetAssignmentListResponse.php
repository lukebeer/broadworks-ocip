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
 * Response to the GroupDnGetAssignmentListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned To", "Department".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Assigned To" column contains the user name or service instance name possessing the DN(s).
 *         The "Department" column contains the department of the DN, not the department of the user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.  Only has a value if the DN(s) is assigned to a user.
 */
class GroupDnGetAssignmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = 'GroupDnGetAssignmentListResponse';
    protected $dnTable = null;

    /**
     * @return GroupDnGetAssignmentListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnTable(TableType $dnTable = null)
    {
        if (!$dnTable) return $this;
        $this->dnTable = $dnTable;
        $this->dnTable->setName('dnTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnTable()
    {
        return $this->dnTable->getValue();
    }
}
