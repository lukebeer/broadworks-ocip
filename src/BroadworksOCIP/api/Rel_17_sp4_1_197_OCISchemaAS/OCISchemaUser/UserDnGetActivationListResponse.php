<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Number", and "Activated".
 *         The "Phone Number" column contains a single DN.
 *         The "Activated" column indicates if the phone number is activated or not.
 */
class UserDnGetActivationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDnGetActivationListResponse';
    protected $dnTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserDnGetActivationListResponse $response
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
        $this->dnTable->setElementName('dnTable');
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
