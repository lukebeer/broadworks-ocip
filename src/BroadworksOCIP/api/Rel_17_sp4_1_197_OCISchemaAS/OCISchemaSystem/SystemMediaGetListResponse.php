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
 * Response to SystemMediaGetListRequest. The column headings are
 *         "Media Name", "Codec", "Media Type", "Bandwidth Enforcement Type" and "Bandwidth".
 */
class SystemMediaGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaGetListResponse';
    protected $mediaTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaTable(TableType $mediaTable = null)
    {
        $this->mediaTable = $mediaTable;
        $this->mediaTable->setElementName('mediaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMediaTable()
    {
        return $this->mediaTable;
    }
}
