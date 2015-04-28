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
 * Response to SystemClassmarkGetListRequest. 
 *         Contains a table of with the column headings: "Class Mark", "Value" and "Web Display Key".
 */
class SystemClassmarkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClassmarkGetListResponse';
    protected $classmarkTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\SystemClassmarkGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setClassmarkTable(TableType $classmarkTable = null)
    {
        $this->classmarkTable = $classmarkTable;
        $this->classmarkTable->setElementName('classmarkTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getClassmarkTable()
    {
        return $this->classmarkTable;
    }
}
