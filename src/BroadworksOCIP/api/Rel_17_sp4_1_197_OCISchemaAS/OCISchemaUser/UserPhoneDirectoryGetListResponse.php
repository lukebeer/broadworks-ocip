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
 * Response to UserPhoneDirectoryGetListRequest.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", "First Name", "Last Name", "User Id", "Title",
 */
class UserPhoneDirectoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPhoneDirectoryGetListResponse';
    protected $directoryTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDirectoryTable(TableType $directoryTable = null)
    {
        $this->directoryTable = $directoryTable;
        $this->directoryTable->setElementName('directoryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable;
    }
}
