<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 */
class SystemMediaServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaServerGetListResponse';
    protected $mediaServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaServerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaServerTable(TableType $mediaServerTable = null)
    {
        $this->mediaServerTable = $mediaServerTable;
        $this->mediaServerTable->setElementName('mediaServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMediaServerTable()
    {
        return $this->mediaServerTable;
    }
}
