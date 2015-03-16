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
 * Response to the GroupDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Numbers", and "Activated".  ".  Phone Numbers are only returned if assigned to a user.
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Activated" column indicates if the phone number(s) are activated or not.
 */
class GroupDnGetActivationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupDnGetActivationListResponse';
    protected $dnTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetActivationListResponse $response
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
        return $this->dnTable;
    }
}
