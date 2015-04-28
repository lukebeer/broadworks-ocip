<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserInstantConferencingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Ports", "Is Active", "Is Device Integrated".
 *         The column values for "Is Active" can either be true, or false.
 */
class UserInstantConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetInstanceListResponse';
    protected $instantConferencingTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantConferencingTable(TableType $instantConferencingTable = null)
    {
        $this->instantConferencingTable = $instantConferencingTable;
        $this->instantConferencingTable->setElementName('instantConferencingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInstantConferencingTable()
    {
        return $this->instantConferencingTable;
    }
}
