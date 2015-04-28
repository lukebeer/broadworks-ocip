<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for Is Active can either be true, or false.
 */
class GroupInstantGroupCallGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantGroupCallGetInstanceListResponse';
    protected $instantGroupCallTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantGroupCallTable(TableType $instantGroupCallTable = null)
    {
        $this->instantGroupCallTable = $instantGroupCallTable;
        $this->instantGroupCallTable->setElementName('instantGroupCallTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInstantGroupCallTable()
    {
        return $this->instantGroupCallTable;
    }
}
