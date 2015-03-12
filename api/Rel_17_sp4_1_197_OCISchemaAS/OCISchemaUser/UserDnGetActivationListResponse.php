<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Number", and "Activated".
 *         The "Phone Number" column contains a single DN.
 *         The "Activated" column indicates if the phone number is activated or not.
 */
class UserDnGetActivationListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = 'UserDnGetActivationListResponse';
    protected $dnTable = null;

    /**
     * @return UserDnGetActivationListResponse
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
