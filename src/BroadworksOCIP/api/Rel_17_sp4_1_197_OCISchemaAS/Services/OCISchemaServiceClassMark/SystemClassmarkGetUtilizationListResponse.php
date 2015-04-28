<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemClassmarkGetUtilizationListRequest. 
 *         Contains a table with the column headings: "User Id", "Group Id", "Service Provider Id",
 *         "Last Name", "First Name", and "Phone Number".
 */
class SystemClassmarkGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClassmarkGetUtilizationListResponse';
    protected $classmarkUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\SystemClassmarkGetUtilizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setClassmarkUserTable(TableType $classmarkUserTable = null)
    {
        $this->classmarkUserTable = $classmarkUserTable;
        $this->classmarkUserTable->setElementName('classmarkUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getClassmarkUserTable()
    {
        return $this->classmarkUserTable;
    }
}
