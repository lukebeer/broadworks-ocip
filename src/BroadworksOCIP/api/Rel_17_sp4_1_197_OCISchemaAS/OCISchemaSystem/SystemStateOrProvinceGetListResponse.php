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
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each state or province.
 */
class SystemStateOrProvinceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemStateOrProvinceGetListResponse';
    protected $stateOrProvinceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemStateOrProvinceGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStateOrProvinceTable(TableType $stateOrProvinceTable = null)
    {
        $this->stateOrProvinceTable = $stateOrProvinceTable;
        $this->stateOrProvinceTable->setElementName('stateOrProvinceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getStateOrProvinceTable()
    {
        return $this->stateOrProvinceTable;
    }
}
