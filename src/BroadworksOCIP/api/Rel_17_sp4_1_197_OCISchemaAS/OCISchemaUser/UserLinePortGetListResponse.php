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
 * Response to UserLinePortGetListRequest.
 *           Contains a table of line ports configured for a user
 *           The column headings are: "Line Port", "Line Port Type", "In Trunk Group",
 *           "Contact", "Contact2", "Contact3", "Contact4", "Contact5", " Authentication Mode ",
 *           and "Auto-Config Soft Client".
 */
class UserLinePortGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserLinePortGetListResponse';
    protected $linePortTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserLinePortGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLinePortTable(TableType $linePortTable = null)
    {
        $this->linePortTable = $linePortTable;
        $this->linePortTable->setElementName('linePortTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLinePortTable()
    {
        return $this->linePortTable;
    }
}
