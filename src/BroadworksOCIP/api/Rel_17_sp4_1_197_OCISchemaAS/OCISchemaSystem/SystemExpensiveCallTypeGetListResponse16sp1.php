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
 * Response to SystemExpensiveCallTypeGetListRequest16sp1. 
 *         The column headings are:
 *         "Alternate Call Indicator", "Treatment Audio File".
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemExpensiveCallTypeGetListResponse16sp1';
    protected $alternateCallIndicatorTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExpensiveCallTypeGetListResponse16sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicatorTable(TableType $alternateCallIndicatorTable = null)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        $this->alternateCallIndicatorTable->setElementName('alternateCallIndicatorTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable;
    }
}
