<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLegacyAutomaticCallbackGetLineTypeListRequest. Returns a 3 column
 *         table with column headings: "Line Type", "Match" and "No Match". The possible values
 *         for the "Match" and "No Match" columns are "Accept" and "Deny".
 */
class SystemLegacyAutomaticCallbackGetLineTypeListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLegacyAutomaticCallbackGetLineTypeListResponse';
    protected $lineTypeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetLineTypeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLineTypeTable(TableType $lineTypeTable = null)
    {
        $this->lineTypeTable = $lineTypeTable;
        $this->lineTypeTable->setElementName('lineTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLineTypeTable()
    {
        return $this->lineTypeTable;
    }
}
